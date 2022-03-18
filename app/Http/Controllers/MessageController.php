<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Carbon\Carbon;
use App\Models\UsersApp;
use App\Models\Offers;
 
use App\Events\messages;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    function addmessage(Request $request){
     
        $battalions=Message::create( $request->all());
        if($request->hasfile('image')){
            $fileName =time().'.png'; 
            $file1 = $request->image->move(public_path('images'), $fileName );
            $battalions->image=$fileName;
            $Offers=Offers::find( $request->offer_id);
            $Offers->lastmessage='تم ارسال صوره';
            $Offers->increment('numofmessage',1);
            $Offers->save();
           }
          if($request->text){
            $Offers=Offers::find( $request->offer_id);
            $Offers->lastmessage=$request->text;
            $Offers->increment('numofmessage',1);
            $Offers->save();
           }
        $battalions->save();
        $battalions['created_at']=Carbon::now('Africa/Cairo')->toDateTimeString();
          $battalions->save();
          if($battalions){
            event(new messages('sa',$request->offer_id));
              return $battalions;
         }else{
            return 'error';
         }     
    }
    //****************************************************************/

    public function RemoveMessage($id){
        $user=Message::find($id);
        $user->delete();
        return response()->json( $user,200);
    }    

    //**************************************************************/
    function allmessage(){
        $battalion=Message::all();
        return response()->json($battalion);
      }
 //**************************************************************/
 function getoffermessages($id){
    $all=Message::where('offer_id',$id)->get();
    return $all;
  }
//**************************************************************/
 
function getusermessages($id){
  $all=Message::where([['user_id',$id],['state',"true"]])->get();

  for ($i=0; $i < count($all); $i++) {
    $all[$i]->user = UsersApp::where('id',$all[$i]->user_id)->get();
  }

  return $all;
}


function getcompanymessages($id){
  $all=Message::where([['company_id',$id],['state',"true"]])->get();
  for ($i=0; $i < count($all); $i++) {
    $all[$i]->user = UsersApp::where('id',$all[$i]->user_id)->get();
  }
  return $all;
}
//**************************************************************/

function updateMessage(Request $request){
    $user=Message::find($request->id)->update($request->except('token'));
  if($user){
    return response()->json($user,200);
    }else{
      return 'errror cant sign up';
 } 

}


}
