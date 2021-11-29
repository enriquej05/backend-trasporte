<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruta;


class RutaController extends Controller
{
    public function ruta(Request $request){

        $ruta =  Ruta::where('lugar_nombre', $request->ruta)->get();
        $lugar_nombre = "";
        $coordenada_a = "";
        $coordenada_b = "";
        foreach($ruta as $properties){
            $lugar_nombre = $properties->lugar_nombre;
            $coordenada_a = $properties->coordenada_a;
            $coordenada_b = $properties->coordenada_b;
        }
        // var_dump($lugar_nombre);
        // var_dump($coordenada_a);
        // var_dump($coordenada_b);
        return \response()->json([
            // 'lugar_nombre' => "Hola",
            'coordenada_a' => $coordenada_a,
            'coordenada_b' => $coordenada_b
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
