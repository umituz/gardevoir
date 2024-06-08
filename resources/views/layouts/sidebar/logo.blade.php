<div class="py-3 text-center">
    <a class="navbar-brand" href="{{ isset($route) && Route::has($route) ? route($route) : '#' }}">
        <img src="{{ asset('logo.png') }}" width="100" height="100">
    </a>
</div>

@push('styles')
    <style>
        .navbar-brand {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: -10px;
            border-radius: 50%;
            overflow: hidden;
            width: 100px;
            height: 100px;
            border: 2px solid #ddd;
            background-color: #fff;
        }

        .navbar-brand img {
            max-width: 100%;
            height: auto;
            border-radius: 50%;
        }
    </style>
@endpush
