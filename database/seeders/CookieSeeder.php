<?php

namespace Database\Seeders;

use App\Models\Cookie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class CookieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) { 
            
            $cookie = new Cookie();

            $cookie->name = $faker->unique()->sentence($faker->numberBetween(2, 3));
            $cookie->client = $faker->unique()->sentence($faker->numberBetween(2, 3));
            $cookie->description = $faker->sentence($faker->numberBetween(100, 200));
            $cookie->url = $faker->url();
            $cookie->thumb = $faker->imageUrl();
            $cookie->slug = Str::slug($cookie->name, '-');

            $cookie->save();
        }
    }
}
