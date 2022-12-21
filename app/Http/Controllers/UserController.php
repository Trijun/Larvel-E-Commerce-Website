<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    //
    function login(Request $req){

        $user =  User::where(['email' => $req->email])->first();
        if($user &&  Hash::check($req->password,$user->password)){

            // tried this code but it doesn't work
            
            $req->session()->put('user',$user['name']);

            // new code that I have created
            
            // Session::put('name',$user->name); 

            return redirect('/');
        }
        else{
            return "username and password is not matched";
        } 
    }  
}
