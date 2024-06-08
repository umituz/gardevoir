<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAccount" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="{{ Auth::user()?->getFirstMediaUrl('avatar') ?: asset('avatar.png') }}" alt="Avatar" class="avatar rounded-circle" width="30" height="30">
        {{ Auth::user()?->full_name }}
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownAccount">
        @auth
            @if(Route::has('users.edit'))
                <a class="dropdown-item" href="{{ route('users.edit', auth()->id()) }}"><i class="fas fa-user"></i> {{ __('Profile') }}</a>
            @endif
            @if(Route::has('user_settings.index'))
                <a class="dropdown-item" href="{{ route('user_settings.index', auth()->id()) }}"><i class="fas fa-cog"></i> {{ __('Settings') }}</a>
            @endif
        @endauth
        <div class="dropdown-divider"></div>
        @if(Route::has('logout'))
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @endif
    </div>
</li>
