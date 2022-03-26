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

}
