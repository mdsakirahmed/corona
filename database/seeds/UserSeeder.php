<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'image'     => 'default.png',
            'name'      => 'Md. Sakir Ahmed',
            'email'     => 'm.sakirahmed@gmail.com',
            'phone'     => '+880 1304-734623',
            'password'  => Hash::make('123456789'),
        ]);
    }
}
