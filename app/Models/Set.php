<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    use HasFactory;

    protected $fillable = [
        'player1_id',
        'player2_id',
        'date',
        'table_tupe',
        'tournament',
        'table_type',
        'venue',
    ];

    public function player1(){
        return $this->belongsTo('App\Models\Player', "player1_id");
    }

    public function player2(){
        return $this->belongsTo('App\Models\Player', "player2_id");
    }
}
