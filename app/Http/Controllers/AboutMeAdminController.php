<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\aboutMe;
use DB;

class AboutMeAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.aboutMeAdminPannel');
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
        //
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

    public function updateAboutMe(Request $request){
        $id = 1;
      /*  $aboutMe = aboutMe::find($id);
        $aboutMe->address = $request->get('address');
        $aboutMe->phone = $request->get('phoneNumber');
        $aboutMe->email = $request->get('email');
        $aboutMe->image = $request->get('profilePic');
        $aboutMe->save();*/

        $address = $request->get('address');
        $phone = $request->get('phoneNumber');
        $email = $request->get('email');
        $image = $request->get('profilePic');


        if(!empty($address) && empty($phone) && empty($email) && empty($image)){
            DB::table('aboutme')->where(['id'=>$id])->update(['address'=>$address]);
            return redirect('admin');
        }else if(empty($address) && !empty($phone) && empty($email) && empty($image)){
            DB::table('aboutme')->where(['id'=>$id])->update(['phone'=>$phone]);
            return redirect('admin');
        }else if(empty($address) && empty($phone) && !empty($email) && empty($image)){
            DB::table('aboutme')->where(['id'=>$id])->update(['email'=>$email]);
            return redirect('admin');
        }else if(empty($address) && empty($phone) && empty($email) && !empty($image)){
             DB::table('aboutme')->where(['id'=>$id])->update(['image'=>$image]);
            return redirect('admin');
        }else{
            DB::table('aboutme')->where(['id'=>$id])->update(['address'=>$address]);
            DB::table('aboutme')->where(['id'=>$id])->update(['phone'=>$phone]);
            DB::table('aboutme')->where(['id'=>$id])->update(['email'=>$email]);
            DB::table('aboutme')->where(['id'=>$id])->update(['image'=>$image]);
            return redirect('admin');
        }

        
    }
}
