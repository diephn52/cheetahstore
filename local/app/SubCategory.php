<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //
    protected $table = 'sub_category';

    protected $fillable = [
        'name', 'id_category', 'image', 
    ];

    public function category(){
   		return $this->belongsTo('App\Category','id_sub_category','id');
   	}
    public function products(){
    	return $this->hasMany('App\Product','id_sub_category','id');
    }
}
