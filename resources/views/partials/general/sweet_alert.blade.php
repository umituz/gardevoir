@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Delete Button
            document.querySelectorAll('.deleteBtn').forEach(function(button) {
                button.addEventListener('click', function() {
                    var id = this.getAttribute('data-id');
                    Swal.fire({
                        title: '{{ __("Are you sure?") }}',
                        text: '{{ __("You will not be able to revert this!") }}',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: '{{ __("Yes, delete it!") }}',
                        cancelButtonText: '{{ __("Cancel") }}'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('deleteForm-' + id).submit();
                        }
                    });
                });
            });

            // Restore Button
            document.querySelectorAll('.restoreBtn').forEach(function(button) {
                button.addEventListener('click', function() {
                    var id = this.getAttribute('data-id');
                    Swal.fire({
                        title: '{{ __("Are you sure to restore?") }}',
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonText: '{{ __("Yes, restore it!") }}',
                        cancelButtonText: '{{ __("Cancel") }}'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('restoreForm-' + id).submit();
                        }
                    });
                });
            });

            // Force Delete Button
            document.querySelectorAll('.forceDeleteBtn').forEach(function(button) {
                button.addEventListener('click', function() {
                    var id = this.getAttribute('data-id');
                    Swal.fire({
                        title: '{{ __("Are you sure to force delete?") }}',
                        text: '{{ __("This action cannot be undone!") }}',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: '{{ __("Yes, force delete it!") }}',
                        cancelButtonText: '{{ __("Cancel") }}'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('forceDeleteForm-' + id).submit();
                        }
                    });
                });
            });
        });
    </script>
@endpush
