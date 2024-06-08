@push('scripts')
    <script>
        $(document).ready(function() {
            var columns = @json($columns);

            $('#datatables').DataTable({
                "language": {
                    "search": "{{ __('Search') }}",
                    "lengthMenu": "{{ __('Per Page') }}" + "_MENU_ ",
                    "info": "_TOTAL_ "+ "{{ __('Records') }}" +", _START_ - _END_ " + "{{ __('Showing Between') }}",
                    "paginate": {
                        "first": "{{ __('First') }}",
                        "last": "{{ __('Last') }}",
                        "next": "{{ __('Next') }}",
                        "previous": "{{ __('Previous') }}"
                    }
                },
                "stripeClasses": [],
                "lengthMenu": [[5, 10, 25, -1], [5, 10, 25, "{{ __('All') }}"]],
                "order": [[0, 'desc']],
                "columnDefs": [
                    { "orderable": false, "targets": columns.length - 1 },
                    { "className": "text-center", "targets": "_all" }
                ],
                "columns": columns

            });

            $('#datatables_filter').addClass('text-right');
            var pagingContainer = $('.dataTables_paginate');
            pagingContainer.addClass('float-right');
        });
    </script>
@endpush
