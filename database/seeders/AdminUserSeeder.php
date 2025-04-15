<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'username' => 'admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('bmpcars2025'),
            'role' => 'Employee',
        ]);

        Employee::create([
            'first_name' => 'System',
            'last_name' => 'Admin',
            'user_id' => $user->id,
            'role' => 'Admin',
        ]);
    }
}
