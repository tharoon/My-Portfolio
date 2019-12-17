<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hireMe;
use DB;

class InsertHireMeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.insertHireMe');
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


    public function insertHireMe(Request $request){
        $insertHireMe = new hireMe();
        $insertHireMe->amount = $request->get('amount');
        $insertHireMe->mainservice = $request->get('mainservice');
        $insertHireMe->service1 = $request->get('service1');
        $insertHireMe->service2 = $request->get('service2');
        $insertHireMe->service3 = $request->get('service3');
        $insertHireMe->service4 = $request->get('service4');
        $insertHireMe->box = $request->get('box');
        $insertHireMe->save();

        return redirect('admin');

    }
}
