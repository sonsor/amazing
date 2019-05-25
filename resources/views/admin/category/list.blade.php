@extends('admin.layouts.default')

@section('title', 'Categories')

@section('content')

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            <span>Categories</span>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        @foreach ($columns as $col)
                        <th>{{ $col['name'] }}</th>
                        @endforeach
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $row)
                    <tr>
                        @foreach ($columns as $col)
                            <th>{{ ColumnValue::get($col['field'], $row) }}</th>
                        @endforeach
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{ $data->appends($_GET)->fragment(5)->links() }}
        </div>
    </div>
@stop