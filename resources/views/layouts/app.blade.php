<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
@include('layouts.header.index')

<div class="container-fluid">
    <div class="row">
        @include('admin.layouts.sidebar.index')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-3" style="margin-bottom: 60px;">
            @yield('content')
        </main>

    </div>
</div>

@include('layouts.footer')
@include('layouts.script')

</body>
</html>
