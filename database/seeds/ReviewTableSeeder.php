<?php

namespace Laraecart;

use DB;
use Illuminate\Database\Seeder;

class EcommerceTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('reviews')->insert([
            
        ]);

        DB::table('permissions')->insert([
            [
                'slug'      => 'ecommerce.review.view',
                'name'      => 'View Review',
            ],
            [
                'slug'      => 'ecommerce.review.create',
                'name'      => 'Create Review',
            ],
            [
                'slug'      => 'ecommerce.review.edit',
                'name'      => 'Update Review',
            ],
            [
                'slug'      => 'ecommerce.review.delete',
                'name'      => 'Delete Review',
            ],
            
            
        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/ecommerce/review',
                'name'        => 'Review',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/ecommerce/review',
                'name'        => 'Review',
                'description' => null,
                'icon'        => 'icon-book-open',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'review',
                'name'        => 'Review',
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
                'module'    => 'Review',
                'user_type' => null,
                'user_id'   => null,
                'key'       => 'ecommerce.review.key',
                'name'      => 'Some name',
                'value'     => 'Some value',
                'type'      => 'Default',
                'control'   => 'text',
            ],
            */
        ]);
    }
}
