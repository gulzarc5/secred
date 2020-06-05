@extends('web.templete.master')

{{-- META --}}
@section('meta')
	<title>Parakiaki Academy</title>
	<!--<meta name="description" content="">-->
	<!--<meta name="author" content="">-->
	<!--<meta name="keywords" content="">-->
@endsection

@section('content') 
    <!-- SLIDER -->
    <section>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slider1 active">
                    <img src="{{asset('web/images/slider/1.jpg')}}" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Welcome to <span>SACRED HEART JUNIOR COLLEGE</span></h2>
                        {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p> --}}
                        For Admission <a href="{{route('web.admission')}}" class="bann-btn-1">Click Here</a>
                    </div>
                </div>
                <div class="item">
                    <img src="{{asset('web/images/slider/2.jpg')}}" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Admission open <span>2018</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <a href="#" class="bann-btn-1">Admission</a><a href="#" class="bann-btn-2">Read More</a>
                    </div>
                </div>
                <div class="item">
                    <img src="{{asset('web/images/slider/3.jpg')}}" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Education <span>Master</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <a href="#" class="bann-btn-1">All Courses</a><a href="#" class="bann-btn-2">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <i class="fa fa-chevron-left slider-arr"></i>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <i class="fa fa-chevron-right slider-arr"></i>
            </a>
        </div>
    </section>

    <!-- QUICK LINKS -->
    <section>
        <div class="container">
            <div class="row">
                <div class="wed-hom-ser">
                    <ul>
                        <li>
                            <a href="awards.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="{{asset('web/images/icon/h-ic1.png')}}" alt=""> Academy</a>
                        </li>
                        <li>
                            <a href="admission.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="{{asset('web/images/icon/h-ic2.png')}}" alt=""> Admission</a>
                        </li>
                        <li>
                            <a href="all-courses.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="{{asset('web/images/icon/h-ic4.png')}}" alt=""> Courses</a>
                        </li>
                        <li>
                            <a href="seminar.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="{{asset('web/images/icon/h-ic3.png')}}" alt=""> Seminar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- NEWS AND EVENTS -->
    <section>
        <div class="container com-sp pad-bot-0">
            <div class="row">
                <div class="con-title">
                    <h2>News and <span>Events</span></h2>
                    <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="bot-gal h-vid ho-event-mob-bot-sp">
                        <h4>Director Messege</h4>
                        <p>Maecenas finibus neque a tellus auctor mattis. Aliquam tempor varius ornare. Maecenas dignissim leo leo, nec posuere purus finibus vitae Quisque vitae neque at tellus malesuada convallis. Phasellus in lectus vitae ex euismod interdum non a lorem. Nulla bibendum. Curabitur mi odio, tempus quis risus cursus. Maecenas finibus neque a tellus auctor mattis. Aliquam tempor varius ornare. Maecenas dignissim leo leo, nec posuere purus finibus vitae.</p> 
                        <p>Maecenas finibus neque a tellus auctor mattis. Aliquam tempor varius ornare. Maecenas dignissim leo leo, nec posuere purus finibus vitae.</p>
                    </div>
                    <div class="bot-gal h-vid ho-event-mob-bot-sp" style="margin-top: 20px">
                        <h4>principal Messege</h4>
                        <p>Maecenas finibus neque a tellus auctor mattis. Aliquam tempor varius ornare. Maecenas dignissim leo leo, nec posuere purus finibus vitae.</p>
                        <p>Maecenas finibus neque a tellus auctor mattis. Aliquam tempor varius ornare. Maecenas dignissim leo leo, nec posuere purus finibus vitae. Quisque vitae neque at tellus malesuada convallis. Phasellus in lectus vitae ex euismod interdum non a lorem. Nulla bibendum. Curabitur mi odio, tempus quis risus cursus.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bot-gal h-blog ho-event">
                        <h4>Notification</h4>
                        <div class="ho-event">
                            <ul>
                                <li>
                                    <div class="ho-ev-date"><span>07</span><span>jan,2018</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="events.html">
                                            <h4>Latinoo College Expo 2018</h4>
                                        </a>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-date"><span>12</span><span>jan,2018</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="events.html">
                                            <h4>Training at Team Fabio Clemente</h4>
                                        </a>
                                        <p>Nulla at velit convallis venenatis.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-date"><span>26</span><span>jan,2018</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="events.html">
                                            <h4>Nulla at velit convallis</h4>
                                        </a>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-date"><span>18</span><span>jan,2018</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="events.html">
                                            <h4>Admissions Information Session and Tour</h4>
                                        </a>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- UPCOMING EVENTS -->
    <section>
        <div class="container com-sp pad-bot-0">
            <div class="row">
                <div class="col-md-6">
                    <div class="bot-gal h-vid ho-event-mob-bot-sp">
                        <h4>Welcome to Secret Heart</h4>
                        <p>Maecenas finibus neque a tellus auctor mattis. Aliquam tempor varius ornare. Maecenas dignissim leo leo, nec posuere purus finibus vitae.</p>
                        <p>Maecenas finibus neque a tellus auctor mattis. Aliquam tempor varius ornare. Maecenas dignissim leo leo, nec posuere purus finibus vitae.</p>
                        <h5>Maecenas sollicitudin lacinia</h5>
                        <p>Maecenas finibus neque a tellus auctor mattis. Aliquam tempor varius ornare. Maecenas dignissim leo leo, nec posuere purus finibus vitae.</p>
                        <p>Quisque vitae neque at tellus malesuada convallis. Phasellus in lectus vitae ex euismod interdum non a lorem. Nulla bibendum. Curabitur mi odio, tempus quis risus cursus.</p>
                    </div>                    
                    <div class="bot-gal h-gal ho-event-mob-bot-sp" style="margin-top: 50px">
                        <h4>Photo Gallery</h4>
                        <ul>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="{{asset('web/images/ami/8.jpg')}}" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="{{asset('web/images/ami/9.jpg')}}" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="{{asset('web/images/ami/10.jpg')}}" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="{{asset('web/images/ami/11.jpg')}}" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="{{asset('web/images/ami/1.jpg')}}" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="{{asset('web/images/ami/2.jpg')}}" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="{{asset('web/images/ami/3.jpg')}}" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="{{asset('web/images/ami/4.jpg')}}" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="{{asset('web/images/ami/5.jpg')}}" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="{{asset('web/images/ami/6.jpg')}}" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="{{asset('web/images/ami/7.jpg')}}" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="Education master image captions" src="{{asset('web/images/ami/8.jpg')}}" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bot-gal h-gal ho-event-mob-bot-sp">
                        <h4>Query Form</h4>
                        <div class="ho-st-login">
                            <div id="hom-vijay" class="col s12">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="text" class="validate">
                                            <label>Name</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="text" class="validate">
                                            <label>Email id</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="password" class="validate">
                                            <label>Subject</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea name=""></textarea>
                                            <label>Messege</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="submit" value="Register" class="waves-effect waves-light light-btn">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="bot-gal h-gal ho-event-mob-bot-sp" style="margin-top: 6px">
                        <h4>Facebook Page</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DISCOVER MORE -->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>Academic <span>Stuff</span></h2>
                    <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                </div>
            </div>
            <div class="row">
                <div class="ed-course">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="about.html">
                                <img src="{{asset('web/images/h-about.jpg')}}" alt="">
                                <span>Academics</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="admission.html">
                                <img src="{{asset('web/images/h-adm1.jpg')}}" alt="">
                                <span>Admission</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="dashboard.html">
                                <img src="{{asset('web/images/h-cam.jpg')}}" alt="">
                                <span>Students profile</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="research.html">
                                <img src="{{asset('web/images/h-res.jpg')}}" alt="">
                                <span>Research & Education</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="all-courses.html">
                                <img src="{{asset('web/images/h-about1.jpg')}}" alt="">
                                <span>Couse</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="db-time-line.html">
                                <img src="{{asset('web/images/h-adm.jpg')}}" alt="">
                                <span>Exam Time Line</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="seminar.html">
                                <img src="{{asset('web/images/h-cam1.jpg')}}" alt="">
                                <span>Seminar 2018</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="events.html">
                                <img src="{{asset('web/images/h-res1.jpg')}}" alt="">
                                <span>Research & Education</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection   

      