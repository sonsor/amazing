@extends('layouts.default')

@section('title', 'Frequently Ask Questions')

@section('content')
    <div class="feature-section">
        <div class="container">
            <h1 class="h1-sm ">Frequently Asked Question</h1>
        </div>
    </div> <!-- /title -->
    <!-- faq -->
    <div class="request">
        <div class="container section-padding">

            <!-- tittle area -->
            <div class="col-md-6">
                <div class="faq">
                    <h1 class="text-disable">FAQ</h1>
                    <p class="blue">WE HOPE OUR FAQ IS HELPFUL FOR YOU</p>
                    <h3 class="h3 black">How to Start with Amazing Neo</h3>
                </div>
            </div> <!-- /tittle area -->


            <!-- questions -->
            <div class="col-md-6">
                <div class="panel-group" id="accordion1">

                    <div class="panel panel-default">
                        <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3" data-target="#collapseTwo1">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    Can I use Amazing Neo for commercial projects?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Feel free to use all font icons for any commercial and personal use. For more information, please see the
                                    <a class="blue" href="/license/">license agreement</a> and
                                    <a class="blue" href="/terms-and-conditions/">terms &amp; conditions</a>.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3" data-target="#collapseThree1">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    How can I download Amazing Neo?
                                </a>
                            </h4>

                        </div>
                        <div id="collapseThree1" class="panel-collapse collapse">
                            <div class="panel-body">
                                You can download Icon fonts and CSS file from home page in shape of zip file
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3" data-target="#collapseFour1">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    can I use Amazing Neo in mobile apps?
                                </a>
                            </h4>

                        </div>
                        <div id="collapseFour1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Of course you can use Amazing Neo in mobile apps without any extra effects, We also created  examples for
                                    <a class="blue" href="/ios/">iOS</a> and
                                    <a class="blue" href="/android/"> Android</a>
                                    devices, see examples or download demo project </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3" data-target="#collapseFour1">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    Do you offer customize icon or font ?
                                </a>
                            </h4>

                        </div>
                        <div id="collapseFour1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Feel free to
                                    <a class="blue" href="/contact/">contact</a>
                                    with us if you have any query ! </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3" data-target="#collapseFour1">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    Do I need to pay for download?
                                </a>
                            </h4>

                        </div>
                        <div id="collapseFour1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Amazing Neo is an open source project. you are able to use it free of cost.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>  <!-- /questions -->

        </div>
    </div> <!-- /faq -->
@stop