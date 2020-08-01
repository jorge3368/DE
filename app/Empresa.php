<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = ['nombre_empresa','direccion_empresa','telefono_empresa'];

    
}
