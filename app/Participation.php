<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{   
    protected $fillable = [
        'photo','period_id', 'user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function period(){
        return $this->belongsTo('App\Period');
    }
}
