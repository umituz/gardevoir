<div class="form-group">
    <label for="status">{{ __('Status') }}</label>
    <select class="form-control @error('status') is-invalid @enderror" id="status" name="status" required>
        <option value="1" {{ old('status', isset($item) ? $item->status : '') == 1 ? 'selected' : '' }}>{{ __('Active') }}</option>
        <option value="0" {{ old('status', isset($item) ? $item->status : '') == 0 ? 'selected' : '' }}>{{ __('Passive') }}</option>
    </select>
    @error('status')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
