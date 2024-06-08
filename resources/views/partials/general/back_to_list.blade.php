<div class="mb-4"></div>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>{{ $title }}</h2>
    @can('list-' . $permission)
        @if(Route::has($route . '.index'))
            <a href="{{ route($route . '.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> {{ __('Back To List') }}
            </a>
        @endif
    @endcan
</div>
