<!DOCTYPE html>
<html lang="en">
<head>
    @include('gardevoir::layouts.head')
</head>
<body>
@include('gardevoir::layouts.header.index')

<div class="container-fluid">
    <div class="row">
        @include('gardevoir::layouts.sidebar.index')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-3" style="margin-bottom: 60px;">
            @yield('content')
        </main>

    </div>
</div>

@include('gardevoir::layouts.footer')
@include('gardevoir::layouts.script')

</body>
</html>
