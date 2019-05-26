@extends('admin.layouts.default')

@section('title', $data->id ? 'Edit Variation Type : '. $data->name: 'Add New Variation Type')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            <span>{{ $data->id ? 'Edit Variation Type : '. $data->name: 'Add New Variation Type' }}</span>
        </div>

        <div class="card-body">
            {{ Form::model($data, ['route' => ['admin.variation.type.update', $data->id ?? 'new'], 'method' => 'put']) }}
            {{ Form::token() }}

            <div class="form-group">
                {{ Form::label('name', 'Name *') }}
                {{ Form::text('name') }}
            </div>

            <div class="form-group">
                {{ Form::label('slug', 'Slug *') }}
                {{ Form::text('slug') }}
            </div>

            <div class="form-group">
                {{ Form::label('classes', 'Class *') }}
                {{ Form::text('classes') }}
            </div>

            {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
            <a href="{{ URL::previous() }}" class="btn btn-default">Cancel</a>

            {{ Form::close() }}
        </div>

    </div>
@stop