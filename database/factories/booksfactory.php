<?php /** @noinspection ALL */

use Faker\Generator as Faker;

$factory->define(App\books::class, function (Faker $faker) {
    return [
        'name'=>$faker->name(),
        'pages'=>$faker->randomNumber(3),
        'ISBN'=>$faker->sentence(5),
        'price'=>$faker->randomNumber(4)
        //
    ];
});
