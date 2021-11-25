<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruta;


class RutaController extends Controller
{
    public function ruta(Request $request){

        $ruta =  Ruta::where('lugar_nombre', $request->ruta)->get();

        return \response()->json([
            'datos' => $ruta
        ]);
        
        // $id = auth()->user()->id;
        // $name = auth()->user()->name;
        // $email = auth()->user()->email;
        // return \response()->json(
        //     [
        //         "id" =>  $id,
        //         "name" =>  $name,
        //         "email" =>  $email
        //     ]
        // );
    }
}
