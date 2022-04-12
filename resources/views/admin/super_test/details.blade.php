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
                            <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>Religion :</strong> 
                                {{$student->religion}}
                            </h5> 
                            <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>Caste :</strong> 
                                {{$student->caste}}
                            </h5>
                            <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>Stream :</strong> 
                                {{$student->stream}}
                            </h5>
                            <h5 class="col-md-12 col-sm-12 col-xs-12"><strong>Residential Address:</strong> {{$student->r_address}}</h5>

                            <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>Mobile Number :</strong> 
                                {{$student->mobile}}
                            </h5> 
                            <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>Email :</strong> 
                                {{$student->email}}
                            </h5>
                            <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>Father Name :</strong> 
                                {{$student->father_name}}
                            </h5>
                            <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>Mother Name :</strong> 
                                {{$student->mother_name}}
                            </h5>
                        </div>
                        <br />

                        @if (isset($product->specifications))
                            <div class="col-md-12">
                                <hr>
                                <h3>Product Specifications <a class="btn btn-warning" style="float:right" href="">Edit specifications</a></h3>
                                <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Specification Name</th>
                                        <th>Specification Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product->specifications as $item)
                                        <tr>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->value}}</td>
                                        </tr>
                                    @endforeach                            
                                </tbody>
                                </table>
                            </div>                    
                        @endif
                    </div><br>

                    <div class="col-md-12 col-sm-12 col-xs-12" style="border:0px solid #e5e5e5;">
                        <h3 class="prod_title">Previous Academic Qualification</h3>

                        <div class="row product-view-tag">
                            
                            <h5 class="col-md-12 col-sm-12 col-xs-12">
                                <strong>Name And Address of Previous School :</strong> {{$student->previous_school}}
                            </h5>
                            <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>Name of Board:</strong> 
                                {{$student->board}}
                            </h5>
                            <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>Session:</strong> 
                                {{$student->session}}
                            </h5>
                            <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>Divition:</strong>
                                {{$student->division}}
                            </h5>
                            <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>Medium :</strong> 
                                {{$student->medium}}
                            </h5> 
                            <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>Percentile :</strong> 
                                {{$student->percentile}}
                            </h5>
                        </div>
                        <br />

                        <div class="col-md-12 col-sm-12 col-xs-12" style="border:0px solid #e5e5e5;">
                            <h3 class="prod_title">Marks obtiain in the board examination</h3>
    
                            <div class="row product-view-tag">
                                
                                <h5 class="col-md-12 col-sm-12 col-xs-12">
                                    <strong>Name And Address of Previous School :</strong> {{$student->previous_school}}
                                </h5>
                                <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>English : </strong> 
                                    {{$student->eng}}
                                </h5>
                                <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>2nd Language Hindi/Bengali/other : </strong> 
                                    {{$student->second_lang}}
                                </h5>
                                <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>Maths:</strong>
                                    {{$student->maths}}
                                </h5>
                                <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>Science :</strong> 
                                    {{$student->science}}
                                </h5> 
                                <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>Social Science :</strong> 
                                    {{$student->social_science}}
                                </h5>
                                <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>Other :</strong> 
                                    {{$student->other}}
                                </h5>
                            </div>
                            <br />


                            <div class="col-md-12 col-sm-12 col-xs-12" style="border:0px solid #e5e5e5;">
                                <h3 class="prod_title">Payment Information</h3>
        
                                <div class="row product-view-tag">
                                    
                                    <h5 class="col-md-12 col-sm-12 col-xs-12">
                                        <strong>Payment Type :</strong> 
                                        @if ($student->payment_type == '1')
                                            <a class="btn btn-warning">Pay At College</a>
                                        @else
                                            <a class="btn btn-primary">Online Pay</a>
                                        @endif
                                    </h5>
                                    <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>Payment Status : </strong> 
                                        @if ($student->payment_status == '1')
                                            <a class="btn btn-danger">Not Paid</a>
                                        @else
                                            <a class="btn btn-primary">Paid</a>
                                        @endif
                                    </h5>
                                    @if ($student->payment_type == '2')
                                    <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>Payment Request Id : </strong> 
                                        {{$student->payment_id}}
                                    </h5>
                                    <h5 class="col-md-4 col-sm-4 col-xs-12"><strong>Transaction Id:</strong>
                                        {{$student->transaction_id}}
                                    </h5>
                                    @endif
                                </div>
                                <br />
                    </div>
                
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