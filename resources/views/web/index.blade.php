@extends('web.templete.master')

{{-- META --}}
@section('meta')
	<title>Parakiaki Academy</title>
	<!--<meta name="description" content="">-->
	<!--<meta name="author" content="">-->
	<!--<meta name="keywords" content="">-->
@endsection

@section('content') 
<style>
    .first::first-letter 
		{
		    font-size: 200%;
		    color: black;
		    line-height:1;
		}
</style>
    <!-- SLIDER -->
    <section>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                {{-- <div class="item slider1 active">
                    <img src="{{asset('web/images/slider/1.jpg')}}" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>ADMISSION OPEN<span> 2020</span></h2>
                        <p><b style="color: #ea6111;">Arts</b> / <b>Commerce</b> - <b>English </b>and <b>Bengali</b> mediun <b>Admission</b> for 2020 batch going on <b style="color: #ea6111;font-size: 17px;">Hurry up </b></p>
                        <a href="#" class="bann-btn-2">For Admission</a> <a href="{{route('web.admission')}}" class="bann-btn-1">Click Here</a>
                    </div>
                </div> --}}
                <div class="item slider1 active">
                    <img src="{{asset('web/images/slider/2.jpg')}}" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>ADMISSION OPEN<span> 2020</span></h2>
                        <p><b style="color: #ea6111;">Arts</b> / <b>Commerce</b> - <b>English </b>and <b>Bengali</b> mediun <b>Admission</b> for 2020 batch going on Hurry up limited seats</p>
                        <a href="#" class="bann-btn-2">For Admission</a> <a href="{{route('web.admission')}}" class="bann-btn-1">Click Here</a>
                    </div>
                </div>
                <div class="item">
                    <img src="{{asset('web/images/slider/3.jpg')}}" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>ADMISSION OPEN<span> 2020</span></h2>
                        <p><b style="color: #ea6111;">Arts</b> / <b>Commerce</b> - <b>English </b>and <b>Bengali</b> mediun <b>Admission</b> for 2020 batch going on Hurry up limited seats</p>
                        <a href="#" class="bann-btn-2">For Admission</a> <a href="{{route('web.admission')}}" class="bann-btn-1">Click Here</a>
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
                            <a href="#" class="waves-effect waves-light btn-large wed-pop-ser-btn" alt="" style="font-size: 8px;    line-height: 26px;"><img src="{{asset('web/images/icon/h-ic1.png')}}" >Bright Future</a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect waves-light btn-large wed-pop-ser-btn" style="font-size: 8px;     line-height: 11px;"><img src="{{asset('web/images/icon/h-ic3.png')}}" alt="">Balanced Development</a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect waves-light btn-large wed-pop-ser-btn" style="font-size: 8px;line-height: 11px;"><img src="{{asset('web/images/icon/h-ic2.png')}}" alt="" > Focused Learning</a>
                        </li>
                        {{-- <li>
                            <a href="#" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="{{asset('web/images/icon/h-ic4.png')}}" alt=""> Courses</a>
                        </li> --}}
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- NEWS AND EVENTS -->
    <section>
        <div class="container pad-bot-0" style="padding:17px;0px;">
            <div class="row">
                <div class="con-title">
                    <h4>News and <span>Events</span></h4>
                    <marquee><a href="{{route('web.admission')}}" style="color:red;font-weight:bold;" >Click Here For Online Admission</a> &emsp; || &emsp; <a href="{{asset('web/pdf/scp.pdf')}}" style="color:red;font-weight:bold;" target="_blank">Click Here To Check Secred Heart junior College 2020 Prospectus</a> </marquee>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="bot-gal h-vid ho-event-mob-bot-sp p-justfy">
                        <h4>principal Messege</h4>
                        <p class="first">Welcome to <strong>Secret Heart Junior College</strong> a co-educational AHSEC affiliated private institute with a distinct and successful culture of students learning together, supporting and encouraging each other to do their best.</p>
                        <p>&emsp;&emsp;&ensp;At <strong>Sacred Heart Junior College</strong>, both academic and non academic staff work collaboratively to develop a clear, comprehensive and cohesive curriculum, to support the health and welbeing of students, and to challenge our students to reach their highest potential.</p>
                        <p>It is a privilege for me to be a part of Secret Heart Junior College. My sincere endeavor in the college has been to instil moral values and positive attitude among the students to help them in their personality development and character-building. I assure you that <Strong>Sacred Heart Junior College</Strong> is an institute worthy of your serious attention and consideration, and i welcome your interest in our exciting college.</p>
                        <p>&emsp;&emsp;&ensp;I am confident that with the excellent team, we are always here to enhance and strengthen the success of <strong>Sacred Heart Junior College</strong>.</p>
                        <p>l am looking forward to continuing this process with you.</p>                           
                        <p>Sincerely on behalf of allof us at <strong>Sacred Heart Junior College</strong></p>
                        <div style="margin-top: 40px;">
                            <h1 style="font-family: 'Cookie', cursive;">LKalimohan Singha</h1>
                            <p style="font-family: 'Cookie', cursive;font-size:20px">
                                M.A., B.Ed. (Retd. Principal, Indramani H.5. School) <br>
                                Principal
                            </p>
                        </div>  
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bot-gal h-blog ho-event">
                        <h4>Notification</h4>
                        <div class="ho-event holder">
                            <ul id="ticker01">
                                <li>
                                    <div class="ho-ev-date"><span>01</span><span>Jun,2020</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="{{asset('web/pdf/scp.pdf')}}" target="_blank">
                                            <h4>Prospectus 2020</h4>
                                        </a>
                                        <p>Sacred Heart Junior College Prospectus</p>
                                        <span>01-06-2020</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-date"><span>06</span><span>Jun,2020</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="{{route('web.admission')}}">
                                            <h4>Online Admission Going On</h4>
                                        </a>
                                        <p>Sacred Heart Junior College 2020 Batch Arts and Commerce</p>
                                        <span>06-06-2020</span>
                                    </div>
                                </li>
                                {{-- <li>
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
                                </li> --}}
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
                    <div class="bot-gal h-vid ho-event-mob-bot-sp p-justfy">
                        <h4>Welcome to Secret Heart</h4>
                        <p class="first"><strong>Sacred Heart Junior College</strong> is a place where we have committed ourselves to the vision of raising achievement, enhancing aspirations and enriching innovations. It is through which we create focus on students' success. This college is a result of dream of a bunch of dignified, solemn and dedicated youths of the locality, who have already established their potential in different competitive exams, specially in CTET & ATET.<a href="#" style="color:red">Read More</a></p>
                        <h5>Distinctive Features</h5>
                        <p class="first"><strong>Sacred Heart Junior College </strong> some unique feathers that draw the strength to the new generation to compete and stand tall in the crowd. The college likes to support the locality with best possible knowledge and education. The college is well supported bya team excellent instructors, friendly mentors and experienced retired intellectuals. <a href="#" style="color:red">Read More</a></p>
                    </div>                    
                    <div class="bot-gal h-gal ho-event-mob-bot-sp" style="margin-top: 50px">
                        <h4>Photo Gallery</h4>
                        <ul>
                            <li><img class="materialboxed" data-caption="" src="{{asset('web/images/galary/001.jpeg')}}" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="" src="{{asset('web/images/galary/01.jpeg')}}" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="" src="{{asset('web/images/galary/1.jpeg')}}" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="" src="{{asset('web/images/galary/2.jpeg')}}" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="" src="{{asset('web/images/galary/3.jpeg')}}" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="" src="{{asset('web/images/galary/4.jpeg')}}" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="" src="{{asset('web/images/galary/5.jpeg')}}" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="" src="{{asset('web/images/galary/6.jpeg')}}" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="" src="{{asset('web/images/galary/7.jpeg')}}" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="" src="{{asset('web/images/galary/8.jpeg')}}" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="" src="{{asset('web/images/galary/9.jpeg')}}" alt="">
                            </li>
                            <li><img class="materialboxed" data-caption="" src="{{asset('web/images/galary/12.jpeg')}}" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bot-gal h-gal ho-event-mob-bot-sp" id="query_form">
                        <h4>Query Form</h4>
                        <div class="ho-st-login">
                            <div id="hom-vijay" class="col s12">
                                @if (Session::has('message'))
                                <div class="alert alert-success" >{{ Session::get('message') }}</div>
                                <script>
                                    elmnt = document.getElementById("query_form");
                                    elmnt.scrollIntoView();
                                </script>
                                @endif
                                @if (Session::has('error'))
                                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                                    <script>
                                        elmnt = document.getElementById("query_form");
                                        elmnt.scrollIntoView();
                                    </script>
                                @endif
                                    
                                {{ Form::open(array('route' => 'web.insert_query', 'method' => 'post')) }}
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="text" class="validate" placeholder="Enter Name" name="name">
                                            @error('name')
                                                <span style="color:red">
                                                    {{ $message }}
                                                </span>
                                                <script>
                                                    elmnt = document.getElementById("query_form");
                                                    elmnt.scrollIntoView();
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="text" class="validate" name="email" placeholder="Enter Email Id">
                                            @error('email')
                                                <span style="color:red">
                                                    {{ $message }}
                                                </span>
                                                <script>
                                                    elmnt = document.getElementById("query_form");
                                                    elmnt.scrollIntoView();
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="text" class="validate" placeholder="Enter Subject" name="subject">
                                            @error('subject')
                                                <span style="color:red">
                                                    {{ $message }}
                                                </span>
                                                <script>
                                                    elmnt = document.getElementById("query_form");
                                                    elmnt.scrollIntoView();
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea name="message" placeholder="Enter Message"></textarea>
                                            @error('message')
                                                <span style="color:red">
                                                    {{ $message }}
                                                </span>
                                                <script>
                                                    elmnt = document.getElementById("query_form");
                                                    elmnt.scrollIntoView();
                                                </script>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="submit" value="Submit" value="Register" class="waves-effect waves-light light-btn" style="color:black">
                                        </div>
                                    </div>
                                {{Form::close()}}
                            </div>
                        </div>
                    </div>
                    <div class="bot-gal h-gal ho-event-mob-bot-sp" style="margin-top: 6px">
                        <h4>Facebook Page</h4>
                        <div id="facebook-div">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DISCOVER MORE -->
    <section>
        <div class="container com-sp pad-bot-50">
            <div class="row">
                <div class="con-title">
                    <h2>Well <span>Wisher</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="ed-course">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#">
                                <img src="{{asset('web/images/welwisher/1.jpg')}}" alt="">
                                <span>Zahid Islam Barbhuiya</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#">
                                <img src="{{asset('web/images/welwisher/6.jpg')}}" alt="">
                                <span>Anayatulla Laskar</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#">
                                <img src="{{asset('web/images/welwisher/2.jpg')}}" alt="">
                                <span>Monoj Singha</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#">
                                <img src="{{asset('web/images/welwisher/3.jpg')}}" alt="">
                                <span>Parthapratim Chakrabarty</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#">
                                <img src="{{asset('web/images/welwisher/4.jpg')}}" alt="">
                                <span>Soruj Nath</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#">
                                <img src="{{asset('web/images/welwisher/5.jpg')}}" alt="">
                                <span>Sahid Iqbal</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#">
                                <img src="{{asset('web/images/welwisher/7.jpg')}}" alt="">
                                <span>Samrat Dey</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#">
                                <img src="{{asset('web/images/welwisher/8.jpg')}}" alt="">
                                <span>Noor A Barbhuiya</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#">
                                <img src="{{asset('web/images/welwisher/9.jpg')}}" alt="">
                                <span>Joydip Nath</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#">
                                <img src="{{asset('web/images/welwisher/10.jpg')}}" alt="">
                                <span>Baharul Islam Laskar</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#">
                                <img src="{{asset('web/images/welwisher/11.jpg')}}" alt="">
                                <span>Samim Ahmed Laskar</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#">
                                <img src="{{asset('web/images/welwisher/12.jpg')}}" alt="">
                                <span>Baharul Islam Laskar</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#">
                                <img src="{{asset('web/images/welwisher/13.jpg')}}" alt="">
                                <span>Irean Shnen</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#">
                                <img src="{{asset('web/images/welwisher/14.jpg')}}" alt="">
                                <span>Hanif M Choudhary</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#">
                                <img src="{{asset('web/images/welwisher/15.jpg')}}" alt="">
                                <span>Nasir Ahmed Laskar</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#">
                                <img src="{{asset('web/images/welwisher/16.jpg')}}" alt="">
                                <span>Ikbal H Barbhuiya</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#">
                                <img src="{{asset('web/images/welwisher/17.jpg')}}" alt="">
                                <span>Abul Kashim Laskar</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#">
                                <img src="{{asset('web/images/welwisher/18.jpg')}}" alt="">
                                <span>Ruhul Muhammad</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#">
                                <img src="{{asset('web/images/welwisher/19.jpg')}}" alt="">
                                <span>Zafar Iqbal Laskar</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection   

      