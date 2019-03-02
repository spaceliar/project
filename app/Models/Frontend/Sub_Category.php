<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;

class Sub_Category extends Model
{
    protected $table = 'sub_category';

    protected $fillable = ['id','sub_cat_name','description','cat_id','created_at','updated_at'];

    public  function products(){
    	return $this->hasMany('App\Model\Frontend\Products','sub_cat_id','id');
    }

    
}