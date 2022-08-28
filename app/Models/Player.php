<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'playing_style',
        'right_handed',
    ];

    public function setsAsPlayer1() {
        return $this->hasMany("App\Models\Set", 'player1_id');
     }

     public function setsAsPlayer2() {
        return $this->hasMany("App\Models\Set", 'player2_id');
     }

     public function ballsFor(){
         return $this->hasMany("App\Models\Ball", 'player_id');
     }

     public function ballsAgainst(){
        return $this->hasMany("App\Models\Ball", 'loser');
    }
}
