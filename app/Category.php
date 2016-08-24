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
}
