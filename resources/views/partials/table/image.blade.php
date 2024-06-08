@if(isset($model) && method_exists($model, 'hasMedia') && $model->hasMedia($collectionName))
    <img src="{{ $model->getFirstMediaUrl($collectionName) }}" alt="Blog Image" style="max-width: {{ isset($height) ? $height : 200 }}px;">
@else
    <img src="https://via.placeholder.com/{{ isset($height) ? $height : 200 }}" alt="Default Image" style="max-width: {{ isset($height) ? $height : 200 }}px;">
@endif
