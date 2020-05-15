<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Legislator;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Legislator::class, function (Faker $faker) {
    $starting = $faker->date();
    $ending = date('Y-m-d', strtotime("+12 months", strtotime($starting)));

    return [
        'name' => $faker->firstName,
        'surname' => $faker->lastName,
        'email' => $faker->unique()->email,
        'cellphone' => $faker->numberBetween($min=1100000000, $max=1599999999),
        'address' => $faker->streetAddress ,
        'country' => $faker->countryCode,
        'votes' =>  $faker->randomNumber(),
        'party' => $faker->randomElement($array = array ('Azul','Rojo','Verde')),
        'starting' => $starting,
        'ending' => $ending,
        'automatic' => true,
    ];
});
