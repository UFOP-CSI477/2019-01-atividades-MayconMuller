<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    //

    public function admin() {
      return view('administrador');
    }

    public function cliente(){
    	return view('paciente');
    }

    //teste comit
}
