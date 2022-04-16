<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;
use App\Admsn;
use App\SuperTest;
use PDF;
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

    public function superList()
    {
        return view('admin.super_test.list');
    }

    public function superListAjax(Request $request)
    {
        return datatables()->of(SuperTest::latest()->get())
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn ='<a href="'.route('admin.super.details',['id' => $row->id]).'" class="btn btn-info btn-xs" target="_blank">View</a>';                
                return $btn;
            }) ->addColumn('reg_date', function($row){
               
                    return $row->created_at->toDateTimeString();
                              
            }) 
            ->rawColumns(['action','reg_date'])
            ->make(true);
    }

    public function SuperDetails($id)
    {
        $student = SuperTest::findOrFail($id);
        return view('admin.super_test.details',compact('student'));
    }

    public function SuperTestExport()
    {
        $list = SuperTest::latest()->get();
        $pdf = PDF::loadView('admin.super_test.pdf', compact('list'))->setPaper('letter', 'landscape');
        // dd($pdf);
        return $pdf->download('super_test.pdf');

        // $data = [
        //     'title' => 'First PDF for Medium',
        //     'heading' => 'Hello from 99Points.info',
        //     'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.'        
        //       ];
          
        //   $pdf = PDF::loadView('admin.super_test.pdf', $data);  
        //   return $pdf->download('medium.pdf');
    }
}
