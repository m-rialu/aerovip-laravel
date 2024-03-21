<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlightsController extends Controller
{
    public function voo() {
        return view("passagem");
    }
}
