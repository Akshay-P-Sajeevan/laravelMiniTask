<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_student')->insert([
            ['id' => 1, 'name' => 'Anju', 'fk_parent_id' => 1, 'gender' => 'female'],
            ['id' => 2, 'name' => 'Alex', 'fk_parent_id' => 2, 'gender' => 'male'],
            ['id' => 3, 'name' => 'Rols', 'fk_parent_id' => 2, 'gender' => 'male'],
            ['id' => 4, 'name' => 'David', 'fk_parent_id' => 3, 'gender' => 'male'],
            ['id' => 5, 'name' => 'Abi', 'fk_parent_id' => 4, 'gender' => 'male'],
            ['id' => 6, 'name' => 'Jinu', 'fk_parent_id' => 5, 'gender' => 'female'],
            ['id' => 7, 'name' => 'Aju', 'fk_parent_id' => 5, 'gender' => 'male'],
        ]);
    }
}
