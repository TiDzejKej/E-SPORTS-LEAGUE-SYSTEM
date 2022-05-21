<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Player;

class TeamsController extends Controller
{
    public function showTeams()
    {
        $teams = Team::with('league')->get();

        return view('showteams', ['teams'=>$teams]);
    }
    public function showPlayersteam($id)
    {
        $players = Player::all()->where('team_id', $id);

        return view('showplayersteam', ['players'=>$players]);
    }


    public function addTeam()
    {
        return view('addteam');
    }
    public function deleteTeam($id)
    {
        Team::destroy($id);

        return redirect('/home/showteams');
    }

    public function submitTeam(Request $request)
    {
        $check = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'league_id' => 'required',
        ]);

        if($check != null)
        {
            Team::create([
                'name' => $request->name,
                'description' => $request->description,
                'league_id' => $request->league_id,
            ]);
            return redirect('/home')->with(['message' => 'Elegancko dodane']);
        }

        return redirect('/home')->with(['message' => 'Lipton, cos sie zwalilo']);

    }
}
