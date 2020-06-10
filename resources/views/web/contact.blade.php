@extends('web.templete.master')

{{-- META --}}
@section('meta')
	<title>Parakiaki Academy</title>
	<!--<meta name="description" content="">-->
	<!--<meta name="author" content="">-->
	<!--<meta name="keywords" content="">-->
@endsection

@section('content') 
    <section class="h-quote">
        <div class="container pad-bot-70">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>Contact <span> Us</span></h2>
                        </div>
                    </div>
                    <div class="pg-contact">
                        <div class="col-md-4 col-sm-6 col-xs-12 new-con new-con1"> <img src="img/contact/1.png" alt="">
                            <h4>Address</h4>
                            <p>COLLEGE ROAD, LALA, (NEAR BSNL OFFICE) HAILAKANDI, ASSAM</p>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 new-con new-con3"> <img src="img/contact/2.png" alt="">
                            <h4>CONTACT NUMBER:</h4>
                            <p> <a href="tel://+91-8471840057" class="contact-icon">Phone: +91-8471840057</a>
                                <br> <a href="tel://+91-9085400374" class="contact-icon">Mobile: +91-9085400374</a>
                                <br> <a href="tel://+91-9101169941" class="contact-icon">Mobile: +91-9101169941</a>
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 new-con new-con4"> <img src="img/contact/3.png" alt="">
                            <h4>CONTACT MAIL</h4>
                            <p> 
                                <br> <a href="mailto:mytestmail@gmail.com" class="contact-icon">Email: info@demo.com</a> 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="map">
        <div class="row contact-map">
            <!-- IFRAME: GET YOUR LOCATION FROM GOOGLE MAP -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14514.909378883764!2d92.57838779308527!3d24.5640825330848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1591760766402!5m2!1sen!2sin" allowfullscreen=""></iframe>
            <div class="container">
                <div class="overlay-contact footer-part footer-part-form">
                    <div class="map-head">
                        <p>Send Us Now</p>
                        <h2>GetIn Touch</h2> <span class="footer-ser-re">Service Request Form</span> </div>
                    <!-- ENQUIRY FORM -->
                    <form id="contact_form" name="contact_form" action="send.php">
                        <ul>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                <input type="text" id="f1" value="" name="f1" placeholder="Name" required=""> </li>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                <input type="text" id="f2" value="" name="f2" placeholder="Phone" required=""> </li>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                <input type="text" id="f3" value="" name="f3" placeholder="City" required=""> </li>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                <input type="text" id="f4" value="" name="f4" placeholder="Country" required=""> </li>
                            <li class="col-md-12 col-sm-12 col-xs-12 contact-input-spac">
                                <textarea id="f5" name="f5" required=""></textarea>
                            </li>
                            <li class="col-md-6">
                                <input type="submit" value="SUBMIT"> </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection  