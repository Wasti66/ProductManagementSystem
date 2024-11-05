<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $hidden = ['created_at','updated_at'];
    //data insert
    protected $fillable = ['product_id','name','description','price','stock'];
    protected $attributes =['image'=>'0'];
}
