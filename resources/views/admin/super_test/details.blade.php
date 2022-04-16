@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">

    <div class="">
      
      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
        
            <div class="x_content">
                @if (isset($student) && !empty($student))
                    <div class="col-md-12 col-sm-12 col-xs-12" style="border:0px solid #e5e5e5;">
                        <h3 class="prod_title">Student Details</h3>

                        <div class="row product-view-tag">
                            <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>Name:</strong> 
                                {{$student->name}}
                            </h5>
                            <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>Father Name :</strong> 
                                {{$student->father_name}}
                            </h5>
                            <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>Mother Name :</strong> 
                                {{$student->mother_name}}
                            </h5>
                            <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>Date of Birth:</strong> 
                                {{$student->dob}}
                            </h5>
                            <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>Gender:</strong>
                                @if ($student->gender == '1')
                                    Male
                                @else
                                    Female
                                @endif
                            </h5>
                            <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>Medium :</strong> 
                                {{$student->medium}}
                            </h5> 
                            <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>School :</strong> 
                                {{$student->school}}
                            </h5> 
                            <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>HSLC Roll :</strong> 
                                {{$student->hslc_roll}}
                            </h5>
                            <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>HSLC No :</strong> 
                                {{$student->hslc_no}}
                            </h5>

                            <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>Mobile Number :</strong> 
                                {{$student->mobile_no}}
                            </h5> 
                            <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>WhatsApp No :</strong> 
                                {{$student->whatsapp_no}}
                            </h5>
                          
                        </div>
                        <br />

                    </div><br>

                    <div class="col-md-12 col-sm-12 col-xs-12" style="border:0px solid #e5e5e5;">
                        <h3 class="prod_title">Address</h3>

                        <div class="row product-view-tag">
                            
                            <h5 class="col-md-6 col-sm-12 col-xs-12">
                                <strong>Village/Town :</strong> {{$student->village}}
                            </h5>
                            <h5 class="col-md-6 col-sm-4 col-xs-12"><strong>Home Landmark:</strong> 
                                {{$student->land_mark}}
                            </h5>
                            <h5 class="col-md-6 col-sm-4 col-xs-12"><strong>Post Office:</strong> 
                                {{$student->po}}
                            </h5>
                            <h5 class="col-md-6 col-sm-4 col-xs-12"><strong>district:</strong>
                                {{$student->district}}
                            </h5>
                        
                        </div>
                        <br />
                @endif
                <div class="col-md-12">
                    <button class="btn btn-danger" onclick="window.close();">Close Window</button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->

 @endsection