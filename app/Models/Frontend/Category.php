<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    protected $fillable = ['id','cat_name','description','created_at','updated_at'];


}