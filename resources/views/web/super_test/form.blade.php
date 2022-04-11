@extends('web.templete.master')

{{-- META --}}
@section('meta')
	<title>Parakiaki Academy</title>
	<!--<meta name="description" content="">-->
	<!--<meta name="author" content="">-->
	<!--<meta name="keywords" content="">-->
@endsection

@section('content') 
    <!-- Addmission -->
    <section class="c-all h-quote">
        <div class="container">
            <div class="row">
                <div class="con-title">
                    <h2>Super Test Registration<span> Form</span></h2>
                    <p>For Class 10th to 11th Moving Students (Arts & Commerce)</p>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="n-form-com admiss-form">
                    <div class="col s12">
                    @if (Session::has('message'))
                        <div class="alert alert-success" >{{ Session::get('message') }}</div>
                     @endif
                     @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                     @endif
                        
                        {{ Form::open(array('route' => 'web.super.test.submit', 'method' => 'post')) }}
                            <div class="form-group col-sm-12">
                                <div class="col-sm-6">
                                    <label class="control-label">1. Name of candidate:
                                    @error('name')
                                        <span style="color:red">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                    </label>
                                    <input type="text" class="form-control" placeholder="Enter candidate name" name="name" value="{{old('name')}}" >
                                    
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">2. Name of father:
                                        @error('father_name')
                                            <span style="color:red">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </label>
                                    <input type="text" class="form-control" placeholder="Enter Father Name" name="father_name" value="{{old('father_name')}}">
                                </div>

                                <div class="col-sm-6">
                                    <label class="control-label">3. Name of mother:
                                        @error('mother_name')
                                            <span style="color:red">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </label>
                                    <input type="text" class="form-control" placeholder="Enter Mother Name" name="mother_name" value="{{old('mother_name')}}">
                                </div>
                         
                                <div class="col-sm-6">
                                    <label class="control-label">4. Gender:
                                        @error('gender')
                                            <span style="color:red">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </label>
                                    <select class="initialized" name="gender">             
                                        <option value="M" {{old('gender') == 'M'?'selected':''}}>Male</option>
                                        <option value="F" {{old('gender') == 'F'?'selected':''}}>Female</option>
                                    </select>
                                </div>

                                <div class="col-sm-6">
                                    <label class="control-label">5. Village/Town:
                                        @error('village')
                                            <span style="color:red">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </label>
                                    <input type="text" class="form-control" placeholder="Enter Village/Town Name" name="village" value="{{old('village')}}">
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">6. Home/Landmark:
                                        @error('land_mark')
                                            <span style="color:red">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </label>
                                    <input type="text" class="form-control" placeholder="Enter  Home/Landmark Name" name="land_mark" value="{{old('land_mark')}}">
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">7. Post Office:
                                        @error('po')
                                            <span style="color:red">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </label>
                                    <input type="text" class="form-control" placeholder="Enter Post Office Name" name="po" value="{{old('po')}}">
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">8. District:
                                        @error('district')
                                            <span style="color:red">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </label>
                                    <input type="text" class="form-control" placeholder="Enter District Name" name="district" value="{{old('district')}}">
                                </div>
                                <div class="col-sm-12">
                                    <label class="control-label">9. Name Of School:
                                        @error('school')
                                            <span style="color:red">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </label>
                                    <input type="text" class="form-control" placeholder="Enter Name Of School" name="school" value="{{old('school')}}">
                                </div>
                                <div class="col-sm-12">
                                    <label class="control-label">10. Medium:
                                        @error('medium')
                                            <span style="color:red">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </label>
                                    <input type="text" class="form-control" placeholder="Enter Medium" name="medium" value="{{old('medium')}}">
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">11. WhatsApp No:
                                        @error('whatsapp_no')
                                            <span style="color:red">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </label>
                                    <input type="text" class="form-control" placeholder="Enter WhatsApp No Name" name="whatsapp_no" value="{{old('whatsapp_no')}}">
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">12. Mobile Number:
                                        @error('mobile_no')
                                            <span style="color:red">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </label>
                                    <input type="text" class="form-control" placeholder="Enter Mobile Number Name" name="mobile_no" value="{{old('mobile_no')}}">
                                </div>
                            </div>
                         
                            {{-- <div class="form-group">
                                <div class="col-sm-12">
                                    <label class="control-label">Declaration:</label>
                                    <p>1.it will be my responsibility to maintain the decorum of the college as per the norms inside the prospectus.</p>
                                    <p>2. I have maid careful notice of various details regarding payment of college fees. I will make satisfactory arrangements for remittance of the college fees on or before 20th of every month.</p>
                                    <p>3.  I understood that rendering false and misleading information or with holding correct information will disqualify the child.</p>
                                    <p>4. As a special note I affirm that I shell not allow my to attend college with mobile phone. I shell not hold the college responsible for loss</p><br>
                                    <h5 style="line-height: 3.7;">
                                        <strong><input type="checkbox" class="othrcheck" name="aggrement" value="1" required> &nbsp; &nbsp;&nbsp;I Accept all the above stated points.</strong>
                                    </h5>
                                </div>
                            </div> --}}
                            {{-- <div class="form-group">
                                <div class="col-sm-12"><h5 class="control-label" style="text-decoration:underline">Payment Methord</h5></div>
                                <div class="col-sm-2">
                                    <h5>
                                        <strong>
                                            <input type="radio" name="payment_type" class="othrcheck" value="1" checked> &nbsp; &nbsp;&nbsp;Free Admission.
                                        </strong>
                                    </h5>
                                </div>
                                <div class="col-sm-2">
                                    <h5>
                                        <strong>
                                            <input type="radio" name="payment_type" class="othrcheck" value="2" checked> &nbsp; &nbsp;&nbsp;Pay Online.
                                        </strong>
                                    </h5>
                                </div>
                            </div> --}}
                            <style>input.othrcheck[type="checkbox"] {position: absolute;left: 0;opacity: 1;} input.othrcheck[type="radio"] {position: absolute;opacity: 1;left: 0;top: -14px;}  </style>
                            <div class="form-group mar-bot-0">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <i class="waves-effect waves-light light-btn waves-input-wrapper" style=""><input type="submit" value="APPLY NOW" class="waves-button-input"></i>
                                </div>
                            </div>
                            <div class="form-group"><div class="col-sm-12"><hr style="border-color: #f36b3b"></div></div>
                            <div class="form-group" style="background:#ddd;margin-top:10px">
                                <div class="col-sm-12">
                                    <label class="control-label">Instruction:</label>
                                    <p>1.'Sacred Super Test' is a highly ambitious and innovative educational program under the banner of "Sacred Heart Senior Secondary School". The main objective of SST is to track the talented bunch of students and hone their skills by providing a conducive environment. SST is considered as an entrance exam for Sacred Heart Senior Secondary School.</p>
                                    {{-- <p>2. I have maid careful notice of various details regarding payment of college fees. I will make satisfactory arrangements for remittance of the college fees on or before 20th of every month.</p>
                                    <p>3.  I understood that rendering false and misleading information or with holding correct information will disqualify the child.</p>
                                    <p>4. As a special note I affirm that I shell not allow my to attend college with mobile phone. I shell not hold the college responsible for loss</p><br> --}}
                                </div>
                            </div>                        
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection   

      