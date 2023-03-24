    <!-- Bootstrap JS -->
    <script src="{{ asset('backend/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- jQuery -->
    <script src="{{ asset('backend/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/jquery-ui/dist/jquery-ui.min.js') }}"></script>
    <!-- Sweetalert JS -->
    <script src="{{ asset('backend/assets/libs/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
    <!-- Toast JS -->
    <script src="{{ asset('backend/assets/libs/toastr/toastr.min.js') }}"></script>
    <!-- Data Table JS -->
    <script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables.net-dt/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <!-- Editor JS -->
    <script src="{{ asset('backend/assets/js/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('backend/assets/libs/chart.js/dist/chart.min.js') }}"></script>
    <!-- Calendar JS -->
    <script src="{{ asset('backend/assets/libs/fullcalendar/main.min.js') }}"></script>
    <!-- API -->
    <script src="https://cdn.jsdelivr.net/npm/fetch-jsonp@1.1.3/build/fetch-jsonp.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>

    <script>
        @if (Session::has('message'))
            let type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;
                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;
                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;
                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>
