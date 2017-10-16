<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class sistema extends Controller
{
    public function formulario ()
    {
        return view('proyecto.form');
    }
}

