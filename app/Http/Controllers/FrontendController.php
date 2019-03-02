<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function index()
    {

        
        $laptop = DB::table('products')->join('sub_category','products.sub_cat_id','=','sub_category.id')
                                    ->join('category','sub_category.cat_id','=','category.id')
                                    ->select('products.*','sub_category.sub_cat_name','category.cat_name')
                                    ->where('category.id',1)
                                    ->get();
        
         $smartphone = DB::table('products')->join('sub_category','products.sub_cat_id','=','sub_category.id')
                                    ->join('category','sub_category.cat_id','=','category.id')
                                    ->select('products.*','sub_category.sub_cat_name','category.cat_name')
                                    ->where('category.id',2)
                                    ->get();
                                   // dd($smartphone);
        return view('frontend.index',compact('laptop','smartphone'));
    }
}