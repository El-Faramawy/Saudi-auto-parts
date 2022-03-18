<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Traits\DefaultImage;

class AdminController extends Controller
{
    use DefaultImage;
    public function get(){
        $get=Admin::where('id','!=',\admin()->user()->id)->get();
        return view('Admin/Admin/index',compact('get'));
    }//end fun

    public function store_admin(Request $request){
        try {
            $valedator = Validator::make($request->all(), [
                'email' => ['unique:admins'],
            ]);
            if ($valedator->fails()) {
                return back()->with(notification('هذا البريد الالكترونى موجود مسبقا', 'error'));
            }
            $new = new Admin();
            $new->email = $request->email;
            $new->password = Hash::make($request->password);
            $new->phone = $request->phone;
            $new->name = $request->name;
//            $new->can_control =$request->can_control == '1'?'yes':'no';
//            if ($request->hasfile('image') && $request->hasfile('image') != null){
//                $fileName = time() . 'png';
//                $request->image->move(public_path('images'), $fileName);
//                $new->image = $fileName;
//            }
            if ($request->hasFile('image')){
                $image=$this->uploadFiles('admins',$request->file('image'));
            }else{
                $image= $this->storeDefaultImage('admins' , $request->name );
            }
            $new->image = $image;

            $new->save();
            return redirect('admin/show-admins')->with(notification('تم الحفظ', 'success'));
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
        }
    }//end fun

    public function admin_delete(Request $request){
//        return response()->json($request);
        Admin::where('id',$request->id)->delete();
        return response()->json();
    }//end fun

    public function admin_edit($id){
        $get=Admin::where('id',$id)->first();
        return view('Admin/Admin/edit',['user'=>$get]);
    }//end fun


    public function store_admin_update(Request $request){
//        return $request->all();
        $update=Admin::find($request->id);
        $email=Admin::where('id',$request->id)->pluck('email')->first();

        if (isset($request->email) && $request->email != null && $email != $request->email){
            $valedator =Validator::make($request->all(),[
                'email'=> [ 'unique:admins'],
            ]);
            if ($valedator->fails()) {
                return redirect('admin/admin_edit/'.$request->id)->with(notification('هذا البريد الالكترونى موجود مسبقا','error'));
            }
        }
        if (isset($request->password) && $request->password != null){
            $update->password=Hash::make($request->password);
        }
        $update->name=$request->name;
        $update->email=$request->email;
        $update->phone=$request->phone;
//        $update->can_control =$request->can_control == '1'?'yes':'no';
//        if (isset($request->image) && $request->image != null){
//            $fileName = time() . 'png';
//            $request->image->move(public_path('images'), $fileName);
//            $update->image = $fileName;
//        }
        if ($request->hasFile('image')){
            $image=$this->uploadFiles('admins',$request->file('image'),$update->image);
            $update->image = $image;
        }elseif ($request->avatar_remove == '1'){
            $image= $this->storeDefaultImage('admins' , $request->name );
            $update->image = $image;
        }
        $update->save();
        return redirect('admin/show-admins')->with(notification('تم التعديل','info'));
    }//end fun

    public function save_profile(Request $request){
        if (auth()->guard('admin')->user()->email != $request->email){
            $valedator =Validator::make($request->all(),[
                'email'=> [ 'unique:admins'],
            ]);
            if ($valedator->fails()) {
                return back()->with(notification('هذا البريد الإلكترونى موجود مسبقا','warning'));
            }
        }
        $update=Admin::find(auth()->guard('admin')->user()->id);
        $update->name=$request->name;
        $update->email=$request->email;
        $update->phone=$request->phone;
        if (isset($request->password) && $request->password != null){
            $update->password=Hash::make($request->password);
        }
//        if (isset($request->image) && $request->image != null){
//            $fileName = time() . 'png';
//            $request->image->move(public_path('images'), $fileName);
//            $update->image = $fileName;
//        }
        if ($request->hasFile('image')){
            $image=$this->uploadFiles('admins',$request->file('image'),$update->image);
            $update->image = $image;
        }elseif ($request->avatar_remove == '1'){
            $image= $this->storeDefaultImage('admins' , $request->name );
            $update->image = $image;
        }
        $update->save();
        return back()->with(notification('تم التعديل','info'));
    }//end fun

    public function my_profile(){
        return view('Admin/profile/index');
    }//end fun
}
