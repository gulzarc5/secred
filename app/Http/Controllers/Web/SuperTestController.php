<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SuperTest;

class SuperTestController extends Controller
{
    public function submit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'gender' => 'required|string|in:M,F',
            'village' => 'required|string|max:255',
            'land_mark' => 'required|string|max:255',
            'po' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'school' => 'required|string|max:255',
            'medium' => 'required|string|max:255',
            'whatsapp_no' => 'required|numeric|digits:10',
            'mobile_no' => 'required|numeric|digits:10',
            'date_of_birth' => 'required|date',
            'roll' => 'required|string|max:255',
            'no' => 'required|string|max:255',
        ]);

        $superTest = new SuperTest();
        $superTest->name = $request->input('name');
        $superTest->father_name = $request->input('father_name');
        $superTest->mother_name = $request->input('mother_name');
        $superTest->gender = $request->input('gender');
        $superTest->village = $request->input('village');
        $superTest->land_mark = $request->input('land_mark');
        $superTest->po = $request->input('po');
        $superTest->district = $request->input('district');
        $superTest->school = $request->input('school');
        $superTest->medium = $request->input('medium');
        $superTest->whatsapp_no = $request->input('whatsapp_no');
        $superTest->mobile_no = $request->input('mobile_no');
        $superTest->dob = $request->input('date_of_birth');
        $superTest->hslc_roll = $request->input('roll');
        $superTest->hslc_no = $request->input('no');
        $superTest->save();
        return redirect()->route('web.super.test.success');
    }
}
