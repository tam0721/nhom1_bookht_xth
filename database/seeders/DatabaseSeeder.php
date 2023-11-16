<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            'name' => 'Thiên Phúc',
            'email' => 'ttphuc141195@gmail.com',
            'password' => Hash::make('12345678'),
            'so_dien_thoai' => '0776349260',
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@fe.edu.vn',
            'password' => Hash::make('12345678'),
            'so_dien_thoai' => '0123456789',
        ]);
    }
}
