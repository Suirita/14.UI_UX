<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchInterviewSeeder extends Seeder
{
    public function run()
    {
        $branchInterview = [
            ['branch_id' => 1, 'interview_id' => 1],
            ['branch_id' => 2, 'interview_id' => 2],
            ['branch_id' => 3, 'interview_id' => 3],
        ];

        DB::table('branch_interview')->insert(array_map(function ($item) {
            return array_merge($item, [
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }, $branchInterview));
    }
}
