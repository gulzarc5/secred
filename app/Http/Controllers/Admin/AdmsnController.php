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
                $btn ='<a href="#" class="btn btn-info btn-sm" target="_blank">View</a>
                <a href="#" class="btn btn-warning btn-sm" target="_blank">Edit</a>';                
                return $btn;
            })
            ->rawColumns(['action','category','sub_category','brand','stock','status_tab'])
            ->make(true);
    }
}
