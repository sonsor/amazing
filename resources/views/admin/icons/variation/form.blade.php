@extends('admin.layouts.default')

@section('title', $data->id ? 'Edit Variation : ' . $data->name: 'Add New Variation')

@section('content')

    <div class="col-md-12">
        <div class="jumbotron row">

            {{ Form::model($data, ['route' => ['admin.icons.variations.update',  $icon, $data->id ?? 'new'], 'method' => 'put', 'id' => 'formupdateid',  'enctype' => 'multipart/form-data']) }}
            <!-- upload files -->
            <!-- {{ Form::model($data, ['route' => ['admin.icons.variations.update',  $icon, $data->id ?? 'new'], 'method' => 'put']) }} -->
            {{ Form::token() }}
            {{ Form::hidden('description[id]') }}
            {{ Form::hidden('price', 0) }}
            {{ Form::hidden('name') }}
            {{ Form::hidden('slug') }}

            <div class="form-body">

                <!-- page title -->
                <div class="title">
                    <h1 class="pull-left">{{ $data->id ? 'Edit Variation : '. $data->name: 'Add New Variation' }}</h1>
                    <a class="btn btn-warning pull-right" href="{{ route('admin.icons.variations.list', $icon) }}">
                        <i class="icon-cross2"></i>
                        <spaN>Back</spaN>
                    </a>
                </div> <!-- / page title end -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('classes', 'Classes *') }}
                            {{ Form::text('classes', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('paid', 'Paid') }}
                            {{ Form::checkbox('paid', false, ['class' => 'form-control']) }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('ios', 'iOS Code *') }}
                            {{ Form::text('ios', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('android', 'Android Code *') }}
                            {{ Form::text('android', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('version_id', 'Version *') }}
                            {{ Form::select('version_id', [null => 'Please Select'] + $versions, null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('variation_id', 'Variation Type *') }}
                            {{ Form::select('variation_id', [null => 'Please Select'] + $variationTypes, null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('categories', 'Categories') }}
                            {!! Form::multiselect('categories', $categories, old('categories', $data->categories))  !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('tags', 'Tags') }}
                            {!! Form::multiselect('tags', $tags, old('tags', $data->tags)) !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {{ FoRm::label('shortDescription', 'Short Description') }}
                            {{ Form::textarea('description[shortDescription]', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ FoRm::label('smallDescription1', 'Small Description 1') }}
                            {{ Form::text('description[smallDescription1]', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ FoRm::label('smallDescription2', 'Small Description 2') }}
                            {{ Form::text('description[smallDescription2]', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ FoRm::label('mediumDescription1', 'Medium Description 1') }}
                            {{ Form::text('description[mediumDescription1]', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ FoRm::label('mediumDescription2', 'Medium Description 2') }}
                            {{ Form::text('description[mediumDescription2]', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ FoRm::label('mediumDescription3', 'Medium Description 3') }}
                            {{ Form::text('description[mediumDescription3]', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ FoRm::label('mediumDescription4', 'Medium Description 4') }}
                            {{ Form::text('description[mediumDescription4]', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ FoRm::label('description1', 'Description 1') }}
                            {{ Form::textarea('description[description1]', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ FoRm::label('description2', 'Description 2') }}
                            {{ Form::textarea('description[description2]', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                </div>
                <!-- File Upload -->
                <!-- <div class="row">
                <div class="add-an-icon clearfix">
                        <div class="col-md-12">
                            <label class="m-t-20 m-b-20">Upload all type of files ( .ai, .eps, .psd, .svg, .png, .sketch ) with same name.</label>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Upload .sketch File &amp; Price</label>
                                <div id="sketchFile" class="dz-clickable" style="height:200px"></div>
                                <div class="form-group">
                                    <input type="text" id="font-price" class="form-control" placeholder="Icon Price in USD ($0.00)" name="price">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->


            </div>

            <div class="form-actions text-center">
                {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
                <a href="{{ URL::previous() }}" class="btn btn-warning">
                    <i class="icon-cross2"></i>
                    <span>Cancel</span>
                </a>
            </div>

            {{ Form::close() }}

        </div>
    </div>

@stop