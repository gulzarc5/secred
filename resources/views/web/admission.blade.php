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
                        <form class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="control-label">1. Name of candidate:</label>
                                    <input type="text" class="form-control" placeholder="Enter candidate name" required="">
                                </div>
                                <div class="col-sm-3">
                                    <label class="control-label">2. Date of Birth:</label>
                                    <input type="date" class="form-control" placeholder="Enter DOB" required="">
                                </div>
                                <div class="col-sm-3">
                                    <label class="control-label">3. Gender:</label>
                                    <select class="initialized">             
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label class="control-label">4. Religion:</label>
                                    <input type="text" class="form-control" placeholder="Enter religion" required="">
                                </div>
                                <div class="col-sm-4">
                                    <label class="control-label">5. Caste:</label>
                                    <select class="initialized">             
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label class="control-label">6. Stream:</label>
                                    <select class="initialized">             
                                        <option>Science</option>
                                        <option>Commerce</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label class="control-label">7. Residential address of communication:</label>
                                    <textarea name="" id="" class="form-control" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="control-label">8. Mobile no.:</label>
                                    <input type="text" class="form-control" placeholder="Enter religion" required="">
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">9. E-mail:</label>
                                    <input type="text" class="form-control" placeholder="Enter religion" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="control-label">10. Name of father:</label>
                                    <input type="text" class="form-control" placeholder="Enter candidate name" required="">
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">11. Name of mother:</label>
                                    <input type="text" class="form-control" placeholder="Enter candidate name" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <h5 class="control-label" style="text-decoration:underline">12. Previous academic of the student</h5>
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">12.a Name and address of Previous school:</label>
                                    <textarea name="" id="" class="form-control" rows="6"></textarea>
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">12.b Name of Board:</label>
                                    <input type="text" class="form-control" placeholder="Enter board" required="">
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <label class="control-label">12.c Session:</label>
                                            <input type="text" class="form-control" placeholder="Enter board" required="">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="control-label">12.d Division:</label>
                                            <input type="text" class="form-control" placeholder="Enter board" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">12.e Medium of Instruction:</label>
                                    <input type="text" class="form-control" placeholder="Enter board" required="">
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">12.f Percentile:</label>
                                    <input type="text" class="form-control" placeholder="Enter board" required="">
                                </div>
                                <div class="col-sm-12">
                                    <label class="control-label">12.g Marks obtiain in the board examination you have passed:</label>
                                </div>
                                <div class="col-sm-4">
                                    <label class="control-label">English:</label>
                                    <input type="text" class="form-control" placeholder="% of Marks or Grade" required="">
                                </div>
                                <div class="col-sm-4">
                                    <label class="control-label">2nd Language <small>Hindi/Bengali/other</small> :</label>
                                    <input type="text" class="form-control" placeholder="% of Marks or Grade" required="">
                                </div>
                                <div class="col-sm-4">
                                    <label class="control-label">Maths:</label>
                                    <input type="text" class="form-control" placeholder="% of Marks or Grade" required="">
                                </div>
                                <div class="col-sm-4">
                                    <label class="control-label">Science:</label>
                                    <input type="text" class="form-control" placeholder="% of Marks or Grade" required="">
                                </div>
                                <div class="col-sm-4">
                                    <label class="control-label">Social Science:</label>
                                    <input type="text" class="form-control" placeholder="% of Marks or Grade" required="">
                                </div>
                                <div class="col-sm-4">
                                    <label class="control-label">Other:</label>
                                    <input type="text" class="form-control" placeholder="% of Marks or Grade" required="">
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
                                        <strong><input type="checkbox" class="othrcheck"> &nbsp; &nbsp;&nbsp;I Accept all the above stated points.</strong>
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection   

      