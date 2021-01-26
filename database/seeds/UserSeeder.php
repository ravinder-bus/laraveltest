<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
        DB::table('users')->insert([[
			'name' => "admin",
			'email' => 'admin@gmail.com',
			'password'=>123456,
            'role'=>'admin',
			
			],[
            'name' => "user",
            'email' => 'user@gmail.com',
            'password'=>123456,
            'role'=>'user'
            
            ]]);
    }
}
