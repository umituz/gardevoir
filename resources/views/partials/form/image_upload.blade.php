@if(isset($model) && method_exists($model, 'hasMedia') && $model->hasMedia($collectionName))
    <div class="form-group">
        <label>{{ __('Current Image') }}</label><br>
        <img src="{{ $model->getFirstMediaUrl($collectionName) }}" alt="Current Image" style="max-width: 200px;">
    </div>
@endif

<div class="form-group">
    <label for="{{ $collectionName }}">{{ __('Image') }}</label>
    <input type="file" onchange="previewImage(this, 'imagePreview')" accept="image/jpeg, image/png, image/jpg"
           class="form-control-file" id="{{ $collectionName }}" name="{{ $collectionName }}">
    <small class="form-text text-muted">{{ __('Upload JPG, JPEG, or PNG icon files only.') }}</small>
    <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 200px; max-height: 200px;">
    @error($collectionName)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

@include('gardevoir::partials.form.file_uploader')

<script>
    function previewImage(input, previewId) {
        var preview = document.getElementById(previewId);
        var file = input.files[0];
        var reader = new FileReader();

        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        }

        if (file) {
            reader.readAsDataURL(file);
        }
    }
</script>
