<?php

use App\Category;
use Baum\Node;
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
        $data = array(
        	[
				'name' => 'Videovigilancia', 
				'slug' => 'videovigilancia', 
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', 
				'image' => 'empty',
                'parent_id' => 0

			],
            [
                'name' => 'Control de Acceso', 
                'slug' => 'control-de-acceso', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', 
                'image' => 'empty',
                'parent_id' => 0
            ]
        	);

        Category::insert($data);
    }
}
