<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['id','product_name','description','picture_1','picture_2','picture_3','picture_4','picture_5','picture_6','price','quantity','saleunit','sub_cat_id','sup_id','created_at','updated_at'];

    public function subs(){
    	return $this->belongsTo('App\Models\Frontend\Sub_Category','sub_cat_id','id');
    }
}