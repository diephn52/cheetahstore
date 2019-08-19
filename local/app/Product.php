<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';

   	public function sub_category(){
   		return $this->belongsTo('App\SubCategory','id_product','id');
   	}
  
   	public function comments(){
   		return $this->hasMany('App\Comment','id_product','id');
   	}
}
