<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('shops')->insert([
            [
                'owner_id' => 1,
                'name' => 'shop name',
                'information' => 'shop information',
                'filename' => '',
                'is_selling' => true
            ],
            [
                'owner_id' => 2,
                'name' => 'shop name',
                'information' => 'shop information',
                'filename' => '',
                'is_selling' => true
            ],
        ]);
    }
}
