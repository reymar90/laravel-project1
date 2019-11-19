<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayersController extends Controller
{
    public function index()
    {
        $players = Player::all();
        // $users = User::all();

        //  return $users;
        // return $projects;
        //  return $players;
        return view('players.index', compact('players'));

    }
}
