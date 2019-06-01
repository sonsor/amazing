@extends('admin.layouts.default')

@section('title', $data->id ? 'Edit Version : '. $data->name: 'Add New Version')

@section('content')

    <div class="col-md-12">
        <div class="jumbotron row">

            {{ Form::model($data, ['route' => ['admin.version.update', $data->id ?? 'new'], 'method' => 'put']) }}
            {{ Form::token() }}

            <div class="form-body">

                <!-- page title -->
                <div class="title">
                    <h1 class="pull-left">{{ $data->id ? 'Edit Version : '. $data->name: 'Add New Version' }}</h1>
                    <a class="btn btn-warning pull-right" href="{{ route('admin.version.list') }}">
                        <i class="icon-cross2"></i>
                        <spaN>Back</spaN>
                    </a>
                </div> <!-- / page title end -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {{ Form::label('version', 'Version *') }}
                            {{ Form::text('version', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {{ Form::label('changeLog', 'Change Log') }}
                            {{ Form::textarea('changeLog', null, ['class' => 'form-control']) }}
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