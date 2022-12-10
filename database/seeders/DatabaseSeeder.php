<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'ADMIN',
        ]);

        DB::table('roles')->insert([
            'id' => 2,
            'name' => 'COORDINATOR',
        ]);

        DB::table('roles')->insert([
            'id' => 3,
            'name' => 'STUDENT',
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@syllabus-iud.com',
            'password' => Hash::make('123456789'),
            'role_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Coordinator 1',
            'email' => 'coordinator1@syllabus-iud.com',
            'password' => Hash::make('123456789'),
            'role_id' => 2,
        ]);

        DB::table('users')->insert([
            'name' => 'Student 1',
            'email' => 'student1@syllabus-iud.com',
            'password' => Hash::make('123456789'),
            'role_id' => 3,
        ]);
    }
}
