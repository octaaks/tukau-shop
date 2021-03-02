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
            'image' => ''
        ]);
        Category::create([
            'name' => 'Ikan & Ternak',
            'image' => ''
        ]);
        Category::create([
            'name' => 'Buah-buahan',
            'image' => ''
        ]);
        Category::create([
            'name' => 'Bumbu dan rempah',
            'image' => ''
        ]);
        Category::create([
            'name' => 'Beras dan biji-bijian',
            'image' => ''
        ]);
        Category::create([
            'name' => 'Makanan beku',
            'image' => ''
        ]);
        Category::create([
            'name' => 'Siap makan',
            'image' => ''
        ]);
        Category::create([
            'name' => 'Groceries',
            'image' => ''
        ]);
        Category::create([
            'name' => 'Siap masak',
            'image' => ''
        ]);
    }
}
