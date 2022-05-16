<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Nurul Ain',
            'email' => 'ain@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10)
        ]);

        DB::table('users')->insert([
            'name' => 'Camelia',
            'email' => 'camy@gmail.com',
            'role' => 'peniaga',
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10)
        ]);
       
        DB::table('users')->insert([
            'name' => 'Iskandar',
            'email' => 'iskandar@gmail.com',
            'role' => 'pelanggan',
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10)
        ]);
    }
}
