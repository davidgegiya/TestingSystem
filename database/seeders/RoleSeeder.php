<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => uniqid(),
            'name' => 'admin'
        ]);

        DB::table('roles')->insert([
            'id' => uniqid(),
            'name' => 'teacher'
        ]);

        DB::table('roles')->insert([
            'id' => uniqid(),
            'name' => 'user'
        ]);
    }
}
