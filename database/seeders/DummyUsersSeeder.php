<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin Deeniyat',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'Teacher Deeniyat',
                'email' => 'teacher@gmail.com',
                'role' => 'teacher',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'Student Deeniyat',
                'email' => 'student@gmail.com',
                'role' => 'student',
                'password' => bcrypt('12345678')
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
