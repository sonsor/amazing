@extends('admin.layouts.default')

@section('title', 'Variation Types')

@section('content')

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            <span>Variation Types</span>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        @foreach ($columns as $col)
                            <th>{{ $col['name'] }}</th>
                        @endforeach
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $row)
                        <tr>
                            @foreach ($columns as $col)
                                <th>{{ ColumnValue::get($col['field'], $row) }}</th>
                            @endforeach
                            <td>
                                {{ Form::open(array('method' => 'delete')) }}
                                {{ Form::token() }}
                                <input type="hidden" name="id" value="{{ $row->id }}" />
                                <a class="btn btn-link" href="{{ route('admin.variation.type.edit', $row->id) }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button class="btn btn-link">
                                    <i class="fas fa-trash"></i>
                                </button>
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-12">
                        {{ $data->appends($_GET)->fragment(5)->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop