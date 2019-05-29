@extends('admin.layouts.default')

@section('title', 'Variations')

@section('content')

    <!-- fonts table -->
    <div class="col-md-12">
        <div class="jumbotron row">

            <div class="title">
                <h1 class="pull-left">Variations</h1>
                <a class="btn btn-primary pull-right" href="{{ route('admin.icons.variations.create', $icon)  }}" role="button">add new variation</a>
            </div> <!-- / page title end -->

            <div class="tabs widget">
                <div class="tab-content">
                    <!-- All Icons  -->
                    <div id="all-icons" class="tab-pane active">

                        <table class="display table table-striped table-hover">
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
                                        <a class="btn btn-link" href="{{ route('admin.icons.variations.edit', [$row->parent_id, $row->id]) }}">
                                            <i class="glyphicon glyphicon-pencil"></i>
                                        </a>
                                        <a class="btn btn-link js-remove" href="{{ route('admin.icons.remove', $row->id) }}">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                {{ $data->appends($_GET)->fragment(5)->links() }}
            </div>
        </div>
    </div>

@stop