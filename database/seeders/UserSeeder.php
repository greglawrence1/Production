<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users= [
            ['name' => 'bob', 'email' => 'bob@example.com', 'password' => '1234', 'is_admin' => '1'],
            ['name' => 'alice', 'email' => 'alice@example.com', 'password' => '1234', 'is_admin' => '0']
        ];
        foreach($users as $user){
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make($user['password']),
                'is_admin' => $user['is_admin'],
            ]);
        }
    }
}
