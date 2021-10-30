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
}
