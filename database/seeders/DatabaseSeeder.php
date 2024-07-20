<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\users;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat user admin
        users::create([
            'nama' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password123'), // Ganti password sesuai kebutuhan
            'role' => 'admin',
        ]);

        // Buat user ps (misalnya public service)
        users::create([
            'nama' => 'PS User',
            'email' => 'psuser@gmail.com',
            'password' => Hash::make('password123'), // Ganti password sesuai kebutuhan
            'role' => 'ps',
        ]);
    }
}
