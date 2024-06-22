<!DOCTYPE html>
<html lang="tr">
<head>
    @include('trinity::layouts.head')
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
</head>
<body>
@include('trinity::layouts.header.index')

<div class="container-fluid">
    <div class="row">
        {{--        @yield('sidebar', View::make('trinity::layouts.sidebar.index'))--}}
        @section('sidebar')
            @include('layouts.sidebar.index')
        @show

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-3" style="margin-bottom: 60px;">
            @yield('content')
        </main>
    </div>
</div>

@include('trinity::layouts.footer')
@include('trinity::layouts.script')

</body>
</html>
