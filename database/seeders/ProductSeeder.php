<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        [ 
        'name'=>'MI10 mobile',
        'price' => '20000',
        'description' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
        'category' =>'mobile',
        'gallery' => "https://i01.appmifile.com/webfile/globalimg/7/3C9A8327-71B0-C265-0BF1-006BFFD99C57.png",
        ],
        [ 
        'name'=>'Oppo mobile',
        'price' => '12000',
        'description' =>'Lorem ipsum dolor sit amet, consectetur adipisci',
        'category' =>'mobile',
        'gallery' => "https://www.nicepng.com/png/full/10-107408_mobile-png-image-hd-all-mobile-phone-png.png",
        ],    
        [ 
            'name'=>'VIVO mobile',
            'price' => '32000',
            'description' =>'Lorem ipsum dolor sit amet, consectetur adipisci',
            'category' =>'mobile',
            'gallery' => "https://www.pngfind.com/pngs/m/116-1162552_latest-smartphones-android-mobile-phones-at-best-smartphone.png",
            ],
             [ 
            'name'=>'A9 samsung mobile',
            'price' => '9000',
            'description' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tristique ligula id risus aliquam vehicula.',
            'category' =>'mobile',
            'gallery' => "https://www.pngarts.com/files/3/Smartphone-Mobile-PNG-Free-Download.png",
            ], 
        ]);
    }
}
