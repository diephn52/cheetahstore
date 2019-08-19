<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'category';

    public function sub_categories(){
    	return $this->hasMany('App\SubCategory','id_category','id');
    }

}
