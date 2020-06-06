<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;
use App\Admsn;

class AdmsnController extends Controller
{
    public function userList()
    {
        return view('admin.user.user_list');
    }

    public function userListAjax()
    {
        return datatables()->of(Admsn::get())
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn ='<a href="'.route('admin.user_details',['id'=>$row->id]).'" class="btn btn-info btn-sm" target="_blank">View</a>';                
                return $btn;
            }) ->addColumn('payment_typess', function($row){
                if ($row->payment_type == '1') {
                    return "<a class='btn btn-warning btn-sm'>Pay at college</a>";
                } else {
                    return "<a class='btn btn-primary btn-sm'>Pay Online</a>";
                }                
            }) ->addColumn('payment_statuss', function($row){
                if ($row->payment_status == '1') {
                    return "<a class='btn btn-danger btn-sm'>Not Paid</a>";
                } else {
                    return "<a class='btn btn-primary btn-sm'>Paid</a>";
                }                
            })
            ->rawColumns(['action','payment_typess','payment_statuss'])
            ->make(true);
    }

    public function userDetails($id)
    {
        $student = Admsn::where('id',$id)->first();
        return view('admin.user.user_details',compact('student'));
    }
}
