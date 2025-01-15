<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Interview;

class InterviewSeeder extends Seeder
{
    public function run()
    {
        Interview::create(['created_at' => now(), 'updated_at' => now()]);
        Interview::create(['created_at' => now(), 'updated_at' => now()]);
        Interview::create(['created_at' => now(), 'updated_at' => now()]);
    }
}
