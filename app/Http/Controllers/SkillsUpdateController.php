<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\skills;
use DB;

class SkillsUpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.skillsUpdate');
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

    public function updateSkills(Request $request){
        $skillname = $request->get('skillName');
        $skilltype = $request->get('skillType');
        $skillrating = $request->get('skillRating');
        $box = $request->get('box');

        if(!empty($skillname) && empty($skilltype) && empty($skillrating) && !empty($box)){
            DB::table('skills')->where(['box'=>$box])->update(['skillname'=>$skillname]);
            return redirect('admin');
        }else if(empty($skillname) && !empty($skilltype) && empty($skillrating) && !empty($box)){
            DB::table('skills')->where(['box'=>$box])->update(['skilltype'=>$skilltype]);
            return redirect('admin');
        }else if(empty($skillname) && empty($skilltype) && !empty($skillrating) && !empty($box)){
            DB::table('skills')->where(['box'=>$box])->update(['skillrating'=>$skillrating]);
            return redirect('admin');
        }else{
            DB::table('skills')->where(['box'=>$box])->update(['skillname'=>$skillname]);
            DB::table('skills')->where(['box'=>$box])->update(['skilltype'=>$skilltype]);
            DB::table('skills')->where(['box'=>$box])->update(['skillrating'=>$skillrating]);
            return redirect('admin');
        }


    }
}
