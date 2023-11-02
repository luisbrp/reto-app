<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistroPagina extends Model
{
    protected $table = 'registros_pagina'; 

    public $timestamps = false; 

    protected $fillable = ['url', 'direccion_ip']; 

    
}
