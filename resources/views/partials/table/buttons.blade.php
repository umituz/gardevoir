<div class="btn-group" role="group">
    @can('show-' . $permission)
        @if(Route::has($route . '.show'))
            <a href="{{ route($route . '.show', $id) }}" class="btn btn-info btn-sm">{{ __('Show') }}</a>
        @endif
    @endcan
    @can('edit-' . $permission)
        @if(Route::has($route . '.edit'))
            <a href="{{ route($route . '.edit', $id) }}" class="btn btn-primary btn-sm">{{ __('Edit') }}</a>
        @endif
    @endcan
    @if(!$trashed)
        @can('delete-' . $permission)
            @if(Route::has($route . '.destroy'))
                <form id="deleteForm-{{ $id }}" action="{{ route($route . '.destroy', $id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger btn-sm deleteBtn" data-id="{{ $id }}">{{ __('Archive') }}</button>
                </form>
            @endif
        @endcan
    @else
        @can('restore-' . $permission)
            @if(Route::has($route . '.restore'))
                <form id="restoreForm-{{ $id }}" action="{{ route($route . '.restore', $id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('PUT')
                    <button type="button" class="btn btn-success btn-sm restoreBtn" data-id="{{ $id }}">{{ __('Un Archive') }}</button>
                </form>
            @endif
        @endcan
        @can('force-delete-' . $permission)
            @if(Route::has($route . '.force-delete'))
                <form id="forceDeleteForm-{{ $id }}" action="{{ route($route . '.force-delete', $id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-warning btn-sm forceDeleteBtn" data-id="{{ $id }}">{{ __('Force Delete') }}</button>
                </form>
            @endif
        @endcan
    @endif
</div>