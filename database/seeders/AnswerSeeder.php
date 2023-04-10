<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Answers for question 1
        DB::table('answers')->insert([
            'question_id' => 1,
            'type' => 1,
            'content' => "Answer 1"
        ]);

        DB::table('answers')->insert([
            'question_id' => 1,
            'type' => 2,
            'content' => "Answer 2"
        ]);

        DB::table('answers')->insert([
            'question_id' => 1,
            'type' => 3,
            'content' => "Answer 3"
        ]);

        DB::table('answers')->insert([
            'question_id' => 1,
            'type' => 4,
            'content' => "Answer 4"
        ]);

        // Answers for question 2
        DB::table('answers')->insert([
            'question_id' => 2,
            'type' => 1,
            'content' => "Answer 1"
        ]);

        DB::table('answers')->insert([
            'question_id' => 2,
            'type' => 2,
            'content' => "Answer 2"
        ]);

        DB::table('answers')->insert([
            'question_id' => 2,
            'type' => 3,
            'content' => "Answer 3"
        ]);

        DB::table('answers')->insert([
            'question_id' => 2,
            'type' => 4,
            'content' => "Answer 4"
        ]);

        // Answers for question 3
        DB::table('answers')->insert([
            'question_id' => 3,
            'type' => 1,
            'content' => "Answer 1"
        ]);

        DB::table('answers')->insert([
            'question_id' => 3,
            'type' => 2,
            'content' => "Answer 2"
        ]);

        DB::table('answers')->insert([
            'question_id' => 3,
            'type' => 3,
            'content' => "Answer 3"
        ]);

        DB::table('answers')->insert([
            'question_id' => 3,
            'type' => 4,
            'content' => "Answer 4"
        ]);
    }
}
