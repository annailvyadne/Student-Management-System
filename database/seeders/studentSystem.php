<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class studentSystem extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Populate students table
        $students = [
            [
                'user_id' => '1',
                'fname' => 'John',
                'lname' => 'Doe',
                'dob' => '2024-04-09',
                'gender' => 'male',
                'address' => 'Taguig City',
                'pnum' => '09999605969'
            ],
        ];

        DB::table('students')->insert($students);
    }
}
