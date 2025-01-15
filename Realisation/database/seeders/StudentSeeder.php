<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $students = [
            ['first_name' => 'Ahmed', 'last_name' => 'El Mansouri'],
            ['first_name' => 'Fatima', 'last_name' => 'Benali'],
            ['first_name' => 'Mohamed', 'last_name' => 'Alaoui'],
            ['first_name' => 'Khadija', 'last_name' => 'El Amrani'],
            ['first_name' => 'Youssef', 'last_name' => 'Belkacem'],
        ];

        foreach ($students as $student) {
            Student::create(array_merge($student, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
