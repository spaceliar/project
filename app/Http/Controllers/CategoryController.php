<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

    		$item = DB::table('products')
    				->join('sub_category','sub_category.id','=','products.sub_cat_id')
    				->join('category','category.id','=','sub_category.cat_id')
    				->join('supplier','supplier.id','=','products.sup_id')
                    ->simplePaginate(10);
    		$cat= DB::table('category')->get();

    				
    
    	return view('frontend.pages.category', compact(['item','cat']));
    	


    }

    public function getItem($request){
        $item = DB::table('products')
                    ->join('sub_category','sub_category.id','=','products.sub_cat_id')
                    ->join('category','category.id','=','sub_category.cat_id')
                    ->join('supplier','supplier.id','=','products.sup_id')
                    ->where('sub_category.cat_id',$request)
                    ->get();
                    // dd($request);
        return $item;

    }
    
    
}
