<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{   
    use SoftDeletes;
    
    protected $fillable = ['name', 'code', 'group_id', 'unit_id', 'supplier_id'];
    protected $dates = ['deleted_at'];


    public function supplier(){
        return $this->belongsTo('App\Supplier', 'supplier_id');
    }

    public function group(){
        return $this->belongsTo('App\Group', 'group_id');
    }

    public function unit(){
        return $this->belongsTo('App\Unit', 'unit_id');
    }



}
