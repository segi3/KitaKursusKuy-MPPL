<!DOCTYPE html>
<html lang="en">

<head>

    {{-- head partial --}}
    @include('dashboard.partials._head')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        {{-- sidebar --}}
        @include('dashboard.navbars.sidebars._mentor')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('dashboard.navbars.topbars._mentor')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('dashboard.partials._footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('dashboard.partials._scripts')

    {{-- own's page js --}}
    @yield('scripts')

</body>

</html>
