<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\League;
use Illuminate\Support\Facades\DB;

class LeaguesController extends Controller
{
    public function showLeagues()
    {
        $leagues = DB::table('leagues')->get();
        return view('showleagues', ['leagues'=>$leagues]);
    }

    public function addLeague()
    {
        return view('addleague');
    }

    public function submitLeague(Request $request)
    {
        $league = new League();

        $league->name = $request->name;
        $league->description = $request->description;

        $league->save();

        return redirect('/home');
    }


}
