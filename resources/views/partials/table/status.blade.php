<td>
    @if(isset($model->status))
        @switch($model->status)
            @case(1)
                <span class="badge badge-success">{{ __('Active') }}</span>
                @break

            @case(0)
                <span class="badge badge-danger">{{ __('Inactive') }}</span>
                @break

            @default
                <span class="badge badge-secondary">{{ __('Unknown') }}</span>
        @endswitch
    @else
        <span class="badge badge-warning">{{ __('No status') }}</span>
    @endif
</td>
