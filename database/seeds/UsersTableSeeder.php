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
    \DB::table('users')->delete();
 
    \DB::table('users')->insert([
    'id' => '1',
    'name' => 'user1',
    'email' => 'user1@example.com',
    'password' => 'password'
    ]);
    }
}
