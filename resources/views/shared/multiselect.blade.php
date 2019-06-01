<div class="well" {{ $attributes }}>
    <ul class="list-group checked-list-box">
        @foreach ($options as $k => $option)
            <li class="list-group-item {{ in_array($k, $value) ? 'active': '' }}">
                <span class="state-icon glyphicon glyphicon-{{ in_array($k, $value) ? 'check': 'unchecked' }}"></span>
                {{ Form::checkbox($name. '[]', $k, in_array($k, $value), ['id' => $name . $k, 'class' => 'hidden']) }}
                {{ Form::label($name . $k, $option) }}
            </li>
        @endforeach
    </ul>
</div>