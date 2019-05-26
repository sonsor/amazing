@extends('admin.layouts.default')

@section('title', 'Versions')

@section('content')

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            <span>Versions</span>
            <a href="{{ route('admin.version.create')  }}" clas="btn btn-primary">Add New</a>
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
                                <a class="btn btn-link" href="{{ route('admin.version.edit', $row->id) }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                                @if ($row->icons->count() === 0)
                                    <a class="btn btn-link js-remove" href="{{ route('admin.version.remove', $row->id) }}">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                @endif
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