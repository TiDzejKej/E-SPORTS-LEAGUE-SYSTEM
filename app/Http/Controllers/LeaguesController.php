<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\League;
use Illuminate\Support\Facades\DB;


class LeaguesController extends Controller
{
    public function showLeagues()
    {
        $leagues = League::all();
        return view('showleagues', ['leagues'=>$leagues]);
    }

    public function addLeague()
    {
        return view('addleague');
    }

    public function deleteLeague($id)
    {
        League::destroy($id);

        return redirect('/home/showleagues');
    }

    public function submitLeague(Request $request)
    {
        $check = $request->validate([
           'name'=> 'required',
           'description' => 'required'
        ]);
        if(is_null($check))
            return redirect('/home');

        else
        {
            $league = new League();

            $league->name = $request->name;
            $league->description = $request->description;

            $league->save();

            return redirect('/home');
        }


    }


}
