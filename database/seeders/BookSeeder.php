<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            // Books for 'Introduction to Programming'
            [
                'subject_id' => 1,
                'title' => 'Learn Programming Basics',
                'author' => 'John Doe',
                'is_recommended' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'subject_id' => 1,
                'title' => 'Advanced Programming Techniques',
                'author' => 'Jane Smith',
                'is_recommended' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Books for 'Discrete Mathematics'
            [
                'subject_id' => 2,
                'title' => 'Discrete Mathematics Explained',
                'author' => 'Alan Turing',
                'is_recommended' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'subject_id' => 2,
                'title' => 'A Beginner’s Guide to Discrete Math',
                'author' => 'Grace Hopper',
                'is_recommended' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Add more books for additional subjects
        ];

        DB::table('books')->insert($books);
    }
}
