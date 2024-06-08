<h2>{{ $title }}</h2>
<div class="d-flex justify-content-between mb-4">
    <h4></h4>
    <div>
        @can('create-' . $permission)
            @if(Route::has($route . '.create'))
                <a href="{{ route($route . '.create') }}" class="btn btn-success mr-2">{{ __('Add') }}</a>
            @endif
        @endcan
        @can('import-' . $permission)
            @if(Route::has($route . '.export'))
                <a href="{{ route($route . '.export') }}" class="btn btn-info mr-2">{{ __('Export PDF') }}</a>
            @endif
        @endcan
        @can('import-' . $permission)
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#importModal">{{ __('Import CSV') }}</button>
        @endcan
    </div>
</div>

<!-- Import Modal -->
<div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="importModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="importModalLabel">{{ __('Import CSV') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @if(Route::has('languages.import'))
                <form action="{{ route('languages.import') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="file" name="file" class="form-control-file" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('Import CSV') }}</button>
                    </div>
                </form>
            @else
                <div class="modal-body">
                    <p class="text-danger">{{ __('Import route not found.') }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
                </div>
            @endif
        </div>
    </div>
</div>
