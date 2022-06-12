<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => 'Car',
                'sort_order' => 1
            ],
            [
                'name' => 'Motorcycle',
                'sort_order' => 2
            ],
            [
                'name' => 'Other',
                'sort_order' => 3
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => 'Race',
                'sort_order' => 1,
                'primary_category_id' => 1
            ],
            [
                'name' => 'City',
                'sort_order' => 2,
                'primary_category_id' => 1
            ],
            [
                'name' => 'City',
                'sort_order' => 3,
                'primary_category_id' => 2
            ],
            [
                'name' => 'Race',
                'sort_order' => 4,
                'primary_category_id' => 2
            ],
            [
                'name' => 'Off Road',
                'sort_order' => 5,
                'primary_category_id' => 2
            ],
            [
                'name' => 'Walk Or Work',
                'sort_order' => 6,
                'primary_category_id' => 3
            ],
        ]);
    }
}
