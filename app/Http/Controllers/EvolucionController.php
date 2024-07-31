<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvolucionController extends Controller
{
    public function index(){
        return view('evolucion');
    }
}
