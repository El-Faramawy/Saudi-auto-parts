<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'text',
        "image",
        'deletorno',
        'offer_id',
        'product_id','kindofsender',
        'company_id',
        'user_id',
        'state'
    ];

    public function getimageAttribute($value){
        if($value!=null){
          return asset('images/'.$value);
         }else{
          return null;
       }
      }

}
