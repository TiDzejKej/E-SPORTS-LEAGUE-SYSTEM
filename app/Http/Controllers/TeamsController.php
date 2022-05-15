<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamsController extends Controller
{
    public function showTeams()
    {
        $teams = Team::with('league')->get();

        return view('showteams', ['teams'=>$teams]);
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
        if(is_null($check))
            return redirect('/home');
        else
        {
            $team = new Team();

            $team->name = $request->name;
            $team->description = $request->description;
            $team->league_id = $request->league_id;

            $team->save();

            return redirect('/home');
        }

    }
}
