<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        
        $this->call(CompanySeeder::class);
        
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'role_id' => 1,
        ]);
        User::factory()->create([
            'name' => 'Freelancer User',
            'email' => 'freelancer@example.com',
            'talent_type' => 'freelancer',
            'role_id' => 2,
        ]);
        User::factory()->create([
            'name' => 'Contractor User',
            'email' => 'contractor@example.com',
            'talent_type' => 'contractor',
            'role_id' => 2,
        ]);
        User::factory()->create([
            'name' => 'Operator User',
            'email' => 'operator@example.com',
            'role_id' => 3,
        ]);
        User::factory()->create([
            'name' => 'Chemseddine Berghach',
            'email' => 'chemseddine@example.com',
            'role_id' => 4,
        ]);
        User::factory(6)->create();

        $operators = User::where('role_id', 3)->get();
        foreach ($operators as $operator) {
            $company = Company::inRandomOrder()->first();
            $operator->company()->attach($company->id);
        }

        $this->call(TagSeeder::class);

        $this->call(PostSeeder::class);

    }
}
