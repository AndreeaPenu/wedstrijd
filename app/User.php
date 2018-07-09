<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    protected $table = 'users';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'role_id', 'ip_address', 'name', 'address', 'number', 'city', 'post_code','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function isAdmin(){
        if($this->role->name == "administrator"){
            return true;
        }
        return false;
    }

    public function likes(){
        return $this->belongsToMany('App\Participation', 'likes', 'user_id','participation_id');
    }

    public function participation(){
        return $this->hasOne('App\Participation');
    }
}
