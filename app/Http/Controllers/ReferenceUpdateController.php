<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reference;
use DB;

class ReferenceUpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.referenceUpdate');
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


    public function updateReference(Request $request){
        $name = $request->get('name');
        $designation = $request->get('designation');
        $description = $request->get('description');
        $box = $request->get('box');

        if(!empty($name) && empty($designation) && empty($description) && !empty($box)){
            DB::table('references')->where(['box'=>$box])->update(['firstname'=>$name]);
            return redirect('admin');
        }else if(empty($name) && !empty($designation) && empty($description) && !empty($box)){
            DB::table('references')->where(['box'=>$box])->update(['designation'=>$designation]);
            return redirect('admin');
        }else if(empty($name) && empty($designation) && !empty($description) && !empty($box)){
            DB::table('references')->where(['box'=>$box])->update(['description'=>$description]);
            return redirect('admin');
        }else{
            DB::table('references')->where(['box'=>$box])->update(['firstname'=>$name]);
            DB::table('references')->where(['box'=>$box])->update(['designation'=>$designation]);
            DB::table('references')->where(['box'=>$box])->update(['description'=>$description]);
            return redirect('admin');
        }
    }
}
