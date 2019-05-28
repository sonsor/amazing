<ul>
    @foreach ($nav as $link)
    <li class="{{ count($link['children']) > 0 ? 'dropdown': ''  }}">
        <a
                href="{{ count($link['children']) > 0 ? '#': route($link['route']) }}"
                data-toggle="tooltip"
                data-placement="right"
                title="{{ $link['label'] }}"
        >
            <i class="fas fa-fw fa-{{ $link['icon'] }}"></i>
            <span>{{ $link['label'] }}</span>
        </a>

        @if (count($link['children']) > 0)
            <ul class="child-menu">
                @foreach ($link['children'] as $child)
                    <li>
                        <a href="{{ route($child['route']) }}">{{ $child['label'] }}</a>
                    </li>
                @endforeach
            </ul>
        @endif
    </li>
    @endforeach
</ul>
