<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    function pagar() {
        return view("pagamento");
    }
}
