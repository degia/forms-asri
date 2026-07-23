<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RoleAndPermissionSeeder::class,
            ChecklistTemplateSeeder::class,
        ]);

        // Create admin user
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@asri.co.id',
            'password' => Hash::make('password'),
            'nik' => 'ADM001',
            'department' => 'IT Operation',
            'business_unit' => 'ASRI',
            'site' => 'Head Office',
        ]);
        $admin->assignRole('admin');

        // Create sample teknisi
        $teknisi = User::create([
            'name' => 'Teknisi IT',
            'email' => 'teknisi@asri.co.id',
            'password' => Hash::make('password'),
            'nik' => 'IT001',
            'department' => 'IT Operation',
            'business_unit' => 'ASRI',
            'site' => 'Head Office',
        ]);
        $teknisi->assignRole('teknisi');

        // Create sample pengguna
        $pengguna = User::create([
            'name' => 'Karyawan User',
            'email' => 'user@asri.co.id',
            'password' => Hash::make('password'),
            'nik' => 'USR001',
            'department' => 'Finance',
            'business_unit' => 'ASRI',
            'site' => 'Head Office',
        ]);
        $pengguna->assignRole('pengguna');

        // Create sample supervisor
        $supervisor = User::create([
            'name' => 'Supervisor IT',
            'email' => 'supervisor@asri.co.id',
            'password' => Hash::make('password'),
            'nik' => 'SUP001',
            'department' => 'IT Operation',
            'business_unit' => 'ASRI',
            'site' => 'Head Office',
        ]);
        $supervisor->assignRole('supervisor_it');

        // Create sample manager
        $manager = User::create([
            'name' => 'Manager IT Operation',
            'email' => 'manager@asri.co.id',
            'password' => Hash::make('password'),
            'nik' => 'MGR001',
            'department' => 'IT Operation',
            'business_unit' => 'ASRI',
            'site' => 'Head Office',
        ]);
        $manager->assignRole('manager_it');
    }
}
