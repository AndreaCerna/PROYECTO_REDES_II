<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welc()
    {
        return \view('welcome');
    }

    public function doc()
    {
        return \view('Pagina.Doc');
    }
    public function config ()
    {
        return \view('Pagina.config');
    }
    public function save (Request $request){

        $data = request()->validate([
            'ipv4'=>'required|max:75',
            'masc'=>'required|max:75',

        ],[

            'ipv4.required'=>'El campo Ipv4 no debe estar vacio.',
            'masc.required'=>'El campo de mascara no debe estar vacio.',


        ]);
        try{
            $direccion = $_POST['ipv4'];
            $mascara = $_POST['masc'];
            $gateway = $_POST['gate'];
            $servido = $_POST['server'];

        }
        catch(QueryException $queryException){ //capturamos el erro en el catch
            return redirect()->route('configuracion')->with('warning', 'Ocurrio un error al registrar. ');
        }

        return redirect()->route('configuracion')->with('success', 'Registro realizado exitosamente');
    }

}
