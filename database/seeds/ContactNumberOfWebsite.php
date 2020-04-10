<?php

use Illuminate\Database\Seeder;

class ContactNumberOfWebsite extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_number_of_websites')->insert([
            'icon' => 'fas fa-phone-square-alt',
            'name' => 'Mobile',
            'number' => '+880 1304 734623',
        ]);
    }
}
