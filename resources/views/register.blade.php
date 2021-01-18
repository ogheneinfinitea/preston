@extends('structure.master')
@section('title')
    Create Account || PRESTON MANAGEMENT
@endsection
@section('body')
<section class="banner-area">
    <div class="banner-overlay">
        <div class="banner-text text-center">
            <div class="container">
                <!-- Section Title Starts -->
                <div class="row text-center">
                    <div class="col-xs-12">
                        <!-- Title Starts -->
                        <h2 class="title-head">Create <span>Account</span></h2>
                        <!-- Title Ends -->
                        <hr>
                        <!-- Breadcrumb Starts -->
                        <ul class="breadcrumb">
                            <li><a href="index-2.html"> home</a></li>
                            <li>Registration</li>
                        </ul>
                        <!-- Breadcrumb Ends -->
                    </div>
                </div>
                <!-- Section Title Ends -->
            </div>
        </div>
    </div>
</section>
<!-- Banner Area Ends -->
<!-- Contact Section Starts -->
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 contact-form">
                <h3 class="col-xs-12">ACCOUNT REGISTRATION</h3>
                <p class="col-xs-12">Click Register to submit and Generate pin for trading, kindly copy out pin and send to your Trader to process your Trade/Account Management..</p>
                <!-- Contact Form Starts -->
                <form class="form-contact" method="post" action="register-trader">
                    {{csrf_field()}}

                    <!-- Input Field Starts -->
                    <div class="form-group col-md-6">
                        <input class="form-control" name="fullname" id="fullname" placeholder="FULL NAME" type="text" required>
                    </div>
                    <!-- Input Field Ends -->
                    <!-- Input Field Starts -->
                    <div class="form-group col-md-6">
                        <input class="form-control" name="email" id="email" placeholder="EMAIL" type="email" required>
                    </div>
                    <!-- Input Field Ends -->
                    <!-- Input Field Starts -->
                    <div class="form-group col-md-6">
                        <input class="form-control" name="password" id="password" placeholder="PASSWORD" type="password" required>
                    </div>
                    <!-- Input Field Ends -->
                    <!-- Input Field Starts -->
                    <div class="form-group col-md-6">
                        <input class="form-control" name="c_password" id="c_password" placeholder="RE TYPE PASSWORD" type="text" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input class="form-control" name="number" id="number" placeholder="CONTACT NUMBER" type="email" required>
                    </div>
                    <!-- Input Field Ends -->
                    <!-- Input Field Starts -->
                    <div class="form-group col-md-6">
                        <input class="form-control" name="nationality" id="nationality" placeholder="NATIONALITY" type="text" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input class="form-control" name="address" id="occupation" placeholder="ADDRESS" type="email" required>
                    </div>
                    <!-- Input Field Ends -->
                    <!-- Input Field Starts -->
                    <div class="form-group col-md-6">
                        <input class="form-control" name="occupation" id="occupation" placeholder="OCCUPATION" type="text" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input class="form-control" name="mt4_user" id="mt4_user" placeholder="MT4 USERNAME" type="email" required>
                    </div>
                    <!-- Input Field Ends -->
                    <!-- Input Field Starts -->
                    <div class="form-group col-md-6">
                        <input class="form-control" name="mt4_pass" id="mt4_pass" placeholder="MT4 PASSWORD" type="text" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input class="form-control" name="broker" id="broker" placeholder="SERVER/BROKER DETAILS" type="text" required>
                    </div>
                    <!-- Input Field Ends -->
                    <!-- Input Field Starts -->
                    <BR>
                    <!-- Input Field Ends -->
                    <!-- Submit Form Button Starts -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">REGISTER</a>
                    </div>
                    <!-- Submit Form Button Ends -->
                    <!-- Form Submit Message Starts -->
                    <div class="col-xs-12 text-center output_message_holder d-none">
                        <p class="output_message"></p>
                    </div>
                     <!-- Form Submit Message Ends -->
                </form>
                <!-- Contact Form Ends -->
            </div>
            <!-- Contact Widget Starts -->

            <!-- Contact Widget Ends -->
        </div>
    </div>
</section>
<!-- Contact Section Ends -->
<!-- Call To Action Section Starts -->
<section class="call-action-all">
    <div class="call-action-all-overlay">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Call To Action Text Starts -->
                    <div class="action-text">
                        <h2>Get Started Today </h2>
                        <p class="lead">Allow Us invest for you, while you make profit from rest</p>
                    </div>
                    <!-- Call To Action Text Ends -->
                    <!-- Call To Action Button Starts -->
                    <p class="action-btn"><a class="btn btn-primary" href="https://t.me/prstmg">JOIN NOW
                        </a></p>
                    <!-- Call To Action Button Ends -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
