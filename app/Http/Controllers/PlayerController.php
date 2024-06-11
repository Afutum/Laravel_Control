<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function player()
    {
        $players = [
            [
                'id' => 1,
                'name' => 'jobi',
                'level' => 10,
                'exp' => 100,
                'life' => 3,
            ],
            [
                'id' => 2,
                'name' => 'chiba',
                'level' => 33,
                'exp' => 3830,
                'life' => 0,
            ],
            [
                'id' => 3,
                'name' => 'hoge',
                'level' => 8,
                'exp' => 63,
                'life' => 5,
            ]
        ];

        return view('accounts/players', ['players' => $players]);
    }

    public function showPlayer(Request $request)
    {
        return redirect('accounts/players');
    }
}
