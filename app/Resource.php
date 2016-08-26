<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    // Campos que permitirão Mass Assignment 
    protected $fillable = [
        "name",
        "technicalDescription",
        "informalDescription",
        "uriResources"
    ];
    
    // Promover o relacionamento (Resource -> Category)
    public function categories()
    {
        // Resource possui várias categorias
        return $this->belongsToMany('App\Category', 'resources_categories');
    }
}
