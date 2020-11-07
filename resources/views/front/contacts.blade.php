@extends('layouts.front_master')
@section('content')


<section class="sec-padding">
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <div class="smart-forms bmargin">

                    <h3>Contact Form</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit consectetuer adipiscing elit. Suspendisse et justo. augue.</p>
                    <br/>
                    <br/>

                    <form method="post" action="#" id="smart-form">
                        <div>
                            <div class="section">
                                <label class="field prepend-icon">
                                    <input type="text" name="sendername" id="sendername" class="gui-input" placeholder="Enter name">
                                    <span class="field-icon"><i class="fa fa-user"></i></span> </label>
                            </div>
                            <!-- end section -->

                            <div class="section">
                                <label class="field prepend-icon">
                                    <input type="email" name="emailaddress" id="emailaddress" class="gui-input" placeholder="Email address">
                                    <span class="field-icon"><i class="fa fa-envelope"></i></span> </label>
                            </div>
                            <!-- end section -->

                            <div class="section colm colm6">
                                <label class="field prepend-icon">
                                    <input type="tel" name="telephone" id="telephone" class="gui-input" placeholder="Telephone">
                                    <span class="field-icon"><i class="fa fa-phone-square"></i></span> </label>
                            </div>
                            <!-- end section -->

                            <div class="section">
                                <label class="field prepend-icon">
                                    <input type="text" name="sendersubject" id="sendersubject" class="gui-input" placeholder="Enter subjec">
                                    <span class="field-icon"><i class="fa fa-lightbulb-o"></i></span> </label>
                            </div>
                            <!-- end section -->

                            <div class="section">
                                <label class="field prepend-icon">
                                    <textarea class="gui-textarea" id="sendermessage" name="sendermessage" placeholder="Enter message"></textarea>
                                    <span class="field-icon"><i class="fa fa-comments"></i></span> <span class="input-hint"> <strong>Hint:</strong> Please enter between 80 - 300 characters.</span> </label>
                            </div>
                            <!-- end section -->

                        <!--<div class="section">
                            <div class="smart-widget sm-left sml-120">
                                <label class="field">
                                    <input type="text" name="captcha" id="captcha" class="gui-input sfcode" maxlength="6" placeholder="Enter CAPTCHA">
                                </label>
                                <label class="button captcode">
                                    <img src="php/captcha/captcha.php?<?php echo time();?>" id="captchax" alt="captcha">
                                    <span class="refresh-captcha"><i class="fa fa-refresh"></i></span>
                                </label>
                            </div>
                        </div>-->

                            <div class="result"></div>
                            <!-- end .result  section -->

                        </div>
                        <!-- end .form-body section -->
                        <div class="form-footer">
                            <button type="submit" data-btntext-sending="Sending..." class="button btn-primary orange-2">Submit</button>
                            <button type="reset" class="button"> Cancel </button>
                        </div>
                        <!-- end .form-footer section -->
                    </form>
                </div>
                <!-- end .smart-forms section -->
            </div>


            <div class="col-md-4">
                <br/>
                <h4>Address Info</h4>
                No.28 - 63739 street lorem ipsum City, Country <br />
                Telephone: +1 1234-567-89000<br />
                FAX: +1 0123-4567-8900<br />
                <br />
                E-mail: <a href="mailto:email@example.com">email@example.com</a><br />
                Website: <a href="index.html">www.example.com</a>
                <div class="clearfix"></div>
                <br/><br/>
                <h4>Find the Address</h4>

                <div id="map" class="map">
                    <p>This will be replaced with the Google Map.</p>
                </div>

            </div>
        </div>
    </div>
</section>
<!--end section-->
<div class="clearfix"></div>
@endsection

