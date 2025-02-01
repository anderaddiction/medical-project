<!-- JAVASCRIPT -->
<script src="{{ URL::asset('assets/libs/jquery/jquery-3.6.1.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/metismenu/metismenu.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/eva-icons/eva-icons.min.js') }}"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-datatables-checkboxes@1.2.11/js/dataTables.checkboxes.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@vite(['resources/js/agais.js', 'resources/js/forms.js', 'resources/js/crud.js'])
<script>
    $(document).ready(function() {
        $("#red-marked").click(function(e) {
            e.preventDefault();
            var route = $(this).attr('href');
            var id = $(this).data('id');
            const container = document.querySelector('#red-marked');
            $.ajax({
                type: "PUT",
                url: route,
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                data: id,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response > 0) {
                        $(".rounded-pill").html(response);
                        //clearHTML(container);
                        location.reload();
                    } else if (response == 0) {
                        $(".rounded-pill").hide();
                        clearHTML(container);
                    }

                }
            });
            //functions
            function clearHTML(container) {
                while (container.firstChild) {
                    container.removeChild(container.firstChild);
                }
            }
        });
    });
</script>
@yield('script')
@yield('script-bottom')
