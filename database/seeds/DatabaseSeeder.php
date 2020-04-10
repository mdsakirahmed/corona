<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(QuestionAnswerSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(CommonInformationSeeder::class);
        $this->call(SocialMediaLinkOfWebsiteSeeder::class);
        $this->call(EmailAddressOfWebsiteSeeder::class);
        $this->call(OfficialAddressOfWebsiteSeeder::class);
        $this->call(InformationSenderEmailOfWebsiteSeeder::class);
        $this->call(ContactNumberOfWebsite::class);
        $this->call(CertificateTempleteSeeder::class);

    }
}
