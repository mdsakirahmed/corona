<?php

use Illuminate\Database\Seeder;

class CertificateTempleteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('certificates')->insert([
            'certificate' => 'Certificate Of Completion',
            'which_certificate' => 'This Certificate is awarded to',
            'summary' => 'For Laravel Awareness Session',
            'award' => 'Awarded on',
            'signature1' => 'default.png.',
            'signature2' => 'default.png',
            'name1' => 'Cosmic',
            'name2' => 'Sakir',
            'designation1' => 'CEO SoftCare IT',
            'designation2' => 'CEO DataTech BD',
            'background_color' => '#ffffff',
            'site_bar_color' => '#03D7F8',
        ]);
    }
}
