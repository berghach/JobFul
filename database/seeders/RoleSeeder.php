<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'admin'],
            ['name' => 'company'],
            ['name' => 'employee'],
            ['name' => 'freelancer'],
            ['name' => 'operator'],
            ['name' => 'user']
        ];
        foreach ($data as $d) {
            Role::create($d);
        }
    }
}
