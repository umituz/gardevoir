@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#about'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
