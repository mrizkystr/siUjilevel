<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
class RoleTableSeeder extends Seeder
{
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'role' => 'admin',
            'guard_name' => 'api',
        ]);

        Role::create([
            'name' => 'murid',
            'role' => 'murid',
            'guard_name' => 'api',
        ]);

        Role::create([
            'name' => 'guru',
            'role' => 'guru',
            'guard_name' => 'api',
        ]);

        Role::create([
            'name' => 'tu',
            'role' => 'tu',
            'guard_name' => 'api',
        ]);

        Role::create([
            'name' => 'kepsek',
            'role' => 'kepsek',
            'guard_name' => 'api',
        ]);

        Role::create([
            'name' => 'kurikulum',
            'role' => 'Kurikulum',
            'guard_name' => 'api',
        ]);
        
    }
}
