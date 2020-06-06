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
            'stream' => 'required',
            'r_address' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'father_name' => 'required',            
            'school_address' => 'required',
            'board_name' => 'required',
            'session' => 'required',
            'division' => 'required',
            'medium' => 'required',
            'percentile' => 'required',
            'aggrement' => 'required',
        ]);

        $data = [
            'name'=>$request->input('name'),
            'dob'=>$request->input('dob'),
            'gender'=>$request->input('gender'),
            'religion'=>$request->input('religion'),
            'caste'=>$request->input('caste'),
            'stream'=>$request->input('stream'),
            'r_address'=>$request->input('r_address'),
            'mobile'=>$request->input('mobile'),
            'email'=>$request->input('email'),
            'father_name'=>$request->input('father_name'),
            'mother_name'=>$request->input('mother_name'),
            'previous_school'=>$request->input('school_address'),
            'board'=>$request->input('board_name'),
            'session'=>$request->input('session'),
            'division'=>$request->input('division'),
            'medium'=>$request->input('medium'),
            'percentile'=>$request->input('percentile'),
            'eng'=>$request->input('eng'),
            'second_lang'=>$request->input('second'),
            'maths'=>$request->input('maths'),
            'science'=>$request->input('science'),
            'social_science'=>$request->input('ss'),
            'other'=>$request->input('other'),
            'aggrement'=>$request->input('aggrement'),
            'payment_type'=>$request->input('payment_type'),         
        ];

        $admsn_insert = Admsn::create($data);
        if ($admsn_insert) {
            if ($request->input('payment_type') == '2') {
                $total_cost = 500;
                $user_name = $request->input('name');
                $user_email = $request->input('email');
                $user_mobile = $request->input('mobile');
                $api = new \Instamojo\Instamojo(
                    config('services.instamojo.api_key'),
                    config('services.instamojo.auth_token'),
                    config('services.instamojo.url')
                );     
                try {
                    $response = $api->paymentRequestCreate(array(
                        "purpose" => "College Admission Fees",
                        "amount" => $total_cost,
                        "buyer_name" => $user_name,
                        "send_email" => true,
                        "email" => $user_email,
                        "phone" => $user_mobile,
                        "redirect_url" => route('web.pay_success',['id'=>encrypt($admsn_insert->id)])
                        ));
        
                        Admsn::where('id',$admsn_insert->id)
                            ->update([
                                'payment_id' => $response['id'],
                            ]);                        
                        header('Location: ' . $response['longurl']);
                        exit();
                }catch (Exception $e) {
                    print('Error: ' . $e->getMessage());
                }
            }else{                
                return redirect()->back()->with('message','addmission form successfully submitted');
            }
        } else {
            return redirect()->back()->with('error','Something Went Wrong Please Try Again');
        }
    }

    public function paySuccess(Request $request,$order_id){
        try {
            $order_id = decrypt($order_id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }

        try {
    
            $api = new \Instamojo\Instamojo(
                config('services.instamojo.api_key'),
                config('services.instamojo.auth_token'),
                config('services.instamojo.url')
            );
     
            $response = $api->paymentRequestStatus(request('payment_request_id'));
     
            if( !isset($response['payments'][0]['status']) ) {
             return redirect('web.admsn_submit');
            } else if($response['payments'][0]['status'] != 'Credit') {
             return redirect('web.admsn_submit');
            } 
          }catch (\Exception $e) {
             return redirect('web.admsn_submit');
         }
        
        if($response['payments'][0]['status'] == 'Credit') {
 
            Admsn::where('id',$order_id)
            ->update([
                'transaction_id' => $response['id'],
                'payment_status' => 2,
            ]);  
            
            
            return redirect()->back()->with('message','addmission form successfully submitted');
        } 
    }
}
