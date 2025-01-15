<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Branch;

class BranchSeeder extends Seeder
{
    public function run()
    {
        $branches = [
            ['title' => 'Francais'],
            ['title' => 'Anglais'],
            ['title' => 'Programmation'],
            ['title' => 'Soft Skills'],
            ['title' => 'Travail en Equipe'],
        ];

        foreach ($branches as $branch) {
            Branch::create(array_merge($branch, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
