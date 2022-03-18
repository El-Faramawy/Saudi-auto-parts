<?php

namespace App\Http\Controllers;
use App\Models\UsersApp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UsersAppController extends Controller
{
 
    function loginforusers(Request $request)
    {
        $user=UsersApp::where([['phone', $request->phone],['Password', $request->Password]])->first();
 
            if (!$user ) {
              return 'These credentials do not match our records.';
            }else{
                $ss=UsersApp::find($user->id)->update($request->except('name'));
                return response()->json($user,200);
           } 
        
    }
   
           /////////////////////////////////////////////
           function signupusers(Request $request){
            $users=UsersApp::create( $request->all());
            if($request->hasfile('image')){
                $fileName =time().'.png';   
                $file1 = $request->image->move(public_path('images'),$fileName);
                $users->image=$fileName;
               }
               if($request->hasfile('imagecommercial')){
                $fileName =time().'png';   
                $file1 = $request->imagecommercial->move(public_path('images'),$fileName);
                $users->imagecommercial=$fileName;
               }
               if($request->hasfile('imagebank')){
                $fileName =time().'.png';   
                $file1 = $request->imagebank->move(public_path('images'),$fileName);
                $users->imagebank=$fileName;
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

        ////////////////////////////*********** */
        function updateuserse(Request $request){
            $user=UsersApp::find($request->id)->update($request->except('Token'));
            $userinfo=UsersApp::find($request->id);
            if($request->has('image')){
              $icon=$userinfo->image;
               $path=strstr( $icon,"images");
               if(File::exists($path)){
                   File::delete($path);
               }
              $fileName = $request->image->getClientOriginalName();
              $file1 = $request->image->move(public_path('images'),$fileName);
              $userinfo=UsersApp::find($request->id)->update(['image'=>$fileName]);
             }
             $userinfo=UsersApp::find($request->id);
          if($user){
            return response()->json($userinfo,200);
            }else{
              return response([
                'message' => ['errror cant sign up']
            ], 404);
         } 
        
        }
 
        //*******************************************************************
        function userinformation($id,$Token){
            $user=UsersApp::find($id);
        
            if($user){
                $sad=UsersApp::find( $id)->update(['Token' => $Token]);
                return response()->json($user,200);
                }else{
                  return response([
                    'message' => ['Notfound']
                ], 404);
             } 
        }

        /////////////////////////////////////////////////////////////////////
        
        function allusers(){
            $users=UsersApp::all();
        
            return response()->json($users);
          }
          //////////////////////
          public function Removeusers($id){
            $user=UsersApp::find($id);
            $user->delete();
            return response()->json( $user,200);
        }
        //////////////////////////////////////////////////////////
        function checksignup(Request $request)
{
    $user=UsersApp::where('phone', $request->phone)->first();
        if ($user ) {
          return response()->json($user,200);
        }else{
          return  'These phone do not match our records.';

       }        
}
}
