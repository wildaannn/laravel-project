<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'admin',
            'email'=>'wildan@gmail.com',
            'password'=>bcrypt('rahasia')
        ]);
        User::create([
            'name'=>'staff',
            'email'=>'sabil@gmail.com',
            'password'=>bcrypt('rahasiaa')
        ]);
    }
}
