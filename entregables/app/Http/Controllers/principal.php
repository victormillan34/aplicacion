<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class principal extends Controller
{
    public function formulario
    {
        retutn view('proyecto.form')
    }
}