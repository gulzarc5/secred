<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Admsn;

class DashboardController extends Controller
{
    public function dashboardView()
    {
        $total_student = Admsn::count();
        $total_online_pay =  Admsn::where('payment_type',2)->count();
        $total_college_pay =  Admsn::where('payment_type',1)->count();
        $total_arts =  Admsn::where('stream','Arts')->count();
        $total_commerce =  Admsn::where('stream','Commerce')->count();
        $last_student =  Admsn::orderBy('id','desc')->limit(10)->get();
        return view('admin.dashboard',compact('total_student','total_online_pay','total_college_pay','total_arts','total_commerce','last_student'));
    }
}
