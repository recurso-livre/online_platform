<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'phone', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Promover o relacionamento (User -> Address)
    public function addresses()
    {
        return $this->belongsToMany('App\Address', 'address_user');
    }

    // Promover o relacionamento (User -> Resource)
    public function resources()
    {
        return $this->hasMany('App\Resource');
    }

}