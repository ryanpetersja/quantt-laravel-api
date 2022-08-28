<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ball extends Model
{
    use HasFactory;

    protected $fillable = [
        "point_id",
        "winner",
        "spin",
        "from",
        "to",
        "stroke_type",
        "is_service",
        "player_id",
        'loser'
    ];

    public function winning_player(){
        return $this->belongsTo("App\Models\Player", 'player_id');
    }

    public function losing_player(){
        return $this->belongsTo("App\Models\Player", 'loser');
    }
}
