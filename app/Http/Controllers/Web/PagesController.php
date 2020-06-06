<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Query;

class PagesController extends Controller
{
    public function insertQuery(Request $request)
    {
        $this->validate($request, [
            'name'   => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        Query::create([
            'name'   => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);
        return redirect()->back()->with('message','Thanks for Sending Us A Query We Will get Back To You Soon');
    }
}
