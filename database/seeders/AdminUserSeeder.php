<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create default admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@flowershop.com',
            'password' => Hash::make('admin123'),
            'email_verified_at' => now(),
        ]);

        // Create additional admin users if needed
        User::create([
            'name' => 'Manager',
            'email' => 'manager@flowershop.com',
            'password' => Hash::make('manager123'),
            'email_verified_at' => now(),
        ]);

        $this->command->info('Admin users created successfully!');
        $this->command->info('Default admin credentials:');
        $this->command->info('Email: admin@flowershop.com');
        $this->command->info('Password: admin123');
        $this->command->info('Manager Email: manager@flowershop.com');
        $this->command->info('Manager Password: manager123');
    }
}
