<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    function create()
    {
        return view("cadastro");
    }


function register()
{
    $passengers = Passenger::all();
    return view('pagamento', compact('passengers'));
// return view ('passagem', compact('passengers'); <- com as outras telas

}

function store(request $request)
{
    $validator = Validator::make(
        $request->all(),
        [
            'name' => 'required|string|',
            'password' => 'required|string|min:3',
            'email' => 'required|string|min:3',
        ]
    );
    if ($validator->fails()) {
        return redirect()->route('user.register')->withErrors($validator)->withInput();
    }

    Passenger::create($request->all());
    return redirect()->route('flights');
}
}

