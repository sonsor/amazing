<div class="well" {{ $attributes }}>
    <ul class="list-group checked-list-box">
        @foreach ($options as $k => $option)
            <li class="list-group-item">
                <span class="state-icon glyphicon glyphicon-unchecked"></span>
                {{ Form::checkbox($name, $k, in_array($k, $value), ['id' => $name . $k]) }}
                {{ Form::label($name . $k, $option, null, ['class' => 'hidden']) }}
            </li>
        @endforeach
    </ul>
</div>