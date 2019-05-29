<ul>
    @foreach ($nav as $link)
        @if (count($link['children']) > 0)
        <li class="dropdown" data-toggle="tooltip" data-placement="right" title="Icons">
            <a
                    href="#"
                    data-toggle="dropdown"
                    title="{{ $link['label'] }}"
                    role="button"
            >
                <i class="fa fa-{{ $link['icon'] }}"></i>
                <span>{{ $link['label'] }}</span>
            </a>

            <ul class="child-menu">
                @foreach ($link['children'] as $child)
                    <li>
                        <a href="{{ route($child['route']) }}">{{ $child['label'] }}</a>
                    </li>
                @endforeach
            </ul>
        </li>
        @endif

        @if (count($link['children']) === 0)
            <li>
                <a href="{{ route($link['route'])  }}" data-toggle="tooltip" data-placement="right" title="{{ $link['label'] }}">
                    <i class="fa fa-{{ $link['icon'] }}"></i>
                    <span>{{ $link['label'] }}</span>
                </a>
            </li>
            @endif

    @endforeach
</ul>
