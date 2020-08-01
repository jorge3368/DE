<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Empresa;
use Faker\Generator as Faker;

$factory->define(Empresa::class, function (Faker $faker) {
    return [
        'nombre_empresa' => $faker->word,
        'direccion_empresa' => $faker->text,
        'telefono_empresa' => '2289-8989'
    ];
});
