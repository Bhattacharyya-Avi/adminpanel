<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionTableSeeder extends Seeder
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
                'description' => 'Dashboard'
            ],
            [
                'name' => 'User',
                'description' => 'User'
            ],
            [
                'name' => 'Product',
                'description' => 'Product'
            ],
            [
                'name' => 'Category',
                'description' => 'Category'
            ],
            [
                'name' => 'Order',
                'description' => 'Order'
            ],
            [
                'name' => 'Role',
                'description' => 'Role'
            ],
        ];
        foreach ($modules as $module) {
            Module::create($module);
        }
    }
}
