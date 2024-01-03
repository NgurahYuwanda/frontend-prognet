<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ URL::asset('MockupPrognet/MockupPrognet') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ URL::asset('MockupPrognet/MockupPrognet') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ URL::asset('MockupPrognet/MockupPrognet') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL::asset('MockupPrognet/MockupPrognet') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ URL::asset('MockupPrognet/MockupPrognet') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ URL::asset('MockupPrognet/MockupPrognet') }}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{ URL::asset('MockupPrognet/MockupPrognet') }}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{ URL::asset('MockupPrognet/MockupPrognet') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ URL::asset('MockupPrognet/MockupPrognet') }}/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ URL::asset('MockupPrognet/MockupPrognet') }}/assets/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{ URL::asset('MockupPrognet/MockupPrognet') }}/assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">Penjualan</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="{{ URL::asset('MockupPrognet/MockupPrognet') }}/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Zaskia</h6>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="/logout">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="/">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

           

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('Barang.index') }}">
                    <i class="bi bi-box-seam-fill"></i>
                    <span>Barang</span>
                </a>
            </li><!-- End Contact Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('SatuanBarang.index') }}">
                    <i class="bi bi-box-seam"></i>
                    <span>Satuan Barang</span>
                </a>
            </li><!-- End Error 404 Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('Penjualan.index') }}">
                    <i class="bi bi-cart"></i>
                    <span>Penjualan</span>
                </a>
            </li><!-- End Blank Page Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('DetailPenjualan.index') }}">
                    <i class="bi bi-file-earmark"></i>
                    <span>Detail Penjualan</span>
                </a>
            </li><!-- End Blank Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="/logout">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Logout</span>
                </a>
            </li><!-- End Login Page Nav -->


        </ul>

    </aside><!-- End Sidebar-->
    <main id="main" class="main">
<div class="pagetitle">
    <h1>{{ $title }}</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">{{ $title }}</li>
        </ol>
    </nav>
</div>
        @yield('content')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ URL::asset('MockupPrognet/MockupPrognet') }}/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{ URL::asset('MockupPrognet/MockupPrognet') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ URL::asset('MockupPrognet/MockupPrognet') }}/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="{{ URL::asset('MockupPrognet/MockupPrognet') }}/assets/vendor/echarts/echarts.min.js"></script>
    <script src="{{ URL::asset('MockupPrognet/MockupPrognet') }}/assets/vendor/quill/quill.min.js"></script>
    <script src="{{ URL::asset('MockupPrognet/MockupPrognet') }}/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="{{ URL::asset('MockupPrognet/MockupPrognet') }}/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{ URL::asset('MockupPrognet/MockupPrognet') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ URL::asset('MockupPrognet/MockupPrognet') }}/assets/js/main.js"></script>

</body>

</html>