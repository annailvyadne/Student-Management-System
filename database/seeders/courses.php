<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Courses extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Populate courses table
        $courses = [
            [
                'cname' => 'Computer Programming',
                'desc' => 'Programming using Java, C/C++, and C#'
            ],
            [
                'cname' => 'Data Structures',
                'desc' => 'Java Data Structures and Algorithms'
            ]
        ];

        DB::table('courses')->insert($courses);
    }
}
