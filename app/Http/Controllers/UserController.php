<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    //
    function login(Request $req){
        //return $req->input();
        $user =  User:: where(['email' => $req->email])->first();
        if($user && Hash::check($req->password,$user->password)){
            $req->session()->put('user',$user);
            return redirect('/index');
        }
        else{
            return "username and password is not matched";
        } 
    }
}
