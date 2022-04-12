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
    .col-sm-12{
        padding-right:5px;
        padding-left:5px;
    }
    .col-sm-6{
        padding-right:5px;
        padding-left:5px;
    }
</style>
    <!-- Addmission -->
    <section class="c-all h-quote">
        <div class="container" style="text-align: center;">
            <img src="{{asset('web/images/success.png')}}" alt="" style="height:100px">
            <div class="row">
                <div class="con-title">
                    <h2>Sacred Super Test Registration Successfully Submitted</h2>
                    {{-- <p>For Class 10th to 11th Moving Students (Arts & Commerce)</p> --}}
                </div>
            </div>
         
        </div>
    </section>
@endsection   

      