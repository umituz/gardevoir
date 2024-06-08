<div class="form-group">
    <label for="country_id">{{ __('Country') }}</label>
    <select class="form-control" id="country_id" name="country_id">
        <option value="">{{ __('Select Country') }}</option>
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

<div class="form-group">
    <label for="city_id">{{ __('City') }}</label>
    <select class="form-control" id="city_id" name="city_id" {{ !isset($model) || !$model->city_id ? 'disabled' : '' }}>
        <option value="">{{ __('Select City') }}</option>
        @if(isset($model) && $model->city_id)
            @foreach($cities as $city)
                <option value="{{ $city->id }}" {{ $model->city_id == $city->id ? 'selected' : '' }}>
                    {{ $city->name }}
                </option>
            @endforeach
        @endif
    </select>
    @error('city_id')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="county_id">{{ __('County') }}</label>
    <select class="form-control" id="county_id" name="county_id" {{ !isset($model) || !$model->county_id ? 'disabled' : '' }}>
        <option value="">{{ __('Select County') }}</option>
        @if(isset($model) && $model->county_id)
            @foreach($counties as $county)
                <option value="{{ $county->id }}" {{ $model->county_id == $county->id ? 'selected' : '' }}>
                    {{ $county->name }}
                </option>
            @endforeach
        @endif
    </select>
    @error('county_id')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const countrySelect = document.getElementById('country_id');
        const citySelect = document.getElementById('city_id');
        const countySelect = document.getElementById('county_id');

        countrySelect.addEventListener('change', function() {
            const countryId = this.value;
            citySelect.disabled = true;
            countySelect.disabled = true;
            citySelect.innerHTML = '<option value="">{{ __('Select City') }}</option>';
            countySelect.innerHTML = '<option value="">{{ __('Select County') }}</option>';

            if (countryId) {
                fetch(`/api/countries/${countryId}/cities`)
                    .then(response => response.json())
                    .then(data => {
                        citySelect.innerHTML = '<option value="">{{ __('Select City') }}</option>';
                        data.forEach(city => {
                            const option = document.createElement('option');
                            option.value = city.id;
                            option.textContent = city.name;
                            citySelect.appendChild(option);
                        });
                        citySelect.disabled = false;
                    })
                    .catch(error => console.error('Error fetching cities:', error));
            }
        });

        citySelect.addEventListener('change', function() {
            const cityId = this.value;
            countySelect.disabled = true;
            countySelect.innerHTML = '<option value="">{{ __('Select County') }}</option>';

            if (cityId) {
                fetch(`/api/cities/${cityId}/counties`)
                    .then(response => response.json())
                    .then(data => {
                        data.forEach(county => {
                            const option = document.createElement('option');
                            option.value = county.id;
                            option.textContent = county.name;
                            countySelect.appendChild(option);
                        });
                        countySelect.disabled = false;
                    })
                    .catch(error => console.error('Error fetching counties:', error));
            }
        });
    });
</script>
