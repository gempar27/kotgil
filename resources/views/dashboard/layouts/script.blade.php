<script src="{{ asset('admin_assets/lib/jquery/jquery.js') }}"></script>
<script src="{{ asset('admin_assets/lib/popper.js/popper.js') }}"></script>
<script src="{{ asset('admin_assets/lib/bootstrap/bootstrap.js') }}"></script>
<script src="{{ asset('admin_assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
<script src="{{ asset('admin_assets/lib/moment/moment.js') }}"></script>
<script src="{{ asset('admin_assets/lib/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('admin_assets/lib/jquery-switchbutton/jquery.switchButton.js') }}"></script>
<script src="{{ asset('admin_assets/lib/peity/jquery.peity.js') }}"></script>
<script src="{{ asset('admin_assets/lib/chartist/chartist.js') }}"></script>
<script src="{{ asset('admin_assets/lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('admin_assets/lib/d3/d3.js') }}"></script>
<script src="{{ asset('admin_assets/lib/rickshaw/rickshaw.min.js') }}"></script>
{{-- Data Table --}}
<script src="{{ asset('admin_assets/lib/highlightjs/highlight.pack.js') }}"></script>
<script src="{{ asset('admin_assets/lib/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('admin_assets/lib/datatables-responsive/dataTables.responsive.js') }}"></script>
<script src="{{ asset('admin_assets/lib/select2/js/select2.min.js') }}"></script>


<script src="{{ asset('admin_assets/js/bracket.js') }}"></script>
<script src="{{ asset('admin_assets/js/ResizeSensor.js') }}"></script>
@if(request()->is('dashboard/beranda'))
    <script src="{{ asset('admin_assets/js/dashboard.js') }}"></script>
@endif
{{-- summernote Teks Editor --}}
<script src="{{ asset('admin_assets/lib/summernote/summernote-bs4.min.js') }}"></script>

<script>
    $(function() {
        'use strict'

        $('#free-lesson').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                search: '',
                lengthMenu: '_MENU_ items/page',
            }
        });
        // Select2
        $('.dataTables_length select').select2({
            minimumResultsForSearch: Infinity
        });

        // Summernote editor
        $('#summernote').summernote({
            height: 300,
            tooltip: false
        })
        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.

        $(window).resize(function() {
            minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
            if (window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)')
                .matches) {
                // show only the icons and hide left menu label by default
                $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
                $('body').addClass('collapsed-menu');
                $('.show-sub + .br-menu-sub').slideUp();
            } else if (window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass(
                    'collapsed-menu')) {
                $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
                $('body').removeClass('collapsed-menu');
                $('.show-sub + .br-menu-sub').slideDown();
            }
        }
    });
</script>
