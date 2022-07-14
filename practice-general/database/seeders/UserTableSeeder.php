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


        // $faker = Faker::create();
        // DB::table('users')->insert([
        //     'name' => 'Nhat Anh',
        //     'age' => '18',
        //     'email'=> 'example@gmail.com',
        //     'password'=> '123',
        //     'birthday'=> '1999-05-07'
        // ]);

        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'age' => rand(18, 30),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);


        // App\User::create([
        //     'name' => 'Nhat Anh',
        //     'age' => '18',
        //     'email'=> 'example@gmail.com',
        //     'password'=> '123',
        //     'birthday'=> '1999-05-07'
        // ]);

        // App\User::create([
        //     'name' => 'Minh Tuan',
        //     'age' => '20',
        //     'email'=> 'example123@gmail.com',
        //     'password'=> '123456',
        //     'birthday'=> '2000-08-12'
        // ]);
    }
}
