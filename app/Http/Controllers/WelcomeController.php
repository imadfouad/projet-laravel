<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index($id_comm){
        

        return view('welcome',['id_comm' => $id_comm]);
    }
}
