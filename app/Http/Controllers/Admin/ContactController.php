<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reports;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function get(){
        $get=Reports::orderBy('id','desc')->get();
//        return $get;
        Reports::where('is_read','no')->update(['is_read' => 'yes']);
        return view('Admin.CRUD.Contact.index',compact('get'));
    }//end fun
    //==========================================================

    public function contact_delete(Request $request){
//        return response()->json($request);
        Reports::where('id',$request->id)->delete();
        return response()->json();
    }//end fun
}
