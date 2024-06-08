<div class="mt-4">
    @if(config('app.available_locales') && count(config('app.available_locales')) > 0)
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            @foreach(config('app.available_locales') as $locale)
                <li class="nav-item" role="presentation">
                    <button class="nav-link @if ($loop->first) active @endif" id="tab-{{ $name }}-{{ $locale }}-tab" data-toggle="tab" data-target="#tab-{{ $name }}-{{ $locale }}" type="button" role="tab" aria-controls="tab-{{ $name }}-{{ $locale }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                        {{ strtoupper($locale) }}
                    </button>
                </li>
            @endforeach
        </ul>
        <div class="tab-content" id="myTabContent">
            @foreach(config('app.available_locales') as $locale)
                <div class="tab-pane fade @if ($loop->first) show active @endif" id="tab-{{ $name }}-{{ $locale }}" role="tabpanel" aria-labelledby="tab-{{ $name }}-{{ $locale }}-tab">
                    <div class="mb-3">
                        <label for="{{ $name }}_{{ $locale }}">{{ __(ucfirst($name)) }} ({{ strtoupper($locale) }})</label>
                        <input type="text" name="{{ $name }}_{{ $locale }}" id="{{ $name }}_{{ $locale }}"
                               value="{{ old($name . '_' . $locale, $model?->getTranslation($name, $locale)) }}"
                               class="form-control" autofocus/>
                        @error($name . '_' . $locale)
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-danger">{{ __('No available locales found.') }}</p>
    @endif
</div>
