<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Topic;
use Faker\Generator as Faker;

$factory->define(Topic::class, function (Faker $faker) {
    return [
        'topic_name'=>$faker->name,
        'description'=>$faker->text,
        'status'=>1,
    ];
});
