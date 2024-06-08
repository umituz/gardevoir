<!DOCTYPE html>
<html lang="tr">
<head>
    @include('gardevoir::layouts.head')
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
</head>
<body>
@include('gardevoir::layouts.header.index')

<div class="container-fluid">
    <div class="row">
        {{--        @yield('sidebar', View::make('gardevoir::layouts.sidebar.index'))--}}
        @section('sidebar')
            @include('layouts.sidebar.index')
        @show

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-3" style="margin-bottom: 60px;">
            @yield('content')
        </main>
    </div>
</div>

@include('gardevoir::layouts.footer')
@include('gardevoir::layouts.script')

</body>
</html>
