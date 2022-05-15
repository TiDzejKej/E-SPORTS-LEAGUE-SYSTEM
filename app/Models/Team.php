<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Player;

class Team extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'league_id'
    ];

    public function league()
    {
        return $this->belongsTo('App\Models\League');
    }

    public function player()
    {
        return $this->hasMany('App\Models\Player');
    }

}
