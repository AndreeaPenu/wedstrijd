<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
    protected $fillable = [
        'user_id','period_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
