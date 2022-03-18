<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offers;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function product_offers($id){
        $get=Offers::whereProductId($id)->orderBy('id','desc')->get();
//        return $get;
        return view('Admin.CRUD.Offer.index',compact('get'));
    }//end fun
    //==========================================================

    public function offer_delete(Request $request){
        Offers::where('id',$request->id)->delete();
        return response()->json();
    }//end fun
}
