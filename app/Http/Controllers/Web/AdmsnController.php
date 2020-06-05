<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admsn;

class AdmsnController extends Controller
{
    public function admsnSubmit(Request $request)
    {
        $this->validate($request, [
            'name'   => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'caste' => 'required',
            'r_address' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'father_name' => 'required',
            'father_name' => 'required',
            'father_name' => 'required',
            'board_name' => 'required',
            'session' => 'required',
            'division' => 'required',
            'medium' => 'required',
            'aggrement' => 'required',
        ]);
    }
}
