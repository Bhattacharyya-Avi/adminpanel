<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules = [
            [
                'name' => 'Dashboard',
                'slug' => 'dashboard'
            ],
            [
                'name' => 'User',
                'slug' => 'user'
            ],
            [
                'name' => 'Product',
                'slug' => 'product'
            ],
            [
                'name' => 'Category',
                'slug' => 'category'
            ],
            [
                'name' => 'Order',
                'slug' => 'order'
            ],
            [
                'name' => 'Role',
                'slug' => 'role'
            ],
        ];
        foreach ($modules as $module) {
            Module::create($module);
        }
    }
}
