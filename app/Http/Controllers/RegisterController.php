<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function registro(Request $request) {

        $this -> validate($request,[
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required',

        ]);

        $user = User::create([
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);
        $token = $user->createToken('TransporteToken')->accessToken;
        return response()->json([
            'token'  => $token,
            'id'     => $user->id,
            'email'  => $request->email,
            'name'   => $request->name,

    ],200);

    }
    public function login(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(auth()->attempt($credentials)){
            $token = auth()->user()->createToken('TransporteToken')->accessToken;
            return response()->json(['token' => $token,
            "id"    => auth()->user()->id,
            "email" => auth()->user()->email,
            "name"  => auth()->user()->name,

        ], 200);

        }
        else {
            return response()->json(['error' => 'UnAuthorised'], 401);
        }
    }
}
