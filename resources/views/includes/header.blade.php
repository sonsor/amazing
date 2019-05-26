<!-- navbar -->
<nav class="navbar navbar-default activpro-scroll-up">
    <div class="col-md-12">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo" href="{{ route('home') }}"><!-- <img src="images/logo.png" class="img-responsive" alt=""> --></a>
        </div>

        @include('includes.nav')

    </div>
</nav> <!-- /navbar -->
<!-- search popup -->
<div class="modal fade-scale" id="modal-search">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div id="search">
                    <?php echo Form::open(array(
                        'route' => 'icon.seach',
                        'method' => 'get',
                    )); ?>
                        <input type="text" placeholder="Search Icon or font name..." value="" name="search" id="term">
                        <button class="btn btn-primary btn-xl" type="submit"><span class="glyphicon glyphicon-search"></span> Search</button>
                    <?php echo Form::close(); ?>
                </div>
            </div>
        </div>
    </div>
</div> <!-- /search popup -->