<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    protected $fillable = [
        'begin','end'
    ];

    public function participations(){
        return $this->belongsToMany('App\Participation','participations');
    }
}
