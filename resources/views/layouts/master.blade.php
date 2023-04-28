    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <title>Nusantara Kitchen - @yield('title') </title>
        <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico" />
        <link href="/assets/css/loader.css" rel="stylesheet" type="text/css" />
        <script src="/assets/js/loader.js"></script>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
        <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/plugins.css" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
            crossorigin="anonymous"></script>
        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
        <link href="/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="/plugins/table/datatable/datatables.css">
        <link rel="stylesheet" type="text/css" href="/plugins/table/datatable/dt-global_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <script src="https://unpkg.com/feather-icons"></script>
        <link href="/assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="/plugins/select2/select2.min.css">
        <link href="/plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
        {{-- <link href="/plugins/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css"> --}}
        <script src="/plugins/flatpickr/flatpickr.js"></script>
        {{-- <link href="/plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" /> --}}
        {{-- <script src="/plugins/file-upload/file-upload-with-preview.min.js"></script> --}}
        <link href="/plugins/animate/animate.css" rel="stylesheet" type="text/css" />
        <script src="/plugins/sweetalerts/promise-polyfill.js"></script>
        <link href="/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
        <link href="/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="/modules/employees/css/custom.css">
        <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    </head>

    <body>
        <!-- BEGIN LOADER -->
        <div id="load_screen">
            <div class="loader">
                <div class="loader-content">
                    <div class="spinner-grow align-self-center"></div>
                </div>
            </div>
        </div>
        <!--  END LOADER -->

        <!--  BEGIN NAVBAR  -->
        <x-header-component />
        <!--  END NAVBAR  -->

        <!--  BEGIN NAVBAR  -->
        <x-navbar-component :breadcrumb="$breadcrumb" />
        <!--  END NAVBAR  -->

        <!--  BEGIN MAIN CONTAINER  -->
        <div class="main-container" id="container">

            <div class="overlay"></div>
            <div class="search-overlay"></div>

            <!--  BEGIN SIDEBAR  -->
            <x-sidebar-component />
            <!--  END SIDEBAR  -->

            <!--  BEGIN CONTENT AREA  -->
            <div id="content" class="main-content">
                <div class="layout-px-spacing">

                    <div class="row layout-top-spacing">
                        @yield('content')
                    </div>

                </div>
                <x-footer-component />
            </div>
            <!--  END CONTENT AREA  -->

        </div>
        <!-- END MAIN CONTAINER -->

        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
        <script src="/bootstrap/js/popper.min.js"></script>
        <script src="/bootstrap/js/bootstrap.min.js"></script>
        <script src="/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="/assets/js/app.js"></script>
        <script>
            $(document).ready(function() {
                App.init();
            });
        </script>
        <script src="/assets/js/custom.js"></script>
        <script src="/plugins/table/datatable/datatables.js"></script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->

        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
        <script src="/plugins/apex/apexcharts.min.js"></script>
        <script src="/assets/js/dashboard/dash_1.js"></script>
        <script src="/plugins/select2/select2.min.js"></script>
        <script src="/plugins/sweetalerts/sweetalert2.min.js"></script>
        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    </body>

    </html>
