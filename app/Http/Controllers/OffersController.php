<?php

namespace App\Http\Controllers;
use App\Models\Offers;use App\Models\UsersApp;
use Illuminate\Http\Request;
use App\Models\Product;
class OffersController extends Controller
{
    function Addoffer(Request $request){
        $users=Offers::create( $request->all());
          $users->save();
          if($users){
            return response()->json($users,200);
            }else{
              return response([
                'message' => ['errror cant sign up']
            ], 404);
         }     
    }

    /////////////////////////////////////////////////////
    function alloffer(){
        $users=Offers::all();
    
        return response()->json($users);
      }

      ////////////////////////////////////////////

      public function Removeoffer($id){
        $user=Offers::find($id);
        $user->delete();
        return response()->json( $user,200);
    }
/////////////////////////////////////////////
    function getproductuser($id){
      $all=Offers::where([['user_id',$id],['lastmessage', '!=' ,null],['State' ,'new']])->get();
      for ($i=0; $i < count($all); $i++) {
        $all[$i]->user = UsersApp::where('id',$all[$i]->user_id)->first();
      }
      for ($i=0; $i < count($all); $i++) {
        $all[$i]->company = UsersApp::where('id',$all[$i]->company_id)->first();
      }
      return $all;
    }

/////////////////////////////////////////////
    function getcompanyoffer($id){
      $all=Offers::where('company_id',$id)->get();
      for ($i=0; $i < count($all); $i++) {
        $all[$i]->product = Product::where('id',$all[$i]->product_id)->get();
        for($q=0;$q<count($all[$i]->product);$q++){
          $hotels = Offers::where('id',$all[$i]->product[$q]->user_id)->get();
          $all[$i]->product[$q]->offer= $hotels;
        }
        
      }
      for ($i=0; $i < count($all); $i++) {
        $all[$i]->user = UsersApp::where('id',$all[$i]->user_id)->first();
      }
      for ($i=0; $i < count($all); $i++) {
        $all[$i]->company = UsersApp::where('id',$all[$i]->company_id)->first();
      }
      return $all;
    }

    function getuseroffer($id){
      $all=Offers::where('user_id',$id)->get();
      for ($i=0; $i < count($all); $i++) {
        $all[$i]->product = Product::where('id',$all[$i]->product_id)->first();
     
        
      }
      
      for ($i=0; $i < count($all); $i++) {
        $all[$i]->company = UsersApp::where('id',$all[$i]->company_id)->first();
      }
      return $all;
    }

     ////////////////////////////*********** */
     function updateoffer(Request $request){
      $user=Offers::find($request->id)->update($request->except('Token'));
      $userinfo=Offers::find($request->id);
    if($user){
      return response()->json($userinfo,200);
      }else{
        return response([
          'message' => ['errror cant sign up']
      ], 404);
   } 
  
  }

}
