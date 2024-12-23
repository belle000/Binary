<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            // Semester 1
            ['semester_id' => 1, 'name' => 'Introduction to Programming'],
            ['semester_id' => 1, 'name' => 'Discrete Mathematics'],
            // Semester 2
            ['semester_id' => 2, 'name' => 'Data Structures'],
            ['semester_id' => 2, 'name' => 'Algorithms'],
            // Semester 3
            ['semester_id' => 3, 'name' => 'Database Systems'],
            ['semester_id' => 3, 'name' => 'Software Engineering'],
            // Add more subjects for additional semesters
        ];

        foreach ($subjects as &$subject) {
            $subject['created_at'] = Carbon::now();
            $subject['updated_at'] = Carbon::now();
        }

        DB::table('subjects')->insert($subjects);
    }
}
