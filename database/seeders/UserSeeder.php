<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Admin',
            'email'=>'admin@example.com',
            'email_verified_at'=>date('Y-m-d h:i:s'),
            'password'=>Hash::make('1234pass'),
            // 'role_id'=>1,
            //'can_publish'=>1
            // So this admin can push to the source file
        ]);
    }
}
