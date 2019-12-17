<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\signUp;
use DB;

class LoginController extends Controller
{
     public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $this->validate($request,[
            'username' => 'required',
            'password' => 'required'
        ]);


        $userRole =  DB::table('users')->select('userrole')->where(['username'=>$username])->first();

        $userRoleValue = $userRole->userrole; 

        if($userRoleValue == 'guest'){
        	echo "<script> 
                    alert('Hi you are logged in as Guest')</script>";
           return view('pages.indexGuest');
       }else if($userRoleValue == 'admin'){
       		echo "<script> 
                    alert('Hi you are logged in as admin')</script>";
           return view('pages.indexAdmin');
       }else
       {
       	echo "<script> 
                    alert('Invalid username and password')</script>";
            return view('pages.index'); 
       }
    }
}
