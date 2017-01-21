<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        User::create([
        	'name'=>'hunter',
        	'email'=>'mvsrakeshkumarreddy@gmail.com',
        	'password'=>bcrypt('reddy.9778')
        	]);
        User::create([
        	'name'=>'shoot',
        	'email'=>'shooter@gmail.com',
        	'password'=>bcrypt('shootall')
        	]);
    }
}
