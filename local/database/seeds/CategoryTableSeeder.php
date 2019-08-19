<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'name' => 'Women'
        ]);
         DB::table('category')->insert([
            'name' => 'Men'
        ]);
          DB::table('category')->insert([
            'name' => 'Kids'
        ]);
    }
}
