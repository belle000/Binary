<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $semesters = [];
        $majors = DB::table('majors')->pluck('id'); // Get all major IDs

        foreach ($majors as $majorId) {
            for ($i = 1; $i <= 8; $i++) {
                $semesters[] = [
                    'major_id' => $majorId,
                    'number' => $i,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
            }
        }

        DB::table('semesters')->insert($semesters);
    }
}
