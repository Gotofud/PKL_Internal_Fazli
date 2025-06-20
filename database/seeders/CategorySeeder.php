<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'nama' => 'Elektronik',
            'slug' => 'elektronik',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::create([
            'nama' => 'Pakaian',
            'slug' => 'pakaian',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::create([
            'nama' => 'Kecantikan',
            'slug' => 'kecantikan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::create([
            'nama' => 'Olahraga',
            'slug' => 'olahraga',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::create([
            'nama' => 'Peralatan Rumah Tangga',
            'slug' => 'peralatan-rumah-tangga',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
