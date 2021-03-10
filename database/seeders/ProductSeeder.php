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
            'name'          => 'Kentang',
            'category_id'   => 1,
            'price'         => 10000,
            'weight'        => 1000,
            'image'         => '/data_file/kentang.jpg',
            'description'   => '-'
        ])->categories()->attach(1);
        
        Product::create([
            'name'          => 'Daging Sapi',
            'category_id'   => 2,
            'price'         => 25000,
            'weight'        => 1000,
            'image'         => '/data_file/daging.jpg',
            'description'   => '-'
        ])->categories()->attach(2);

        Product::create([
            'name'          => 'Pisang',
            'category_id'   => 3,
            'price'         => 6000,
            'weight'        => 1000,
            'image'         => '/data_file/pisang.jpg',
            'description'   => '-'
        ])->categories()->attach(3);
        
        Product::create([
            'name'          => 'Asam Jawa',
            'category_id'   => 4,
            'price'         => 2500,
            'weight'        => 100,
            'image'         => '/data_file/asam-jawa.jpg',
            'description'   => '-'
        ])->categories()->attach(4);
        
        Product::create([
            'name'          => 'Beras',
            'category_id'   => 5,
            'price'         => 15000,
            'weight'        => 1000,
            'image'         => '/data_file/beras.jpg',
            'description'   => '-'
        ])->categories()->attach(5);

        Product::create([
            'name'          => 'Nugget Ikan',
            'category_id'   => 6,
            'price'         => 6000,
            'weight'        => 250,
            'image'         => '/data_file/nugget.jpg',
            'description'   => '-'
        ])->categories()->attach(6);
        
        Product::create([
            'name'          => 'Sosis',
            'category_id'   => 7,
            'price'         => 20000,
            'weight'        => 500,
            'image'         => '/data_file/sosis.jpg',
            'description'   => '-'
        ])->categories()->attach(7);
        
        Product::create([
            'name'          => 'Garam',
            'category_id'   => 8,
            'price'         => 5000,
            'weight'        => 10000,
            'image'         => '/data_file/garam.jpg',
            'description'   => '-'
        ])->categories()->attach(8);

        Product::create([
            'name'          => 'Nila Bumbu Kuning',
            'category_id'   => 9,
            'price'         => 12000,
            'weight'        => 500,
            'image'         => '/data_file/nila-bumbu-kuning.jpg',
            'description'   => '-'
        ])->categories()->attach(9);
    }
}
