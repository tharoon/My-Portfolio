<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\personalInformation;
use DB;

class PersonalInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.personalInformationAdminPannel'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updatePersonalInformation(Request $request){
        $id = 1;
       /* $personalInformation = personalInformation::find($id);
        $personalInformation->address = $request->get('address');
        $personalInformation->phone_number = $request->get('phoneNumber');
        $personalInformation->whatsapp_number = $request->get('whatsapp');
        $personalInformation->skype_id = $request->get('skype');
        $personalInformation->email = $request->get('email');
        $personalInformation->save();*/


        $address = $request->get('address');
        $phone = $request->get('phoneNumber');
        $whatsapp_number = $request->get('whatsapp');
        $skype_id = $request->get('skype');
        $email = $request->get('email');

        if(!empty($address) && empty($phone) && empty($whatsapp_number) && empty($skype_id) && empty($email)){
            DB::table('personal_information')->where(['id'=>$id])->update(['address'=>$address]);
            return redirect('admin');
        }else if(empty($address) && !empty($phone) && empty($whatsapp_number) && empty($skype_id) && empty($email)){
            DB::table('personal_information')->where(['id'=>$id])->update(['phone_number'=>$phone]);
            return redirect('admin');
        }else if(empty($address) && empty($phone) && !empty($whatsapp_number) && empty($skype_id) && empty($email)){
            DB::table('personal_information')->where(['id'=>$id])->update(['whatsapp_number'=>$whatsapp_number]);
            return redirect('admin');
        }else if(empty($address) && empty($phone) && empty($whatsapp_number) && !empty($skype_id) && empty($email)){
            DB::table('personal_information')->where(['id'=>$id])->update(['skype_id'=>$skype_id]);
            return redirect('admin');
        }else if(empty($address) && empty($phone) && empty($whatsapp_number) && empty($skype_id) && !empty($email)){
            DB::table('personal_information')->where(['id'=>$id])->update(['email'=>$email]);
            return redirect('admin');
        }else{
            DB::table('personal_information')->where(['id'=>$id])->update(['address'=>$address]);
            DB::table('personal_information')->where(['id'=>$id])->update(['phone_number'=>$phone]);
            DB::table('personal_information')->where(['id'=>$id])->update(['skype_id'=>$skype_id]);
            DB::table('personal_information')->where(['id'=>$id])->update(['email'=>$email]);
            return redirect('admin');
        }
    }
}
