<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        $user = new User();
        $user->name =$request->name;
        $user->email =$request->email;
        $user->password =$request->password;

        $user->save();

        return response()->json([
            "status" => 1,
            "msg" => "Registro de usuario existoso."
        ]);
    }
    public function login(Request $request){

    }
    public function userProfile(){

    }
    public function logout(){

    }
    
}
