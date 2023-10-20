<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class respuestaController extends Controller
{
    //

/**
 * 
 * Prueba de desarrollo de backend y Api desarrollado por el equipo
 * @return \Illuminate\Http\Response
 *
 * @OA\Get(
 *     path="/api/ejecutar",
 *     tags={"ejecutar"},
 *     summary="Este es un endpoint o metodo para obtener datos y mostrarlos al usuario",
 *     @OA\Response(
 *         response=200,
 *         description="Se devuelven todos los registros cuando la consulta sea satisfactoria"
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="No se pudo realizar la ejecución al parecer hubo un error interno"
 *     )
 * ) 
 */

    public function index(){


        return response()->json([


            "success"=>true,
            "data"=>"HOLA, SOY ADAN MARTINEZ",
            "message"=>"registro encontrado",
            "cantidad"=>1

        ]);
    }
}
