<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'product_name'=>$faker->name,
        'product_slug'=>'product-slug',
        'price'=>$faker->numberBetween(50, 200),
        'thumbnail'=>'https://fyf.tac-cdn.net/images/products/small/BF116-11KM.jpg?auto=webp&quality=25',
        'topic_id'=>$faker->numberBetween(1,3),
        'accessories'=>$faker->text,
        'promotion'=>$faker->text,
        'title'=>$faker->text,
        'description'=>$faker->text,
        'qty'=>20,
        'status'=>1
        ];
});
