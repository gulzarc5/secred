@extends('web.templete.master')

{{-- META --}}
@section('meta')
	<title>Parakiaki Academy</title>
	<!--<meta name="description" content="">-->
	<!--<meta name="author" content="">-->
	<!--<meta name="keywords" content="">-->
@endsection

@section('content') 
    <section class="c-all h-quote">
        <div class="container">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>Latest <span> News</span></h2>
                        </div>
                        <div>
                            <div class="ho-event pg-eve-main">
                                <ul>
                                    {{-- <li>
                                        <div class="ho-ev-date pg-eve-date"><span>01</span><span>JUN,2020</span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a href="{{asset('web/pdf/scp.pdf')}}">
                                                <h4>Prospectus 2020</h4>
                                            </a>
                                            <p>Sacred Heart Junior College Prospectus</p>
                                            <span>01-06-2020</span>
                                        </div>
                                    </li> --}}
                                    <li>
                                        <div class="ho-ev-date pg-eve-date"><span>11</span><span>APR,2020</span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a href="{{route('web.super.test')}}">
                                                <h4>Click Here For Super Test Registration</h4>
                                            </a>
                                            <p>Sacred Super Test' is a highly ambitious and innovative educational program under the banner of "Sacred Heart Senior Secondary School". The main objective of SST is to track the talented bunch of students and hone their skills by providing a conducive environment. SST is considered as an entrance exam for Sacred Heart Senior Secondary School.</p>
                                            <span>11-04-2022</span>
                                        </div>
                                    </li>
                                    {{-- <li>
                                        <div class="ho-ev-date pg-eve-dat"><span>11</span><span>APR,2022</span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a href="{{route('web.super.test')}}" target="_blank">
                                                <h4>Click Here For Super Test Registration</h4>
                                            </a>
                                            <p>Sacred Super Test' is a highly ambitious and innovative educational program under the banner of "Sacred Heart Senior Secondary School". The main objective of SST is to track the talented bunch of students and hone their skills by providing a conducive environment. SST is considered as an entrance exam for Sacred Heart Senior Secondary School.</p>
                                            <span>11-04-2022</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ho-ev-date pg-eve-date"><span>06</span><span>JUN,2020</span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a href="{{route('web.admission')}}">
                                                <h4>Online Admission Going On</h4>
                                            </a>
                                            <p>Sacred Heart Junior College 2020 Batch Arts and Commerce</p>
                                            <span>06-06-2020</span>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="pg-pagina">
                            <ul class="pagination">
                                <li class="disabled"><a href="#!"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                <li class="active"><a href="#!">1</a></li>
                                <li class="waves-effect"><a href="#!">2</a></li>
                                <li class="waves-effect"><a href="#!">3</a></li>
                                <li class="waves-effect"><a href="#!">4</a></li>
                                <li class="waves-effect"><a href="#!">5</a></li>
                                <li class="waves-effect"><a href="#!"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            </ul>

                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection  