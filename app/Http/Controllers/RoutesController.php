<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutesController extends Controller
{
    public function home()
    {

        return view('home');
    }
    public function corso()
    {

        return view('corso');
    }
    public function carriere()
    {

        return view('carriere');
    }
    public function lezionegratuita(){
    
        return view('lezione-gratuita');
        
    }
    public function iscriviti()
    {

        return view('iscriviti');
    }
}
