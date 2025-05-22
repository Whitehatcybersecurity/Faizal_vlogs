<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Faizal Vlog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/back_end/images/favicon.ico') }}">

    <!-- jsvectormap css -->
    <link href="{{ asset('assets/back_end/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- gridjs css -->
    <link rel="stylesheet" href="{{ asset('assets/back_end/libs/gridjs/theme/mermaid.min.css') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('assets/back_end/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/back_end/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/back_end/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/back_end/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/back_end/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

    <!---- Toasitfy Js ---->
    <link rel="stylesheet" href="{{ asset('assets/back_end/libs/sweetalert2/sweetalert2.min.css') }}" />

    <!--Toastr CSS -->
    <link rel="stylesheet" href="{{ asset('assets/back_end/js/toastr/toastr.css') }}" />

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

   

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('back_end.panels.navbar')

        <!-- removeNotificationModal -->
        <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                colors="primary:#f7b84b,secondary:#f06548"
                                style="width:100px;height:100px"></lord-icon>
                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete
                                It!</button>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- ========== App Menu ========== -->
        @include('back_end.panels.sidebar')
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            @yield('content')
            <!-- End Page-content -->

            @include('back_end.panels.fooder')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas"
            data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- Theme Settings -->
    <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
        <div class="d-flex align-items-center bg-primary bg-gradient p-3 offcanvas-header">
            <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

            <button type="button" class="btn-close btn-close-white ms-auto" id="customizerclose-btn"
                data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        
        <div class="offcanvas-footer border-top p-3 text-center">
            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                </div>
                <div class="col-6">
                    <a href="https://1.envato.market/velzon-admin" target="_blank"
                        class="btn btn-primary w-100">Buy Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/back_end/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/back_end/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/back_end/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/back_end/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/back_end/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('assets/back_end/js/plugins.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('assets/back_end/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ asset('assets/back_end/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/back_end/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!-- gridjs js -->
    <script src="{{ asset('assets/back_end/libs/gridjs/gridjs.umd.js') }}"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('assets/back_end/js/pages/dashboard-job.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/back_end/js/app.js') }}"></script>

    
    <!-- Jquery JS-->
    <script src="{{ asset('assets/back_end/js/jquery/jquery.min.js') }}"></script>

    <!---- Jquery Validation ---->
    <script src="{{ asset('assets/back_end/js/jquery/jquery.validate.min.js') }}"></script>

    {{-- <!---- Toasitfy Js ---->
    <script src="{{ asset('assets/back_end/libs/sweetalert2/sweetalert2.min.js') }}"></script> --}}

    
    <!-- common JS-->
    <script type="text/javascript" src="{{ asset('assets/back_end/js/common/common.js') }}"></script>

    <!-- Datatable -->
    <script src="{{ asset('assets/back_end/js/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/back_end/js/datatable/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/back_end/js/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/back_end/js/datatable/datatables.init.js') }}"></script>

     <!--Toastr JS -->
     <script type="text/javascript" src="{{ asset('assets/back_end/js/toastr/toastr.min.js') }}"></script>
     <script>
        @if (Session::has('message'))
             var type = "{{ Session::get('alert-type', 'info') }}"
             switch (type) {
                 case 'info':
                     toastr.info(" {{ Session::get('message') }} ");
                     toastr.options = {
                         "closeButton": true,
                         "progressBar": true
                     }
                     break;
                 case 'success':
                     toastr.success(" {{ Session::get('message') }} ");
                     toastr.options = {
                         "closeButton": true,
                         "progressBar": true,
                     }
                     break;
                 case 'warning':
                     toastr.warning(" {{ Session::get('message') }} ");
                     toastr.options = {
                         "closeButton": true,
                         "progressBar": true
                     }
                     break;
                 case 'error':
                     toastr.error(" {{ Session::get('message') }} ");
                     toastr.options = {
                         "closeButton": true,
                         "progressBar": true
                     }
                     break;
             }
        @endif
     </script>  
     <script src="{{ asset('assets/back_end/js/toastr/toastr.js') }}"></script>
     <script src="{{ asset('assets/back_end/js/toastr/ui-toasts.js') }}"></script>

     

    <script src="{{ asset('assets/back_end/js/backend/dashboard.js') }}"></script>

    <!-- jQuery (Toastr depends on jQuery) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    @yield('footer')
</body>

</html>
