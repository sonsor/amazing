<ul class="sidebar navbar-nav">
    @foreach ($nav as $link)
    <li class="nav-item {{ count($link['children']) > 0 ? 'dropdown': '' }}">
        <a
                class="nav-link {{ count($link['children']) > 0 ? 'dropdown-toggle': '' }}"
                href="{{ route($link['route']) }}"
                id="{{ $link['name'] }}"
                role="button"
        >
            <i class="fas fa-fw fa-{{ $link['icon'] }}"></i>
            <span>{{ $link['label'] }}</span>
        </a>
        @if (count($link['children']) > 0)
            <div class="dropdown-menu" aria-labelledby="{{ $link['name']  }}">
                @foreach ($link['children'] as $child)
                    <a class="dropdown-item" href="{{ route($child['route']) }}">{{ $child['label'] }}</a>
                @endforeach
            </div>
        @endif
    </li>
    @endforeach
</ul>