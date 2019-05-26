@extends('admin.layouts.default')

@section('title', $data->id ? 'Edit Category : '. $data->name: 'Add New Category')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            <span>{{ $data->id ? 'Edit Category : '. $data->name: 'Add New Category' }}</span>
        </div>

        <div class="card-body">
            {{ Form::model($data, ['route' => ['admin.category.update', $data->id ?? 'new'], 'method' => 'put']) }}
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
                    {{ Form::label('slug', 'Parent') }}
                    {{ Form::select('parent_id', [null => 'Please Select'] + $categories) }}
                </div>

                {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
                {{ Form::button('Cancel', ['class' => 'btn btn-default']) }}

            {{ Form::close() }}
        </div>

    </div>
@stop