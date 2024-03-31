<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $users = [
            'name' => 'Mark Jundy',
            'email' => 'markjundy@gmail.com',
            'password' => Hash::make('mark123'),
            'role' => 'Admin'
        ];
        DB::table('users')->insert($users);

        $users1 = [
            'name' => 'John Smith',
            'email' => 'johnsmith@gmail.com',
            'password' => Hash::make('john123'),
            'role' => 'Staff'
        ];
        DB::table('users')->insert($users1);
    }
}
