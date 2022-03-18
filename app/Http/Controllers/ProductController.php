<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\UsersApp;
use App\Models\Offers;
class ProductController extends Controller
{
    function AddProduct(Request $request){
        $users=Product::create(  $request->except('images'));

        $images = '';
        if($request->hasfile('images'))
        {
            foreach($request->images as $key=>$value)
            {
                $fileName =str_replace(' ','', microtime()).'.'.$value->extension();
                $file1 = $value->move(public_path('images'),$fileName);
                $images .= $fileName;
                if(count($request->images)-1 != $key)
                    $images .= ',';
            }
            $users->images = $images;
        }
        $users->save();

           if($request->hasfile('vedio')){
            $fileName =time().'.png';   
            $file1 = $request->vedio->move(public_path('images'),$fileName);
            $users->vedio=$fileName;
           }
           if($request->hasfile('vedio2')){
            $fileName =time().'.png';   
            $file1 = $request->vedio2->move(public_path('images'),$fileName);
            $users->vedio2=$fileName;
           }
          $users->save();
          if($users){
            return response()->json($users,200);
            }else{
              return response([
                'message' => ['errror cant sign up']
            ], 404);
         }     
    }


    ///////////////////////////////////////
    function allProduct(){
        $users=Product::all();
        for ($i=0; $i < count($users); $i++) {
     
          $trips = Offers::where('product_id',$users[$i]->id)->get();
          for($q=0;$q<count($trips);$q++){
            $hotels = UsersApp::where('id',$trips[$q]->user_id)->first();
            $trips[$q]->user= $hotels;
          }
          $users[$i]->offer = $trips;
        }
        return response()->json($users);
      }

 ////////////////////////////////
      public function RemoveProduct($id){
        $user=Product::find($id);
        $user->delete();
        return response()->json( $user,200);
    }
 ////////////////////////////*********** */
            function updateProduct(Request $request){
                $user=Product::find($request->id)->update($request->except('Token'));
                $userinfo=Product::find($request->id);
              if($user){
                return response()->json($userinfo,200);
                }else{
                  return response([
                    'message' => ['errror cant sign up']
                ], 404);
             } 
            
            }

            ////////////////////////////////////
            function   getuserproduct($id){
              $all=Product::where('user_id',$id)->get();
         
        for ($i=0; $i < count($all); $i++) {
     
          $trips = Offers::where('product_id',$all[$i]->id)->get();
          for($q=0;$q<count($trips);$q++){
            $hotels = UsersApp::where('id',$trips[$q]->user_id)->first();
            $trips[$q]->user= $hotels;
          }
          $all[$i]->offer = $trips;
        }
       
              return $all;
            }
}
