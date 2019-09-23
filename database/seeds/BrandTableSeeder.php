<?php

namespace Laraecart;

use DB;
use Illuminate\Database\Seeder;

class EcommerceTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('brands')->insert([
            
        ]);

        DB::table('permissions')->insert([
            [
                'slug'      => 'ecommerce.brand.view',
                'name'      => 'View Brand',
            ],
            [
                'slug'      => 'ecommerce.brand.create',
                'name'      => 'Create Brand',
            ],
            [
                'slug'      => 'ecommerce.brand.edit',
                'name'      => 'Update Brand',
            ],
            [
                'slug'      => 'ecommerce.brand.delete',
                'name'      => 'Delete Brand',
            ],
            
            
        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/ecommerce/brand',
                'name'        => 'Brand',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/ecommerce/brand',
                'name'        => 'Brand',
                'description' => null,
                'icon'        => 'icon-book-open',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'brand',
                'name'        => 'Brand',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

        ]);

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
            [
                'pacakge'   => 'Ecommerce',
                'module'    => 'Brand',
                'user_type' => null,
                'user_id'   => null,
                'key'       => 'ecommerce.brand.key',
                'name'      => 'Some name',
                'value'     => 'Some value',
                'type'      => 'Default',
                'control'   => 'text',
            ],
            */
        ]);
    }
}
