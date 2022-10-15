<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'theme' => 'Ethics',
            'content' => "Trolley problem #1: A runaway trolley is on course to collide with and kill 5 people down the track and there is 1 person on a branching track. You can flip a switch to divert the trolley to the track with 1 person. What will you do?"
        ]);

        DB::table('questions')->insert([
            'theme' => 'Ethics',
            'content' => "Trolley problem #2: A runaway trolley is on course to collide with a wall killing the 5 passagers. You are on a bridge on top of the track and there is 1 fat person with you. on a bridge over the tracks. You can push the fat person to their death to stop the train. What will you do?"
        ]);

        DB::table('questions')->insert([
            'theme' => 'Ethics',
            'content' => "Axe murderer: A man carrying an axe is knocks on your door demanding to the location of your friend who is hiding in your room. What will you do?"
        ]);
    }
}
