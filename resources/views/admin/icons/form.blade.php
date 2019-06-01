@extends('admin.layouts.default')

@section('title', $data->id ? 'Edit Icon : '. $data->name: 'Add New Icon')

@section('content')
    <div class="col-md-12">
        <div class="jumbotron row">

            {{ Form::model($data, ['route' => ['admin.icons.update', $data->id ?? 'new'], 'method' => 'put']) }}
            {{ Form::token() }}
            {{ Form::hidden('description[id]') }}
            {{ Form::hidden('price', 0) }}
            {{ Form::hidden('variation_id', $variationType) }}

            <div class="form-body">

                <!-- page title -->
                <div class="title">
                    <h1 class="pull-left">Edit Icon Info</h1>
                    <a class="btn btn-warning pull-right" href="{{ route('admin.icons.list') }}">
                        <i class="icon-cross2"></i>
                        <spaN>Back</spaN>
                    </a>
                </div> <!-- / page title end -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('name', 'Name *') }}
                            {{ Form::text('name', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('slug', 'Slug *') }}
                            {{ Form::text('slug', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('classes', 'Classes *') }}
                            {{ Form::text('classes', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('version_id', 'Version *') }}
                            {{ Form::select('version_id', [null => 'Please Select'] + $versions, null, ['class' => 'form-control']) }}
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
                            {{ Form::label('shortDescription', 'Short Description') }}
                            {{ Form::textarea('description[shortDescription]', null, ['class' => 'form-control']) }}
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('smallDescription1', 'Small Description 1') }}
                            {{ Form::text('description[smallDescription1]', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('smallDescription2', 'Small Description 2') }}
                            {{ Form::text('description[smallDescription2]', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('smallDescription3', 'Small Description 3') }}
                            {{ Form::text('description[smallDescription3]', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('smallDescription4', 'Small Description 4') }}
                            {{ Form::text('description[smallDescription4]', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('mediumDescription1', 'Medium Description 1') }}
                            {{ Form::text('description[mediumDescription1]', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('mediumDescription2', 'Medium Description 2') }}
                            {{ Form::text('description[mediumDescription2]', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('mediumDescription3', 'Medium Description 3') }}
                            {{ Form::text('description[mediumDescription3]', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('mediumDescription4', 'Medium Description 4') }}
                            {{ Form::text('description[mediumDescription4]', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('description1', 'Description 1') }}
                            {{ Form::textarea('description[description1]', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('description2', 'Description 2') }}
                            {{ Form::textarea('description[description2]', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                </div>

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