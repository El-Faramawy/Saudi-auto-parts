<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Client;
use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
//        $products = Products::inRandomOrder()->limit(5)->get();
//        $cars     = Car::inRandomOrder()->limit(5)->get();
//        $clients  = Client::inRandomOrder()->limit(5)->get();
        return view('Admin/index'/*,compact('products','cars','clients')*/);
    }


}
