@extends('admin.layouts.default')

@section('title', $data->id ? 'Edit Tag : '. $data->name: 'Add New Tag')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            <span>{{ $data->id ? 'Edit Tag : '. $data->name: 'Add New Tag' }}</span>
        </div>

        <div class="card-body">
            {{ Form::model($data, ['route' => ['admin.tag.update', $data->id ?? 'new'], 'method' => 'put']) }}
            {{ Form::token() }}

            <div class="form-group">
                {{ Form::label('name', 'Name *') }}
                {{ Form::text('name') }}
            </div>

            <div class="form-group">
                {{ Form::label('slug', 'Slug *') }}
                {{ Form::text('slug') }}
            </div>

            {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
            {{ Form::button('Cancel', ['class' => 'btn btn-default']) }}

            {{ Form::close() }}
        </div>

    </div>
@stop