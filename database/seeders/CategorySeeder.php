<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'category_name' => 'Ingredients',
                'description' => 'Includes raw ingredients.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Packaging Materials',
                'description' => 'Include packaging such as straws and.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
