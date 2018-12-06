<?php

use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    $type_ = ["dulce","salado"]; // clasificación de los productos. // TODO: Hacerlo por tabla.
    $path = storage_path('app/public/uploads'); //carga las imágenes fake un la carpeta /uploads dentro de storage.

    return [
      'name' => $faker->sentence(3),
      'description' => $faker->sentence(20),
      'image'=> $faker->image($path, 200, 200,'food'),
      'price' => $faker->randomFloat(2, 300, 4000),
      'type' => $type_[rand(0,1)],
    ];
});
