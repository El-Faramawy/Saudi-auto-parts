<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bookingorder;
use App\Models\Reports;
use App\Models\service_provider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $contacts_massages = Reports::orderBy('id','desc')->paginate(4);
        $our_Reservations = Bookingorder::orderBy('id','desc')->paginate(5);
        $our_service_providers = service_provider::withCount('bookings')->orderBy('bookings_count','desc')->paginate(4);
        return view('Admin.index',compact('contacts_massages','our_Reservations','our_service_providers'));
    }
}
