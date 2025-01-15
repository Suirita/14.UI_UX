<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Answer;

class AnswerSeeder extends Seeder
{
    public function run()
    {
        $answers = [
            ['score' => 4, 'student_id' => 1, 'question_id' => 1],
            ['score' => 3, 'student_id' => 2, 'question_id' => 2],
            ['score' => 5, 'student_id' => 3, 'question_id' => 3],
            ['score' => 2, 'student_id' => 4, 'question_id' => 4],
        ];

        foreach ($answers as $answer) {
            Answer::create(array_merge($answer, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
