<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\signUp;

class SignUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
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
        $this->validate($request,[
            'name' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
            'rPassword' => 'required'
        ]);

        $password = $request->get('password');
        $repeatpassword = $request->get('rPassword');

        if($password != $repeatpassword){
            echo "<script>alert('Password Did not match')
            </script>";
            return redirect('index');
        }else{
        $signUp = new signUp();
        $signUp->firstname = $request->get('name');
        $signUp->lastname = $request->get('lastName');
        $signUp->email = $request->get('email');
        $signUp->username = $request->get('username');
        $signUp->password = $request->get('password');
        $signUp->userrole = 'guest';
        $signUp->save();

        return redirect('index')->with('success', 'Thank you for Signing Up');

        }

        
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



}
