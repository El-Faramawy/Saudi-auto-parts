<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bookingorder;
use App\Models\content_of_sections;
use App\Models\Reports;
use App\Models\service_provider;
use App\Models\Urgent_service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ServiceProviderController extends Controller
{
    public function get(){
        $get=service_provider::all();
//        return substr($get['image'],31)->getClientOriginalExtension();
//        $name = $get['image'];
//        $ext = end((explode(".", $name))); # extra () to prevent notice
//      return $get;
        return view('Admin.CRUD.ServiceProvider.index',compact('get'));
    }//end fun
    //=============================================================
    public function get_one_service_provider($id){
        $get=service_provider::where('id',$id)->get();
        return view('Admin.CRUD.ServiceProvider.index',compact('get'));
    }//end fun
    //=============================================================

    public function store_service_provider(Request $request){
        try {
            $valedator = Validator::make($request->all(), [
                'email' => ['unique:service_providers'],
            ]);
            if ($valedator->fails()) {
                return back()->with(notification('هذا البريد الالكترونى موجود مسبقا', 'error'));
            }
            $new = new service_provider();
            $new->email = $request->email;
            $new->password = $request->password;
            $new->name = $request->name;
            $new->city = $request->city;
            $new->currency = $request->currency;
            $new->phonenum = $request->phonenum;
            $new->bank_account = $request->bank_account;
            $new->token = 'asdasdasd';
            $new->block = 'false';
            $new->save();
            return redirect('admin/show-service_providers')->with(notification('تم الحفظ', 'success'));
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
        }
    }//end fun
//========================================================================
    public function service_provider_delete(Request $request){
//        return response()->json($request);
        service_provider::where('id',$request->id)->delete();

        Bookingorder::where('servesprovider_id',$request->id)->delete();
        content_of_sections::where('servesprovider_id',$request->id)->delete();
        Reports::where(['kind'=>'service_provider','sender_id'=>$request->id])->delete();
        return response()->json();
    }//end fun
//========================================================================
    public function service_provider_edit($id){
        $get=service_provider::where('id',$id)->first();
        return view('Admin.CRUD.ServiceProvider.edit',['service_provider'=>$get]);
    }//end fun

//========================================================================
    public function provider_time($id){
        $get=service_provider::where('id',$id)->first();
        $html = view('Admin.CRUD.ServiceProvider.timeModel',['data'=>$get])->render();
        return response()->json(['data'=>$html,'message'=>'get successfully','status'=>200],200);
    }//end fun

//========================================================================
    public function store_service_provider_update(Request $request){
        $update=service_provider::find($request->id);
        $email=service_provider::where('id',$request->id)->pluck('email')->first();

        if (isset($request->email) && $request->email != null && $email != $request->email){
            $valedator =Validator::make($request->all(),[
                'email'=> [ 'unique:service_providers'],
            ]);
            if ($valedator->fails()) {
                return redirect('admin/service_provider_edit/'.$request->id)->with(notification('هذا البريد الالكترونى موجود مسبقا','error'));
            }
        }
        if (isset($request->password) && $request->password != null){
            $update->password=$request->password;
        }
        $update->name=$request->name;
        $update->email=$request->email;
        $update->city = $request->city;
        $update->currency = $request->currency;
        $update->phonenum = $request->phonenum;
        $update->bank_account = $request->bank_account;
        $update->save();
        return redirect('admin/show-service_providers')->with(notification('تم التعديل','info'));
    }//end fun
    //==========================================================
    public function block_service_provider(Request $request){
        $item = service_provider::where('id',$request->id)->first();
        $item->block = $item->block == 'true'?'false':'true';
        $item->save();
        return response()->json();
    }//end fun

}
