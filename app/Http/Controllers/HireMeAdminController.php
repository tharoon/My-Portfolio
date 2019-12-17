<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hireMe;
use DB;

class HireMeAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.hireMeAdmin');
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

    public function updateHireMe(Request $request){
        $amount = $request->get('amount');
        $service = $request->get('service');
        $box = $request->get('box');

        if(!empty($amount) && empty($service)){
            DB::table('hireme')->where(['box'=>$box])->update(['amount'=>$amount]);
            return redirect('admin');
        }else if(!empty($service) && empty($amount)){
             DB::table('hireme')->where(['box'=>$box])->update(['service1'=>$service]);
             return redirect('admin');
        }else{
            DB::table('hireme')->where(['box'=>$box])->update(['amount'=>$amount]);
            DB::table('hireme')->where(['box'=>$box])->update(['service1'=>$service]);
            return redirect('admin');
        }
        
       
        
    }
}
