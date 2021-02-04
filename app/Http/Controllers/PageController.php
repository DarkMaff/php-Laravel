<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class PageController extends Controller
{
    public function inicio(){
        return view('fotos');
        
    }

    public function datosmultas(){
        return view('multas');
    }
}
