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
                    <h2>Admission<span> Form</span></h2>
                    <p>Admission form for class XI, fill all the requried details</p>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="n-form-com admiss-form">
                    <div class="col s12">
                        
                        {{ Form::open(array('route' => 'web.admsn_submit', 'method' => 'post')) }}
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
                                <div class="col-sm-3">
                                    <label class="control-label">2. Date of Birth:</label>
                                    <input type="date" class="form-control" placeholder="Enter DOB" name="dob" value="{{old('dob')}}">
                                </div>
                                <div class="col-sm-3">
                                    <label class="control-label">3. Gender:</label>
                                    <select class="initialized" name="gender">             
                                        <option value="1" {{old('gender') == '1'?'selected':''}}>Male</option>
                                        <option value="2" {{old('gender') == '2'?'selected':''}}>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <div class="col-sm-4">
                                    <label class="control-label">4. Religion:</label>
                                    <input type="text" class="form-control" placeholder="Enter religion" name="religion" value="{{old('religion')}}">
                                </div>
                                <div class="col-sm-4">
                                    <label class="control-label">5. Caste:</label>
                                    <select class="initialized" name="caste">             
                                        <option value="" selected>Please Select Caste</option>
                                        <option value="SC" {{old('caste') == 'SC'?'selected':''}}>SC</option>
                                        <option value="ST" {{old('caste') == 'ST'?'selected':''}}>ST</option>
                                        <option value="OBC" {{old('caste') == 'OBC'?'selected':''}}>OBC</option>
                                        <option value="GENERAL" {{old('caste') == 'GENERAL'?'selected':''}}>GENERAL</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label class="control-label">6. Stream:</label>
                                    <select class="initialized" name="stream">             
                                        <option value="Arts" {{old('caste') == 'Arts'?'selected':''}}>Arts</option>
                                        <option value="Commerce" {{old('caste') == 'Commerce'?'selected':''}}>Commerce</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label class="control-label">7. Residential address of communication:</label>
                                    <textarea name="r_address" id="" class="form-control" rows="2" placeholder="Enter Residential Address">{{old('r_address')}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="control-label">8. Mobile no.:</label>
                                    <input type="text" class="form-control" placeholder="Enter Mobile Number" name="mobile" value="{{old('mobile')}}">
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">9. E-mail:</label>
                                    <input type="text" class="form-control" placeholder="Enter Email Id" name="email" value="{{old('email')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="control-label">10. Name of father:</label>
                                    <input type="text" class="form-control" placeholder="Enter Father Name" name="father_name" value="{{old('father_name')}}">
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">11. Name of mother:</label>
                                    <input type="text" class="form-control" placeholder="Enter Mother Name" name="mother_name" value="{{old('mother_name')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <h5 class="control-label" style="text-decoration:underline">12. Previous academic of the student</h5>
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">12.a Name and address of Previous school:</label>
                                    <textarea name="" id="" class="form-control" rows="6" placeholder="Enter Name and address of Previous school" name="school_address">{{old('school_address')}}</textarea>
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">12.b Name of Board:</label>
                                    <input type="text" class="form-control" placeholder="Enter Board Name" name="board_name" value="{{old('board_name')}}">
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <label class="control-label">12.c Session:</label>
                                            <input type="text" class="form-control" placeholder="Enter Session" name="session" value="{{old('session')}}">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="control-label">12.d Division:</label>
                                            <input type="text" class="form-control" placeholder="Enter Division" name="division" value="{{old('division')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">12.e Medium of Instruction:</label>
                                    <input type="text" class="form-control" placeholder="Enter Medium of Instruction" name="medium" value="{{old('medium')}}">
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">12.f Percentile:</label>
                                    <input type="text" class="form-control" placeholder="Enter Percentile" name="percentile" value="{{old('percentile')}}">
                                </div>
                                <div class="col-sm-12">
                                    <label class="control-label">12.g Marks obtiain in the board examination you have passed:</label>
                                </div>
                                <div class="col-sm-4">
                                    <label class="control-label">English:</label>
                                    <input type="text" class="form-control" placeholder="% of Marks or Grade">
                                </div>
                                <div class="col-sm-4">
                                    <label class="control-label">2nd Language <small>Hindi/Bengali/other</small> :</label>
                                    <input type="text" class="form-control" placeholder="% of Marks or Grade">
                                </div>
                                <div class="col-sm-4">
                                    <label class="control-label">Maths:</label>
                                    <input type="text" class="form-control" placeholder="% of Marks or Grade">
                                </div>
                                <div class="col-sm-4">
                                    <label class="control-label">Science:</label>
                                    <input type="text" class="form-control" placeholder="% of Marks or Grade">
                                </div>
                                <div class="col-sm-4">
                                    <label class="control-label">Social Science:</label>
                                    <input type="text" class="form-control" placeholder="% of Marks or Grade">
                                </div>
                                <div class="col-sm-4">
                                    <label class="control-label">Other:</label>
                                    <input type="text" class="form-control" placeholder="% of Marks or Grade">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label class="control-label">Declaration:</label>
                                    <p>1. it will be my responsibility to maintain the decorum of the college</p>
                                    <p>1. it will be my responsibility to maintain the decorum of the college</p>
                                    <p>1. it will be my responsibility to maintain the decorum of the college</p>
                                    <p>1. it will be my responsibility to maintain the decorum of the college</p>
                                    <h5 style="line-height: 3.7;">
                                        <strong><input type="checkbox" class="othrcheck" name="aggrement" value="1" required> &nbsp; &nbsp;&nbsp;I Accept all the above stated points.</strong>
                                    </h5>
                                </div>
                            </div>
                            <style>input.othrcheck[type="checkbox"] {position: absolute;left: 0;opacity: 1;} </style>
                            <div class="form-group mar-bot-0">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <i class="waves-effect waves-light light-btn waves-input-wrapper" style=""><input type="submit" value="APPLY NOW" class="waves-button-input"></i>
                                </div>
                            </div>
                            <div class="form-group"><div class="col-sm-12"><hr style="border-color: #f36b3b"></div></div>
                            <div class="form-group" style="background:#ddd;margin-top:10px">
                                <div class="col-sm-12">
                                    <label class="control-label">Instruction:</label>
                                    <p>1. it will be my responsibility to maintain the decorum of the college</p>
                                    <p>1. it will be my responsibility to maintain the decorum of the college</p>
                                    <p>1. it will be my responsibility to maintain the decorum of the college</p>
                                    <p>1. it will be my responsibility to maintain the decorum of the college</p><br>
                                </div>
                            </div>                        
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection   

      