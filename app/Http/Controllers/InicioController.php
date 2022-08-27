<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InicioRequest;
class InicioController extends Controller
{
    //
    public function create(){
        
        return view('Inicio',compact('inicio'));
}
}