<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

<<<<<<< HEAD
    		$item = DB::table('products')
    				->join('sub_category','sub_category.id','=','products.sub_cat_id')
    				->join('category','category.id','=','sub_category.cat_id')
    				->join('supplier','supplier.id','=','products.sup_id')
    				->get();
    		$cat= DB::table('category')->get();
=======
      $item = DB::table('products')
      ->join('sub_category','sub_category.id','=','products.sub_cat_id')
      ->join('category','category.id','=','sub_category.cat_id')
      ->join('supplier','supplier.id','=','products.sup_id')
      ->simplePaginate(21);
      $cat= DB::table('category')->get();
>>>>>>> a46f2b6f68b29fe5cd8364e326f0ad209fa2f5d0



      return view('frontend.pages.category', compact(['item','cat']));



<<<<<<< HEAD
    public function getItem(){}
    
=======
  }

  public function getItem(Request $request){
    $chuoi = $request->checkbox_value;
    if($chuoi == ""){
        $item = DB::table('products')
        ->join('sub_category','sub_category.id','=','products.sub_cat_id')
        ->join('category','category.id','=','sub_category.cat_id')
        ->join('supplier','supplier.id','=','products.sup_id')
        ->simplePaginate(21);
        $output = '<div class="row" id="product-item">';
        foreach ($item as $it) {
            $output .= '<div class="col-md-4 col-xs-6">
            <div class="product">
            <div class="product-img">
            <img src="./img/product/'.$it->picture_1.'" alt="">
            <div class="product-label">
            <span class="sale">-30%</span>
            <span class="new">NEW</span>
            </div>
            </div>
            <div class="product-body">
            <p class="product-category">'.$it->sub_cat_name.'</p>
            <h3 class="product-name"><a href="#">'.$it->name.'</a></h3>
            <h4 class="product-price">$980.00 <del class="product-old-price">'.$it->price.'</del></h4>
            <div class="product-rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            </div>
            <div class="product-btns">
            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
            </div>
            </div>
            <div class="add-to-cart">
            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
            </div>
            </div>
            </div>';

        }
        $output .= '</div>
        <div class="store-filter clearfix">'.$item->links().'</div>';

        echo $output;
    }
    else{
        $array = explode('|',$chuoi);
        foreach ($array as $arr){
            $item[$arr] = DB::table('products')
            ->join('sub_category','sub_category.id','=','products.sub_cat_id')
            ->join('category','category.id','=','sub_category.cat_id')
            ->join('supplier','supplier.id','=','products.sup_id')
            ->where('sub_category.cat_id','=',$arr)
            ->simplePaginate(10);
            $output = '<div class="row" id="product-item">';
            foreach ($item as $i) {

                
            }
        }

    }
}


>>>>>>> a46f2b6f68b29fe5cd8364e326f0ad209fa2f5d0
}
