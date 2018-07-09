<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{   
    protected $fillable = [
        'file', 'period_id', 'user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function period(){
        return $this->belongsTo('App\Period');
    }

    public function likes(){
        return $this->belongsToMany('App\User','likes');
    }

    public function getLikeCountAttribute(){
        return $this->likes->count();
    }
}
