<div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo"></a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            @foreach ($sidebarItems as $sidebarItem)
                @if ($sidebarItem['isTitle'])
                    <li class="sidebar-title">{{ $sidebarItem['name'] }}</li>
                @else
                    <li class="sidebar-item 
                        {{ request()->is($sidebarItem['url']) || Str::startsWith(request()->path(), $sidebarItem['key']) ? 'active' : '' }} 
                        {{ count($sidebarItem['submenu']) > 0 ? 'has-sub' : '' }}">
                        
                        <a href="{{ $sidebarItem['url'] ?? '#' }}" class='sidebar-link'>
                            <i class="bi bi-{{ $sidebarItem['icon'] }}"></i>
                            <span>{{ $sidebarItem['name'] }}</span>
                        </a>

                        @if (count($sidebarItem['submenu']) > 0)
                            <ul class="submenu">
                                @foreach ($sidebarItem['submenu'] as $sub)
                                    <li class="submenu-item {{ request()->is($sub['url']) ? 'active' : '' }}">
                                        <a href="{{ $sub['url'] }}">{{ $sub['name'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
