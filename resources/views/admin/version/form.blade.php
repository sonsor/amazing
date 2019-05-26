@extends('admin.layouts.default')

@section('title', $data->id ? 'Edit Version : '. $data->name: 'Add New Version')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            <span>{{ $data->id ? 'Edit Version : '. $data->name: 'Add New Version' }}</span>
        </div>

        <div class="card-body">
            {{ Form::model($data, ['route' => ['admin.version.update', $data->id ?? 'new'], 'method' => 'put']) }}
            {{ Form::token() }}

            <div class="form-group">
                {{ Form::label('version', 'Version *') }}
                {{ Form::text('version') }}
            </div>

            <div class="form-group">
                {{ Form::label('changeLog', 'Change Log') }}
                {{ Form::textarea('changeLog') }}
            </div>


            {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
            <a href="{{ URL::previous() }}" class="btn btn-default">Cancel</a>

            {{ Form::close() }}
        </div>

    </div>
@stop