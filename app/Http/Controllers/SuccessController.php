<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessController extends Controller
{
    function pagamentoRealizado() {
        return view("sucesso");
    }
}
