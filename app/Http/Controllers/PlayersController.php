<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function showPlayers()
    {
        $players = Player::with('team')->get();
        return view('showplayers', ["players"=>$players]);
    }

    public function addPlayer()
    {
        return view('addplayer');
    }

    public function deletePlayer($id)
    {
        Player::destroy($id);

        return redirect('/home/showplayers');
    }


    public function submitPlayer(Request $request)
    {
        $check = $request->validate([
            'name'=> 'required',
            'surname'=> 'required',
            'nickname'=> 'required',
            'team_id'=> 'required',

        ]);

        if(is_null($check))
            return redirect('/home');

        else
        {
            $player = new Player();

            $player->name = $request->name;
            $player->surname = $request->surname;
            $player->nickname = $request->nickname;
            $player->team_id = $request->team_id;

            $player->save();

            return redirect('/home');
        }


    }



}
