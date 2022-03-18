<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function get(){
        $get=Product::orderBy('id','desc')->get();
        return view('Admin.CRUD.Product.index',compact('get'));
    }//end fun
    //==========================================================
    public function product_images($id){
        $get=Product::whereId($id)->first();
        $get = $get->images;
        $html =  view('Admin.CRUD.Product.images',compact('get'))->render();
        return response()->json($html);
    }//end fun
    //==========================================================

    public function product_delete(Request $request){
        Product::where('id',$request->id)->delete();
        return response()->json();
    }//end fun
}
