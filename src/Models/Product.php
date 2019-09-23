<?php

namespace Laraecart\Ecommerce\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Litepie\Database\Model;
use Litepie\Database\Traits\Slugger;
use Litepie\Filer\Traits\Filer;
use Litepie\Hashids\Traits\Hashids;
use Litepie\Repository\Traits\PresentableTrait;
use Litepie\Revision\Traits\Revision;
use Litepie\Trans\Traits\Translatable;
class Product extends Model
{
    use Filer, SoftDeletes, Hashids, Slugger, Translatable, Revision, PresentableTrait;


    /**
     * Configuartion for the model.
     *
     * @var array
     */
     protected $config = 'laraecart.ecommerce.product.model';


    /**
     * The category that belong to the product.
     */
    public function category(){
        return $this->hasMany('Ecommerce\Product\Models\Category');
    }


    /**
     * The brand that belong to the product.
     */
    public function brand(){
        return $this->belongsTo('Ecommerce\Product\Models\Brand');
    }


    /**
     * The reviews that belong to the product.
     */
    public function reviews(){
        return $this->hasMany('Ecommerce\Product\Models\Review');
    }
}
