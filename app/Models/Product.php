<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'images',
        'vedio',
        'name',
        'user_id',

        'kind',
        'name',
        'model',
        'color'  ,
        'vedio2',
        'describtion',
    ];


    public function getvedioAttribute($value){
        if($value!=null){
          return asset('images/'.$value);
         }else{
          return null;
       }
      }
      public function getvedio2Attribute($value){
        if($value!=null){
          return asset('images/'.$value);
         }else{
          return null;
       }
      }

      public function getimagesAttribute($value){
        if($value!=null){
            $array = explode(',',$value);
            return array_map(function($val) { return asset('images/'.$val); }, $array);;
        }else{
            return null;
        }
    }

    //====================== my relations ======================
    public function user(){
        return $this->belongsTo(UsersApp::class,'user_id');
    }
    public function offers(){
        return $this->hasMany(Offers::class,'product_id');
    }
}
