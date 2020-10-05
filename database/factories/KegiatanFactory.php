<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kegiatan;
use Faker\Generator as Faker;

$factory->define(Kegiatan::class, function (Faker $faker) {

    $randomNumber = rand(1, 100);
    $cover = "https://picsum.photos/id/{$randomNumber}/200/300";

    return [
        'judul' => $faker->sentence(4),
        'foto' => $cover,
        'caption' =>  $faker->sentence(50),
    ];
});
