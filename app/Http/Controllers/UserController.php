<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function perfil(){
       
        $id = auth()->user()->id;
        $name = auth()->user()->name;
        $email = auth()->user()->email;
        return \response()->json(
            [
                "id" =>  $id,
                "name" =>  $name,
                "email" =>  $email
            ]
        );
    }
}
