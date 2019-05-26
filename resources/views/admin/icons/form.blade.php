@extends('admin.layouts.default')

@section('title', $data->id ? 'Edit Icon : '. $data->name: 'Add New Icon')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            <span>{{ $data->id ? 'Edit Icon : '. $data->name: 'Add New Icon' }}</span>
        </div>

        <div class="card-body">
            {{ Form::model($data, ['route' => ['admin.icons.update', $data->id ?? 'new'], 'method' => 'put']) }}
            {{ Form::token() }}
            {{ Form::hidden('description[id]') }}
            {{ Form::hidden('price', 0) }}
            {{ Form::hidden('variation_id', $variationType) }}

            <div class="form-group">
                {{ Form::label('name', 'Name *') }}
                {{ Form::text('name') }}
            </div>

            <div class="form-group">
                {{ Form::label('slug', 'Slug *') }}
                {{ Form::text('slug') }}
            </div>

            <div class="form-group">
                {{ Form::label('classes', 'Classes *') }}
                {{ Form::text('classes') }}
            </div>

            <div class="form-group">
                {{ Form::label('ios', 'iOS Code *') }}
                {{ Form::text('ios') }}
            </div>

            <div class="form-group">
                {{ Form::label('android', 'Android Code *') }}
                {{ Form::text('android') }}
            </div>

            <div class="form-group">
                {{ Form::label('paid', 'Paid') }}
                {{ Form::checkbox('paid') }}
            </div>

            <div class="form-group">
                {{ Form::label('version_id', 'Version *') }}
                {{ Form::select('version_id', [null => 'Please Select'] + $versions) }}
            </div>

            <div class="form-group">
                {{ Form::label('categories', 'Categories') }}
                {!! Form::multiselect('categories', $categories, old('categories', $data->categories))  !!}
            </div>

            <div class="form-group">
                {{ Form::label('tags', 'Tags') }}
                {!! Form::multiselect('tags', $tags, old('tags', $data->tags)) !!}
            </div>

            <div class="form-group">
                {{ FoRm::label('shortDescription', 'Short Description') }}
                {{ Form::textarea('description[shortDescription]') }}
            </div>

            <div class="form-group">
                {{ FoRm::label('smallDescription1', 'Small Description 1') }}
                {{ Form::text('description[smallDescription1]') }}
            </div>

            <div class="form-group">
                {{ FoRm::label('smallDescription2', 'Small Description 2') }}
                {{ Form::text('description[smallDescription2]') }}
            </div>

            <div class="form-group">
                {{ FoRm::label('mediumDescription1', 'Medium Description 1') }}
                {{ Form::text('description[mediumDescription1]') }}
            </div>

            <div class="form-group">
                {{ FoRm::label('mediumDescription2', 'Medium Description 2') }}
                {{ Form::text('description[mediumDescription2]') }}
            </div>

            <div class="form-group">
                {{ FoRm::label('mediumDescription3', 'Medium Description 3') }}
                {{ Form::text('description[mediumDescription3]') }}
            </div>

            <div class="form-group">
                {{ FoRm::label('mediumDescription4', 'Medium Description 4') }}
                {{ Form::text('description[mediumDescription4]') }}
            </div>

            <div class="form-group">
                {{ FoRm::label('description1', 'Description 1') }}
                {{ Form::textarea('description[description1]') }}
            </div>

            <div class="form-group">
                {{ FoRm::label('description2', 'Description 2') }}
                {{ Form::textarea('description[description2]') }}
            </div>


            {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
            <a href="{{ URL::previous() }}" class="btn btn-default">Cancel</a>

            {{ Form::close() }}
        </div>

    </div>
@stop