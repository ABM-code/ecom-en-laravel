<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'LG Mobile',
                'price' => '200',
                'description' => 'A smart phone with 4GB ram and much accessories',
                'category' => 'mobile',
                'gallery' => 'https://www.aljadeed.com/wp-content/uploads/2020/02/LG-K61.jpg',
            ],
            [
                'name' => 'OPPO Mobile',
                'price' => '300',
                'description' => 'A smart phone with 8GB ram and much accessories',
                'category' => 'mobile',
                'gallery' => 'https://static.digit.in/default/deb2162982e36fc9d2f43943d9292f538f73ecac.png?tr=w-1200',
            ],
            [   'name' => 'samsung Mobile',
                'price' => '400',
                'description' => 'A smart phone with 16GB ram and much accessories',
                'category' => 'mobile',
                'gallery' => 'https://images.samsung.com/is/image/samsung/p5/de/smartphones/galaxy-s20/s20-fe-buy/carousel-kv/009_sku_kv/mo/S20-FE_Lavender_SKUimage.jpg',
            ],
            [
                'name' => 'iphone Mobile',
                'price' => '1000',
                'description' => 'A smart phone with 32GB ram and much accessories',
                'category' => 'mobile',
                'gallery' => 'https://images-na.ssl-images-amazon.com/images/I/51m095zShrL._AC_SX466_.jpg',
            ],
        ]);
    }
}
