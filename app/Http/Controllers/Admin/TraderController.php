<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\DefaultImage;
use App\Models\UsersApp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TraderController extends Controller
{
    use DefaultImage;
    public function get(){
        $get=UsersApp::where(['Kind'=>'company','imagecommercial'=>null])->get();
        return view('Admin.CRUD.Trader.index',compact('get'));
    }//end fun
    //==========================================================
    public function get_one_trader($id){
        $get=UsersApp::where('id',$id)->get();
        return view('Admin.CRUD.Trader.index',compact('get'));
    }//end fun
    //==========================================================

    public function store_trader(Request $request){
//        try {
        $valedator = Validator::make($request->all(), [
            'phone' => ['unique:users_apps,phone'],
        ]);
        if ($valedator->fails()) {
            return back()->with(notification('هذا الهاتف موجود مسبقا', 'error'));
        }
        $new = new UsersApp();
        if ($request->hasFile('image')){
            $image=$this->uploadFiles('users',$request->file('image'),null);
        }else{
            $image= $this->storeDefaultImage('users' , $request->name );
        }
        $new->image = $image;
        $new->password = $request->password;
        $new->name = $request->name;
        $new->city = $request->city;
        $new->phone = $request->phone;
        $new->Active = 'true';
        $new->Kind = 'company';
        $new->save();
        return redirect('admin/show-traders')->with(notification('تم الحفظ', 'success'));
//        }
//        catch (\Exception $e){
//            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
//        }
    }//end fun
    //==========================================================

    public function trader_delete(Request $request){
        UsersApp::where('id',$request->id)->delete();
        return response()->json();
    }//end fun
    //==========================================================

    public function trader_edit($id){
        $get=UsersApp::where('id',$id)->first();
        return view('Admin.CRUD.Trader.edit',['user'=>$get]);
    }//end fun
    //==========================================================


    public function store_trader_update(Request $request){
//        return $request;
        $update=UsersApp::find($request->id);
//        $phone=UsersApp::where('id',$request->id)->pluck('phone')->first();
//
//        if (isset($request->phone) && $request->phone != null && $phone != $request->phone){
        $valedator =Validator::make($request->all(),[
            'phone'=> [ 'unique:users_apps,phone,'.$request->id],
        ]);
        if ($valedator->fails()) {
            return redirect('admin/user_edit/'.$request->id)->with(notification('هذا الهاتف موجود مسبقا','error'));
        }

        if (isset($request->password) && $request->password != null){
            $update->password=$request->password;
        }
        if ($request->hasFile('image')){
            $image=$this->uploadFiles('users',$request->file('image'),$update->image);
            $update->image = $image;
        }elseif ($request->avatar_remove == '1'){
            $image= $this->storeDefaultImage('users' , $request->name );
            $update->image = $image;
        }
        if ($request->password && $request->password!= null)
            $update->password = $request->password;
        $update->name = $request->name;
        $update->city = $request->city;
        $update->phone = $request->phone;
        $update->save();
        return redirect('admin/show-traders')->with(notification('تم التعديل','info'));
    }//end fun
    //==========================================================
//    public function block_user(Request $request){
////        return response()->json();
//        $item = service_Requester::where('id',$request->id)->first();
//        $item->block = $item->block == 'true'?'false':'true';
//        $item->save();
//        return response()->json();
//    }//end fun

}
