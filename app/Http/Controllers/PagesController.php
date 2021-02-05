<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models;



class PagesController extends Controller
{
    public function __invoke(){
        return view("welcome");
    }
    
}
