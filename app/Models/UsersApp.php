<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersApp extends Model
{
    use HasFactory;
    protected $fillable = [
        'Token',
        'Active',
        'Kind',
        'image',
        'name',
        'phone','rate','numofrating',
        'city'  ,
        'Commercial_Register'  ,
        'imagecommercial' ,
        'imagebank',
        'Password'
    ];
    public function getimageAttribute($value){
        if($value!=null){
          return asset('images/'.$value);
         }else{
          return null;
       }
      }
      public function getimagecommercialAttribute($value){
        if($value!=null){
          return asset('images/'.$value);
         }else{
          return null;
       }
      }


      public function getimagebankAttribute($value){
        if($value!=null){
          return asset('images/'.$value);
         }else{
          return null;
       }
      }


}
