<?php

namespace Laraecart;

use DB;
use Illuminate\Database\Seeder;

class EcommerceTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            
        ]);

        DB::table('permissions')->insert([
            [
                'slug'      => 'ecommerce.product.view',
                'name'      => 'View Product',
            ],
            [
                'slug'      => 'ecommerce.product.create',
                'name'      => 'Create Product',
            ],
            [
                'slug'      => 'ecommerce.product.edit',
                'name'      => 'Update Product',
            ],
            [
                'slug'      => 'ecommerce.product.delete',
                'name'      => 'Delete Product',
            ],
            
            
        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/ecommerce/product',
                'name'        => 'Product',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/ecommerce/product',
                'name'        => 'Product',
                'description' => null,
                'icon'        => 'icon-book-open',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'product',
                'name'        => 'Product',
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
                'module'    => 'Product',
                'user_type' => null,
                'user_id'   => null,
                'key'       => 'ecommerce.product.key',
                'name'      => 'Some name',
                'value'     => 'Some value',
                'type'      => 'Default',
                'control'   => 'text',
            ],
            */
        ]);
    }
}
