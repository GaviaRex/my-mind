<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoralTheorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Moral theory 1
        DB::table('moral_theories')->insert([
            'type' => 1,
            'name' => "Deontology",
            'summary' => "Act only according to maxims that you would want as universal laws",
        ]);

        // Moral theory 2
        DB::table('moral_theories')->insert([
            'type' => 2,
            'name' => "Utilitarianism",
            'summary' => "Act in ways that maximizes happiness or pleasure and minimizes unhappinesss or pain",
        ]);

        // Moral theory 3
        DB::table('moral_theories')->insert([
            'type' => 3,
            'name' => "Virtue ethics",
            'summary' => "Act as a virtuous person would act in your situation",
        ]);

        // Moral theory 4
        DB::table('moral_theories')->insert([
            'type' => 4,
            'name' => "Social contract theory",
            'summary' => "Act according to the rules set by the social contract",
        ]);
    }
}
