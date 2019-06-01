@extends('admin.layouts.default')

@section('title', $data->id ? 'Edit Variation Type : '. $data->name: 'Add New Variation Type')

@section('content')

    <div class="col-md-12">
        <div class="jumbotron row">

            {{ Form::model($data, ['route' => ['admin.variation.type.update', $data->id ?? 'new'], 'method' => 'put']) }}
            {{ Form::token() }}

            <div class="form-body">

                <!-- page title -->
                <div class="title">
                    <h1 class="pull-left">{{ $data->id ? 'Edit Variation Type : '. $data->name: 'Add New Variation Type' }}</h1>
                    <a class="btn btn-warning pull-right" href="{{ route('admin.variation.type.list') }}">
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
                            {{ Form::label('classes', 'Class *') }}
                            {{ Form::text('classes', null, ['class' => 'form-control']) }}
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