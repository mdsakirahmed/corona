<?php

use Illuminate\Database\Seeder;

class CommonInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('common_website_infos')->insert([
            'status' => '1',
            'database_name' => 'offer_db',
            'database_user_name' => 'root',
            'database_user_password' => '123456',
            'name' => 'DataTech BD Ltd.',
            'domain' => 'www.datatechbd.com',
            'logo' => 'default.png',
            'favicon' => 'default.png',
            'copy_right' => 'DataTech BD Ltd.',
            'background_color' => '#ffffff',
            'support_bar_color' => '#ffffff',
            'nav_bar_color' => '#ffffff',
            'banner_color' => '#ffffff',
            'footer_color' => '#ffffff',
            'special_color' => '#ffffff',
        ]);
    }
}
