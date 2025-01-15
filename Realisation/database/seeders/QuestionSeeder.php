<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    public function run()
    {
        $questions = [
            ['title' => 'Francais Question 1', 'description' => 'Presentez vous en français !', 'branch_id' => 1],
            ['title' => 'Anglais Question 1', 'description' => 'Present yourself in English !', 'branch_id' => 2],
            ['title' => 'Programmation Question 1', 'description' => "Une question sur un tag.", 'branch_id' => 3],
            ['title' => 'Soft Skills Question 1', 'description' => 'Gestion de stress', 'branch_id' => 4],
            ['title' => 'Travail en Equipe Question 1', 'description' => 'Describe how you work in a team.', 'branch_id' => 5],
        ];

        foreach ($questions as $question) {
            Question::create(array_merge($question, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
