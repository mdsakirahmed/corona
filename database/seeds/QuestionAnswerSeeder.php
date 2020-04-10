<?php

use Illuminate\Database\Seeder;

class QuestionAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question_answers')->insert([
            'question' => 'What is capital of bangladesh ?',
            'option1' => 'Dhaka',
            'option2' => 'Khulna',
            'option3' => 'Chittagong',
            'option4' => 'Rajshahi',
            'answer' => '1',
            'status' => '1',
        ]);
    }
}
