<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Sayuran',
            'slug' => 'sayuran',
            'image' => ''
        ]);
        Category::create([
            'name' => 'Ikan & Ternak',
            'slug' => 'daging',
            'image' => ''
        ]);
        Category::create([
            'name' => 'Buah-buahan',
            'slug' => 'buah',
            'image' => ''
        ]);
        Category::create([
            'name' => 'Bumbu dan rempah',
            'slug' => 'bumbu',
            'image' => ''
        ]);
        Category::create([
            'name' => 'Beras dan biji-bijian',
            'slug' => 'biji',
            'image' => ''
        ]);
        Category::create([
            'name' => 'Makanan beku',
            'slug' => 'beku',
            'image' => ''
        ]);
        Category::create([
            'name' => 'Siap makan',
            'slug' => 'siapmakan',
            'image' => ''
        ]);
        Category::create([
            'name' => 'Groceries',
            'slug' => 'groceries',
            'image' => ''
        ]);
        Category::create([
            'name' => 'Siap masak',
            'slug' => 'siapmasak',
            'image' => ''
        ]);
    }
}
