<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Sejarah', 'slug' => 'sejarah']);
        Category::create(['name' => 'Teknologi', 'slug' => 'teknologi']);
        Category::create(['name' => 'Kuliner', 'slug' => 'kuliner']);
        Category::create(['name' => 'Budaya', 'slug' => 'budaya']);
        Category::create(['name' => 'Wisata', 'slug' => 'wisata']);
        Category::create(['name' => 'Sains', 'slug' => 'sains']);
        Category::create(['name' => 'Olahraga', 'slug' => 'olahraga']);
        Category::create(['name' => 'Kesehatan', 'slug' => 'kesehatan']);
        Category::create(['name' => 'Ekonomi', 'slug' => 'ekonomi']);
        Category::create(['name' => 'Hiburan', 'slug' => 'hiburan']);
    }
}
