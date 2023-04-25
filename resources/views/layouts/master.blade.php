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
        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
        <link href="/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
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
        <script src="/assets/js/libs/jquery-3.1.1.min.js"></script>
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
        <!-- END GLOBAL MANDATORY SCRIPTS -->

        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
        <script src="/plugins/apex/apexcharts.min.js"></script>
        <script src="/assets/js/dashboard/dash_1.js"></script>
        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    </body>

    </html>
