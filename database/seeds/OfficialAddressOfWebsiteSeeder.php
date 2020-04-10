<?php

use Illuminate\Database\Seeder;

class OfficialAddressOfWebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Official Address Of Websites
        DB::table('official_address_of_websites')->insert([
            'icon' => 'fas fa-laptop-house',
            'name' => 'Main Office',
            'address' => '42/1 Segunbagicha (4th floor), Dhaka-1000',
        ]);
    }
}
