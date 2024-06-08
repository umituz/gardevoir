<div class="py-3 text-center">
    <a class="navbar-brand" href="{{ isset($route) && Route::has($route) ? route($route) : '#' }}">
        <img src="{{ asset('logo.png') }}" width="250">
    </a>
</div>

@push('styles')
    <style>
        .navbar-brand {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: -30px;
        }

        .navbar-brand img {
            max-width: 100%;
            height: auto;
        }
    </style>
@endpush
