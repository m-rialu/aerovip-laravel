<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Passenger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    protected $passenger;

    public function __construct(Passenger $passenger)
    {
        $this->passenger = $passenger;
    }



    public function create()
    {
        return view("cadastro");
    }


    public function index()
    {
        $passengers = Passenger::all();
        $cards = Card::all();
        return view('pagamento', compact('passengers'), compact('cards'));


    }

    public function store(request $request)
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
        return redirect()->route('home');
    }

    // public function indexCard()
    // {
    //     $cards = Card::all();
    //     return view('pagamento', compact('cards'));
    // }

    protected $card;

    public function construct(Card $card)
    {
        $this->card = $card;
    }

    public function destroy(int $id)
    {
        $card = Card::findOrFail($id);
        $card->delete();
        return redirect()->route('flights');
    }



    // vvv testes feitos antes abaixo vvv

    // // $passenger = new Passenger;

    // $passenger->name = $request->name;
    // $passenger->password = $request->password;
    // $passenger->email = $request->email;

    // $passenger->save();

    // return redirect()->route('home');

    // public function show($id)
    // {

    //     $passenger = $this->passenger->findOrFail($id);
    //     return view('pagamento', compact('passenger'));
    // }
}
