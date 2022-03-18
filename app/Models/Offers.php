<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    use HasFactory;
    protected $fillable = [
        'offer',
        "product_id",
        'user_id','company_id','numofmessage',
        'State','lastmessage'
    ];
    //====================== my relations ======================
    public function user(){
        return $this->belongsTo(UsersApp::class,'user_id');
    }
    public function product(){
        return $this->belongsTo(UsersApp::class,'product_id');
    }
    public function company(){
        return $this->belongsTo(UsersApp::class,'company_id');
    }
    public function messages(){
        return $this->hasMany(Message::class,'offer_id');
    }
}
