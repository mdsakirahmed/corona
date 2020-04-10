<?php

use Illuminate\Database\Seeder;

class InformationSenderEmailOfWebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Information Sender Email Of Websites
        DB::table('information_sender_email_of_websites')->insert([
            'driver' => 'smtp',
            'host' => 'local',
            'port' => '8080',
            'user_name' => 'info@datatechbd.com',
            'password' => '123456',
            'encryption' => 'abc',
            'no_reply' => 'noreplay@datatechbd.com',
            'receiver_email' => 'm.sakirahmed@gmail.com',
            'receive_status' => '1',
        ]);
    }
}
