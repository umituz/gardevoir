<div class="row">
    <div class="form-group col-md-4">
        <label for="country_id">{{ __('Country') }}</label>
        <select class="form-control" id="country_id" name="country_id">
            @if(isset($countries) && $countries->count() > 0)
                @foreach($countries as $country)
                    <option value="{{ $country->id }}" {{ $model?->country_id == $country->id ? 'selected' : '' }}>
                        {{ $country->name }}
                    </option>
                @endforeach
            @else
                <option value="">{{ __('No countries available') }}</option>
            @endif
        </select>
        @error('country_id')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="city_id">{{ __('City') }}</label>
        <select class="form-control" id="city_id" name="city_id">
            @if(isset($cities) && $cities->count() > 0)
                @foreach($cities as $city)
                    <option value="{{ $city->id }}" {{ $model?->city_id == $city->id ? 'selected' : '' }}>
                        {{ $city->name }}
                    </option>
                @endforeach
            @else
                <option value="">{{ __('No cities available') }}</option>
            @endif
        </select>
        @error('city_id')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="county_id">{{ __('County') }}</label>
        <select class="form-control" id="county_id" name="county_id">
            @if(isset($counties) && $counties->count() > 0)
                @foreach($counties as $county)
                    <option value="{{ $county->id }}" {{ $model?->county_id == $county->id ? 'selected' : '' }}>
                        {{ $county->name }}
                    </option>
                @endforeach
            @else
                <option value="">{{ __('No counties available') }}</option>
            @endif
        </select>
        @error('county_id')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
