@extends('layouts.default')

@section('title', 'Download')

@section('content')
    <div class="feature-section">
        <div class="container">
            <h1 class="h1-sm ">DOWNLOAD AMAZING NEO</h1>
        </div>
    </div>
    <div class="section-padding">
        <div class="container">
            <!-- Form-->
            <div class="col-md-push-3 col-md-6">
                <div class="form form-lg signin-up download-form">
                    <div class="form-header center">
                        <h1>Download Amazing Neo</h1>
                        <p>Please provide the information below we send you download link by email !</p>
                    </div>

                    <?php echo Form::open(array(
                        'route' => 'download.save',
                        'method' => 'put',
                        'class' => 'login',
                        'id' => 'download-form'
                    )); ?>
                    <?php echo Form::token(); ?>

                        <div class="form-group">
                            @error('name')
                            <div class="userName"> Please enter your full name </div>
                            @enderror
                            <label for="username">Your Name *</label>
                            <input type="text" id="userName" name="name" value="{{ old('name') }}" />
                        </div>

                        <div class="form-group">
                            @error('name')
                            <div class="email"> Please enter your Email address </div>
                            @enderror
                            <label for="email">Email address *</label>
                            <input type="test" id="email" name="email" value="{{ old('email') }}" />
                        </div>

                        <div class="form-group agreement center">
                            @error('tac')
                            <div class="tac"> Please accept our terms and conditions.</div>
                            @enderror
                            <p>By click on submit button You must be agree with </p>
                            <input type="checkbox" name="tac" id="tac" />
                            <a class="blue" href="{{ url('/terms-and-conditions')  }}">Terms and Conditions</a>
                            <a class="blue" href="{{ url('/privacy-policy')  }}">Privacy Policy</a>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-default btn-center">Submit</button>
                        </div>

                    <?php echo Form::close(); ?>
                </div> <!-- /Form end -->
            </div> <!-- /Form-->
        </div>
    </div>
@stop