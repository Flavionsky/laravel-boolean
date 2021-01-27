<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Utenti;

class UtentiController extends Controller
{
    public function index(){

        $users = Utenti::all();
        
    return view('utenti', compact('users'));
    }
}
