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
                <?php echo Form::open(array(
                    'route' => 'contact.save',
                    'method' => 'put',
                    'class' => 'form contactForm',
                    'id' => 'contact-form'
                )); ?>
                <?php echo Form::token(); ?>

                    <div class="alert alert-success hidden" id="contact-message">
                        Submit Successfully.
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="contactFirstName hidden">Please Enter Your First Name</div>
                            <label for="contactFirstName">First Name *</label>
                            <input type="text" id="contactFirstName" name="firstName" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="contactLastName hidden">Please Enter Your Last Name</div>
                            <label for="contactLastName">First Name *</label>
                            <input type="text" id="contactLastName" name="surname" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="contactEmail hidden"> Please Enter Your Email Address</div>
                            <label for="contactEmail">Email Address *</label>
                            <input type="text" id="contactEmail" name="email" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="contactPhoneNumber">Mobile / Lanline</label>
                            <input type="text" id="contactPhoneNumber" name="phoneNo" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="contactDescription hidden"> Please Enter your query</div>
                            <label for="contactDescription">Messaeg *</label>
                            <textarea id="contactDescription" cols="20" rows="5" name="message"></textarea>
                        </div>
                    </div>

                    <div class="col-md-offset-4">
                        <div class="form-group col-md-6">
                            <button type="submit" class="btn btn-default btn-center">Submit</button>
                        </div>
                    </div>
                <?php echo Form::close(); ?>
            </div>
        </div>
    </div>
</div>
@stop