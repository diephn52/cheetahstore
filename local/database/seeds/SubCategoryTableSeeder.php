<?php

use Illuminate\Database\Seeder;

class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_category')->insert([
            'name' => 'Sneakers',
            'id_category' => '1',

        ]);
        DB::table('sub_category')->insert([
            'name' => 'Apparel',
            'id_category' => '1',

        ]);
        DB::table('sub_category')->insert([
            'name' => 'Accessories',
            'id_category' => '1',

        ]);
        DB::table('sub_category')->insert([
            'name' => 'New',
            'id_category' => '1',

        ]);
        DB::table('sub_category')->insert([
            'name' => 'Sale',
            'id_category' => '1',

        ]);



        DB::table('sub_category')->insert([
            'name' => 'Sneakers',
            'id_category' => '2',

        ]);
        DB::table('sub_category')->insert([
            'name' => 'Apparel',
            'id_category' => '2',

        ]);
        DB::table('sub_category')->insert([
            'name' => 'Accessories',
            'id_category' => '2',

        ]);
        DB::table('sub_category')->insert([
            'name' => 'New',
            'id_category' => '2',

        ]);
        DB::table('sub_category')->insert([
            'name' => 'Sale',
            'id_category' => '2',

        ]);


        DB::table('sub_category')->insert([
            'name' => 'Sneakers',
            'id_category' => '3',

        ]);
        DB::table('sub_category')->insert([
            'name' => 'Apparel',
            'id_category' => '3',

        ]);
        DB::table('sub_category')->insert([
            'name' => 'Accessories',
            'id_category' => '3',

        ]);
        DB::table('sub_category')->insert([
            'name' => 'New',
            'id_category' => '3',

        ]);
        DB::table('sub_category')->insert([
            'name' => 'Sale',
            'id_category' => '3',

        ]);

    }
}
