<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create([
            'name'          => 'Indomie',
            'category_id'   => 1,
            'price'         => 2500,
            'weight'        => 250,
            'image'         => '-',
            'description'   => 'Mie instan'
        ])->categories()->attach(1);
        
        Product::create([
            'name'          => 'Sedaap',
            'category_id'   => 1,
            'price'         => 2500,
            'weight'        => 250,
            'image'         => '-',
            'description'   => 'Mie instan'
        ])->categories()->attach(1);

        Product::create([
            'name'          => 'Lemonilo',
            'category_id'   => 1,
            'price'         => 6000,
            'weight'        => 250,
            'image'         => '-',
            'description'   => 'Mie instan'
        ])->categories()->attach(1);
    }
}
