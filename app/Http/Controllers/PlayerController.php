<?php

namespace App\Http\Controllers;

use Barryvdh\Debugbar\Facades\Debugbar;
use Barryvdh\Debugbar\Twig\Extension\Debug;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function showPlayer(Request $request)
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

        DebugBar::error('エラーだよ');

        if ($request->session()->exists('login')) {
            return view('accounts/players', ['players' => $players]);
        } else {
            return redirect('/');
        }
    }
}
