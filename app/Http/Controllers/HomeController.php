<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('index' , ['titre' => "Accueil - Thibault Lombart"]);
    }
}
