<div {{ $attributes }}>
    @foreach ($options as $k => $option)
        {{ Form::checkbox($name, $k, in_array($k, $value), ['id' => $name . $k]) }}
        {{ Form::label($name . $k, $option) }}
    @endforeach
</div>