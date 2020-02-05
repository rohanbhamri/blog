<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }

    public function login(){
        return view('login');
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
            return redirect('/');
            
        }
        else{
            return back()->with('error', 'Wrong Login Details');
        }
    }

    public function logout(){
        session_start();
        unset($_SESSION['user_branch']);
        Auth::logout();
        return redirect('login');
    }

}
