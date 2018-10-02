<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Recipe extends Model
{   
    use SoftDeletes;
    
    protected $fillable = ['name', 'portions', 'error_range', 'tax',  'price', 'instructions'];
    protected $dates = ['deleted_at'];




    public function products(){

        return $this->hasMany('App\ProductRecipe', 'recipe_id'); 
  
    }



}
