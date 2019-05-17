@extends('layouts.default')

@section('title', 'Contact Us')

@section('content')
<div class="feature-section">
    <div class="container">
        <h1 class="h1-sm ">Contact Us</h1>
    </div>
</div>
<div class="section-padding">
    <div class="container">
        <div class="contact">

            <div class="center">
                <h1 class="an-3x">Have a questions ?</h1>
                <p>If you have any query or you need further information, please do not hesitate to contact us.</p>
                <br><br>
            </div>

            <div class="col-md-1"></div>

            <div class="col-md-10">
                <form class="form contactForm" id="contact-form">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="contactUsername">Please Enter Your Name</div>
                            <label for="contactUsername">Your Name</label>
                            <input type="text" id="contactUsername" name="contactUsername" required="required">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="contactEmail"> Please Enter Your Email Address</div>
                            <label for="contactEmail">Email Address</label>
                            <input type="text" id="contactEmail" name="contactEmail" required="required">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="ContactBusinessName"> Please Enter Business Name</div>
                            <label for="ContactBusinessName">Mobile / Lanline</label>
                            <input type="text" id="ContactBusinessName" name="ContactBusinessName" required="required">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="contactPhoneNumber"> Please Enter Mobile / Lanline Number</div>
                            <label for="contactPhoneNumber">Mobile / Lanline</label>
                            <input type="Number" id="contactPhoneNumber" name="contactPhoneNumber" required="required">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="contactDescription"> Please Enter your query</div>
                            <label for="contactDescription">Description</label>
                            <textarea type="text" id="contactDescription" cols="20" rows="5" name="contactDescription" required="required"></textarea>
                        </div>
                    </div>

                    <div class="col-md-offset-4">
                        <div class="form-group col-md-6">
                            <button class="btn btn-default btn-center">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop