@push('scripts')
    <script>
        function previewImage(input, previewId) {
            const file = input.files[0];
            const fileType = file.type;
            if (!fileType.match('image/jpeg') && !fileType.match('image/png')) {
                alert('Please select a valid JPEG or PNG image file.');
                input.value = '';
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                var preview = document.getElementById(previewId);
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    </script>
@endpush
