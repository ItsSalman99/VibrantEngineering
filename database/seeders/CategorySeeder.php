<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Category::count() == 0) {
            Category::create([
                'name' => 'Sealing Machine'
            ]);
            Category::create([
                'name' => 'Packaging Machine'
            ]);
            Category::create([
                'name' => 'Filling Machine'
            ]);
            Category::create([
                'name' => 'Badge Printers'
            ]);
        }
    }
}
