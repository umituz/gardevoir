<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}"><i class="fas fa-home"></i> {{ __('Dashboard') }}</a>
        </li>
        @yield('breadcrumbs')
    </ol>
</nav>
