<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $value){
            DB::table('users')->insert([
                'name' => $faker-> name,
                // 'age' => $faker-> age,
                'email' => $faker-> email,
                // 'birthday' => $faker -> birhtday,
            ]);
        }

        $faker = Faker::create();
        foreach (range(1,10) as $value){
            DB::table('posts')->insert([
                'content' => $faker-> text,
                // 'age' => $faker-> age,
                'user_id' =>$faker->numberBetween(1,  10),
                // 'birthday' => $faker -> birhtday,
            ]);
        }

        $faker = Faker::create();
        foreach (range(1,10) as $value){
            DB::table('profiles')->insert([
                'address' => $faker-> streetName,
                // 'age' => $faker-> age,
                'tel' => $faker-> phoneNumber,
                'user_id' =>$faker->numberBetween(1,  10),
                'province' =>$faker->country,
                // 'birthday' => $faker -> birhtday,
            ]);
        }

        $faker = Faker::create();
        foreach (range(1,10) as $value){
            DB::table('comments')->insert([
                'content' => $faker-> text,
                // 'age' => $faker-> age,
                // 'tel' => $faker-> phoneNumber,
                'user_id' =>$faker->numberBetween(1,  10),
                'post_id' =>$faker->numberBetween(1,  10),
                
                // 'birthday' => $faker -> birhtday,
            ]);
        }

    }
}
