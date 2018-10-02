<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ProductRecipe extends Model
{   
    use SoftDeletes;
    
    protected $fillable = ['product_id', 'quantity'];
    protected $dates = ['deleted_at'];


    public function product(){
        return $this->belongsTo('App\Product', 'product_id');
    }


}
