<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = [
        'user_id','participation_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function participation(){
        return $this->belongsTo('App\Participation');
    }
}
