<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Test1',
            'email' => 'test1@gmail.com',
            'password' => Hash::make('password123'),
            'gender' => '',
            'address' => '1 Hoang Sa st., HCMC',
            'phone_number' => '0931259382',
        ]);
        DB::table('users')->insert([
            'name' => 'Test2',
            'email' => 'test2@gmail.com',
            'password' => Hash::make('password123'),
            'gender' => '',
            'address' => '2 Hoang Sa st., HCMC',
            'phone_number' => '0987362626',
        ]);
        DB::table('users')->insert([
            'name' => 'Test3',
            'email' => 'test3@gmail.com',
            'password' => Hash::make('password123'),
            'gender' => '',
            'address' => '3 Hoang Sa st., HCMC',
            'phone_number' => '0987364633',
        ]);
    }
}
