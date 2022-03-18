<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function offer_messages($id){
        $get=Message::whereOfferId($id)->get();
//        return $get;
        return view('Admin.CRUD.Message.index',compact('get'));
    }//end fun
}
