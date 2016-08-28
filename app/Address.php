<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    // Campos que permitirão Mass Assignment
    protected $fillable = [
        "zipCode",
        "street",
        "additionalData",
        "neighborhood",
        "city",
        "state"
    ];

    // Promover o relacionamento (Address -> User)
    public function users()
    {
        return $this->belongsToMany('App\User', 'address_user');
    }
}
