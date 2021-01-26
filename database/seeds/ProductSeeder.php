<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([[
			'name' => "watch",
			'image' => 'watch.jpg',
			'price'=>90,
			'description'=>'This is test description',
			'in_stock'=>1,
			
			],[
			'name' => "camera",
			'image' => 'camera.jpg',
			'price'=>90,
			'description'=>'This is test description',
			'in_stock'=>1,
			
			],[
			'name' => "camera",
			'image' => 'camera.jpg',
			'price'=>90,
			'description'=>'This is test description',
			'in_stock'=>1,
			
			],[
			'name' => "camera",
			'image' => 'camera.jpg',
			'price'=>90,
			'description'=>'This is test description',
			'in_stock'=>1,
			
			],[
			'name' => "camera",
			'image' => 'camera.jpg',
			'price'=>90,
			'description'=>'This is test description',
			'in_stock'=>1,

			
			],[
			'name' => "camera",
			'image' => 'camera.jpg',
			'price'=>90,
			'description'=>'This is test description',
			'in_stock'=>1,

			
			],[
			'name' => "camera",
			'image' => 'camera.jpg',
			'price'=>90,
			'description'=>'This is test description',
			'in_stock'=>1,

			
			],[
			'name' => "camera",
			'image' => 'camera.jpg',
			'price'=>90,
			'description'=>'This is test description',
			'in_stock'=>1,

			
			],[
			'name' => "camera",
			'image' => 'camera.jpg',
			'price'=>90,
			'description'=>'This is test description',
			'in_stock'=>1,

			
			],[
			'name' => "camera",
			'image' => 'camera.jpg',
			'price'=>90,
			'description'=>'This is test description',
			'in_stock'=>0,

			
			]]);
    }
}
