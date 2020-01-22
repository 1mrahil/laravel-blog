<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => 'admin',
            'email' => 'selamat.jalan237@gmail.com',
            'password' => Hash::make('selematjalan@2018'),
            'created_at' => now(),
            'updated_at' => now()
            ],

            [
            'name' => 'Gert van den Brink',
            'email' => 'range100@me.com',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now()
            ],

            [
            'name' => 'Anke van de Water',
            'email' => 'de_aqua@me.com',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now()
            ],

            [
            'name' => 'Rens van den Brink',
            'email' => 'rensvandenbrink@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now()
            ],
        ]);
    }
}
