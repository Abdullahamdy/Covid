<?php

namespace Database\Seeders;

use App\Models\Category as ModelsCategory;
use Illuminate\Database\Seeder;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = ModelsCategory::create([
        	'name' => 'new Category',
        	
        ]);
    }
}
