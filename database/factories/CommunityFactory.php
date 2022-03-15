<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Community;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

$factory->define(Community::class, function (Faker $faker) {
    //create fake data for communities table
    return [
        'title' => $this->faker->title,
        'content' => $this->faker->text,
    ];
});
