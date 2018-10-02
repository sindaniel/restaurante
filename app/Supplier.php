<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Supplier extends Model
{   
    use SoftDeletes;
    
    protected $fillable = ['name', 'phone', 'address', 'email'];
    protected $dates = ['deleted_at'];
}
