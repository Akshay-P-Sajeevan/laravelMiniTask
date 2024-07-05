<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_parent')->insert([
            ['id' => 1, 'name' => 'John', 'email' => 'John@gmail.com'],
            ['id' => 2, 'name' => 'Tom', 'email' => 'Tom2@gmail.com'],
            ['id' => 3, 'name' => 'Joy', 'email' => 'bin@Jon.com'],
            ['id' => 4, 'name' => 'Adam', 'email' => 'Adam@Yahoo.com'],
            ['id' => 5, 'name' => 'Dennis', 'email' => 'Den@gmail.com'],
        ]);
    }
}
