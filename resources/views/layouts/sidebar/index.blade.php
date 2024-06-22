<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        @include('trinity::layouts.sidebar.logo', ['route' => 'dashboard'])
        <div class="list-group">
            @yield('sidebar-items')
        </div>
    </div>
</nav>
