<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Experienced'],
            ['name' => 'Junior'],
            ['name' => 'Senior'],
            ['name' => 'Management'],
            ['name' => 'Executive'],
            ['name' => 'Technical'],
            ['name' => 'Creative'],
            ['name' => 'Sales'],
            ['name' => 'Marketing'],
            ['name' => 'Engineering'],
            ['name' => 'Design'],
            ['name' => 'Finance'],
            ['name' => 'Customer Service'],
            ['name' => 'Human Resources'],
            ['name' => 'Information Technology'],
            ['name' => 'Healthcare'],
            ['name' => 'Education'],
            ['name' => 'Legal'],
            ['name' => 'Science'],
            ['name' => 'Research'],
            ['name' => 'Consulting'],
            ['name' => 'Hospitality'],
            ['name' => 'Retail'],
            ['name' => 'Manufacturing'],
            ['name' => 'Transportation'],
            ['name' => 'Logistics'],
            ['name' => 'Construction'],
            ['name' => 'Real Estate'],
            ['name' => 'Media'],
            ['name' => 'Entertainment'],
            ['name' => 'Sports'],
            ['name' => 'Non-profit'],
            ['name' => 'Government'],
            ['name' => 'IT'],
            ['name' => 'WEB'],
            ['name' => 'SEO'],
            ['name' => 'FREELANCE'],
            ['name' => 'LANGUAGES'],
            ['name' => 'EMPLOYMENT'],
        ];
        foreach ($data as $d) {
            Tag::create($d);
        }
    }
}
