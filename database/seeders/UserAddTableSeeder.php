<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserAddTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('admin')->insert([
            'name' => 'Admin',
            'username' => 'admin',
            'photo' => faker()->image( 80, 80),
            'phone' => faker()->phoneNumber,
            'address' => faker()->address,
            'status' => faker()->randomElement(['active', 'inactive']),
            'role' => faker()->randomElement(['admin','agent', 'user']),
            'email' => faker()->unique()->safeEmail,
            'password' => Hash::make('admin'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \Illuminate\Support\Facades\DB::table('agent')->insert([
            'name' => 'agent',
            'username' => 'agent',
            'photo' => faker()->image( 80, 80),
            'phone' => faker()->phoneNumber,
            'address' => faker()->address,
            'status' => faker()->randomElement(['active', 'inactive']),
            'role' => faker()->randomElement(['admin','agent', 'user']),
            'email' => faker()->unique()->safeEmail,
            'password' => Hash::make('agent'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \Illuminate\Support\Facades\DB::table('agent')->insert([
            'name' => 'user',
            'username' => faker()->userName,
            'photo' => faker()->image(),
            'phone' => faker()->phoneNumber,
            'address' => faker()->address,
            'status' => faker()->randomElement(['active', 'inactive']),
            'role' => faker()->randomElement(['admin','agent', 'user']),
            'email' => faker()->unique()->safeEmail,
            'password' => Hash::make('123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
