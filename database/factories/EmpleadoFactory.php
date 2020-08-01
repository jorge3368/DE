<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Empleado;
use Faker\Generator as Faker;

$factory->define(Empleado::class, function (Faker $faker) {
    return [
        'id_empresa' => $faker->numberBetween(1,7),
        'nombre_empleado' => $faker->name,
        'apellido_empleado' => $faker->lastName,
        'telefono_empleado' => '7896-6399',
        'direccion_empleado' => $faker->address
    ];
});
