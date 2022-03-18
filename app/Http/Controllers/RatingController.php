<?php

namespace App\Http\Controllers;
use App\Models\Rating;
use App\Models\UsersApp;
use App\Models\Product;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    function Addrate(Request $request){
        $rat=Rating::create( $request->all());
        $Product=Product::where('id', $request->product_id)->first();
        $user=UsersApp::where('id', $Product->user_id)->first();
        $user->increment('rate',$request->rate);
       $user->increment('numofrating',1);
        $user->save();
      
       

          if($rat){
            return response()->json($rat,200);
            }else{
              return response([
                'message' => ['errror cant sign up']
            ], 404);
         }     
    }
//******************************* */
    function allrate(){
        $rat=Rating::all();
    
        return response()->json($rat);
      }
 //**********************************/
 function userrate( $id)
 {
     $user=Rating::where('userproduct', $id)->get();
     for ($i=0; $i < count($user); $i++) {
        $user[$i]->user = UsersApp::where('id',$user[$i]->user_id)->get();
      }

     return   $user;
 
           
 }
}
