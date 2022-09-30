<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\produk;
use Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        produk::create([
            'productid'     => Str::random(10), 
            'product_name'  => 'Monitor 144Hz',
            'product_price' => '1000000',
            'product_stock' => '534'
        ]);

        produk::create([
            'productid'     => Str::random(10), 
            'product_name'  => 'Keyboard Gaming TKL',
            'product_price' => '584000',
            'product_stock' => '700'
        ]);

        produk::create([
            'productid'     => Str::random(10), 
            'product_name'  => 'Mousepad KVLAR',
            'product_price' => '125000',
            'product_stock' => '243'
        ]);

        produk::create([
            'productid'     => Str::random(10), 
            'product_name'  => 'Headset Gaming',
            'product_price' => '350000',
            'product_stock' => '637'
        ]);

        produk::create([
            'productid'     => Str::random(10), 
            'product_name'  => 'Mouse Gaming 16000DPI',
            'product_price' => '250000',
            'product_stock' => '725'
        ]);
    }
}
