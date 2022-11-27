<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Stephen',
            'email' => 'stephenzbo@gmail.com',
            'password' => Hash::make('12345678'),
            'adminid' => 0
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'adminid' => 1
        ]);

        DB::table('items')->insert([
            'productName' => 'RGB Keyboard',
            'productQuantity' => 50,
            'productCost' => 19.99,
            'productType' => 'Keyboard',
            'productImage' => '',
            'productDescription' => 'Mechanical | USB Plug and Play',
            'productRating' => 5

        ]);
        DB::table('items')->insert([
            'productName' => 'Black RGB Keyboard',
            'productQuantity' => 50,
            'productCost' => 14.99,
            'productType' => 'Keyboard',
            'productImage' => '',
            'productDescription' => 'Backlit | Mechanical Keyboard',
            'productRating' => 4

        ]);
        DB::table('items')->insert([
            'productName' => 'Lightweight Mouse',
            'productQuantity' => 50,
            'productCost' => 39.99,
            'productType' => 'Mouse',
            'productImage' => '',
            'productDescription' => 'Honeycomb Shell | Wired',
            'productRating' => 5

        ]);
        DB::table('items')->insert([
            'productName' => 'RGB Mouse',
            'productQuantity' => 50,
            'productCost' => 24.99,
            'productType' => 'Mouse',
            'productImage' => '',
            'productDescription' => '8000 DPI | Programmable Buttons',
            'productRating' => 3

        ]);
        DB::table('items')->insert([
            'productName' => 'Fruit Silver Monitor',
            'productQuantity' => 50,
            'productCost' => 99.99,
            'productType' => 'Monitor',
            'productImage' => '',
            'productDescription' => '27” 5K display | Camera',
            'productRating' => 4

        ]);
        DB::table('items')->insert([
            'productName' => 'White Ybox Controller',
            'productQuantity' => 50,
            'productCost' => 69.99,
            'productType' => 'Controller',
            'productImage' => '',
            'productDescription' => 'Wireless YBox controller | Adaptive Triggers',
            'productRating' => 5

        ]);
        DB::table('items')->insert([
            'productName' => 'White Minimalistic Keyboard',
            'productQuantity' => 50,
            'productCost' => 19.99,
            'productType' => 'Keyboard',
            'productImage' => '',
            'productDescription' => 'Ultra Slim Flat Wired Keyboard',
            'productRating' => 4

        ]);
        DB::table('items')->insert([
            'productName' => 'Black RGB Gaming Headset',
            'productQuantity' => 50,
            'productCost' => 39.99,
            'productType' => 'Headset',
            'productImage' => '',
            'productDescription' => 'Wired headset | Leatherette Ear Cups',
            'productRating' => 3

        ]);
        DB::table('items')->insert([
            'productName' => 'White Compact Headset',
            'productQuantity' => 50,
            'productCost' => 34.99,
            'productType' => 'Headset',
            'productImage' => '',
            'productDescription' => 'Noise cancelling | Bluetooth',
            'productRating' => 4

        ]);
        DB::table('items')->insert([
            'productName' => 'Doll Monitor',
            'productQuantity' => 50,
            'productCost' => 90,
            'productType' => 'Monitor',
            'productImage' => '',
            'productDescription' => '23” LED Monitor | Full HD',
            'productRating' => 5

        ]);
        DB::table('items')->insert([
            'productName' => 'Logitik Mouse',
            'productQuantity' => 50,
            'productCost' => 59.99,
            'productType' => 'Mouse',
            'productImage' => '',
            'productDescription' => 'Logitik L3000 | Customisable Lighting',
            'productRating' => 4

        ]);
        DB::table('items')->insert([
            'productName' => 'C4llCenter Dual Ear HeadSet',
            'productQuantity' => 50,
            'productCost' => 9.99,
            'productType' => 'Headset',
            'productImage' => '',
            'productDescription' => 'Dual Ear Headset | Foam Pop Filter',
            'productRating' => 2

        ]);






    }
}
