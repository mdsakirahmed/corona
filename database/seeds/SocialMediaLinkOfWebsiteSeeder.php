<?php

use Illuminate\Database\Seeder;

class SocialMediaLinkOfWebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Social Media Link Of Website
        DB::table('social_media_link_of_websites')->insert([
            'icon' => 'fa fa-facebook',
            'name' => 'Facebook',
            'link' => 'https://www.facebook.com/datatechbdltd/',
        ]);
    }
}
