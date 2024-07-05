<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_course')->insert([
            ['id' => 1, 'course_name' => 'English', 'dept' => 'English'],
            ['id' => 2, 'course_name' => 'Mathematics', 'dept' => 'Maths'],
            ['id' => 3, 'course_name' => 'Science', 'dept' => 'Science'],
            ['id' => 4, 'course_name' => 'Economics', 'dept' => 'Science'],
        ]);
    }
}
