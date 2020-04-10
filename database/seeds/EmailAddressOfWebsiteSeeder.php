<?php

use Illuminate\Database\Seeder;

class EmailAddressOfWebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('email_address_of_websites')->insert([
            'icon' => 'fas fa-envelope-open',
            'name' => 'Office',
            'email' => 'info@datatechbd.com',
        ]);
    }
}
