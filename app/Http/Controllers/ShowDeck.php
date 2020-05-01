<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowDeck extends Controller
{
    protected $suits;
    protected $pips;
    protected $cards = [];

    public function __construct()
    {
        $this->suits = ["S", "H", "D", "C"];
        //1=A,10=X,11=J,12=Q,13=K
        $this->pips = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13'];

        foreach ($this->suits as $suit) {
            foreach ($this->pips as $pip) {
                $this->cards[] = [$suit, $pip];
            }
        }

    }

    public function __invoke()
    {

        $rules = [
            'players' => 'required|numeric|min:0'
        ];

        request()->validate($rules);

        $persons = 5;

        shuffle($this->cards);

        // dd($this->cards);
        $players = [];

        $distribution = array_chunk($this->cards, $persons);

        foreach ($distribution as $chunk) {
            for ($i=0; $i <count($chunk) ; $i++) { 
                $players[$i][] = $chunk[$i];
            }
        }

        // dd($players);

        foreach ($players as $player) {
            foreach($player as $card) {
                echo implode('=', $card);
                echo ', ';
            }
            echo '<br>';
        }

        return view('index');
    }
}
