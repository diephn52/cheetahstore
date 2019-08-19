<?php

use Illuminate\Database\Seeder;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('admins')->insert([
            'name' => 'Admin1',
            'email' => 'diephn52@gmail.com',
            'job_title' => 'Test',
            'password' => Hash::make('admin123')
        ]);
    }
}
