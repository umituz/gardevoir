<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLanguage" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-globe"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownLanguage">
        @if(Route::has('change.locale'))
            <form action="{{ route('change.locale') }}" method="POST">
                @csrf
                <button type="submit" class="dropdown-item" name="locale" value="en"><i class="fas fa-globe"></i> English</button>
                <button type="submit" class="dropdown-item" name="locale" value="tr"><i class="fas fa-globe"></i> Türkçe</button>
                <button type="submit" class="dropdown-item" name="locale" value="ar"><i class="fas fa-globe"></i> العربية</button>
            </form>
        @else
            <p class="dropdown-item">{{ __('Language change not available') }}</p>
        @endif
    </div>
</li>
