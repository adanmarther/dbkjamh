<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class respuestaController extends Controller
{
    //


    public function index(){


        return response()->json([


            "success"=>true,
            "data"=>"HOLA, SOY ADAN MARTINEZ",
            "message"=>"registro encontrado",
            "cantidad"=>1

        ]);
    }
}
