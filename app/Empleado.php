<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['id_empresa', 'nombre_empleado', 'apellido_empleado', 'telefono_empleado', 'direccion_empleado'];

    public function empresa(){
    	return $this->belongsTo('App\Empresa', 'id_empresa');
    }
}
