<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('admin.dashboard.index');
    }

    public function login(){
        return view('admin/login');
    }

    public function checklogin(Request $request){
        $this->validate($request,[
            'password' => 'required|min:3'
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password'), 
        );

        if(Auth::attempt($user_data)){
            return redirect('/admin');
            
        }
        else{
            return back()->with('error', 'Wrong Login Details');
        }
    }

    public function logout(){
        session_start();
        unset($_SESSION['user_branch']);
        Auth::logout();
        return redirect('admin/login');
    }

}
