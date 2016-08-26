<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Campos que permitirão Mass Assignment 
    protected $fillable = [
        "name",
        "description"
    ];
    
    // Promover o relacionamento (Category -> Resource)
    public function resources()
    {
        // Resource possui várias categorias
        return $this->belongsToMany('App\Resource', 'resources_categories');
    }
}
