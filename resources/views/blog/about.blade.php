@extends('blog.app')
@section('main-content')
 <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 page-title wow fadeIn">
                        <span aria-hidden="true" class="icon_mail"></span>
                        <h1>Kontak kami</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="contact-us-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-7 contact-form wow fadeInLeft">
	                   
	                    <form role="form" action="assets/contact.php" method="post">
	                    	<div class="form-group">
	                    		<label for="contact-name">Name</label>
	                        	<input type="text" name="name" placeholder="Enter your name..." class="contact-name form-control" id="contact-name">
	                        </div>
	                    	<div class="form-group">
	                    		<label for="contact-email">Email</label>
	                        	<input type="text" name="email" placeholder="Enter your email..." class="contact-email form-control" id="contact-email">
	                        </div>
	                        <div class="form-group">
	                        	<label for="contact-subject">Subject</label>
	                        	<input type="text" name="subject" placeholder="Your subject..." class="contact-subject form-control" id="contact-subject">
	                        </div>
	                        <div class="form-group">
	                        	<label for="contact-message">Message</label>
	                        	<textarea name="message" placeholder="Your message..." class="contact-message form-control" id="contact-message"></textarea>
	                        </div>
	                        <button type="submit" class="btn">Send</button>
	                    </form>
	                </div>
	                <div class="col-sm-5 contact-address wow fadeInUp">
	                    <h3>We Are Here</h3>
	                    <div class="map"></div>
	                    <h3>Address</h3>
	                    <p>Via Principe Amedeo 9 <br> 10100, Torino, TO, Italy</p>
	                    <p>Phone: 0039 333 12 68 347</p>
	                </div>
	            </div>
	        </div>
        </div>

       @endsection