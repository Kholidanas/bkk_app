<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>APLIKASI BURSA KERJA KHUSUS</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('assets/staradmin/') ?>/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/staradmin/') ?>/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="<?= base_url('assets/staradmin/') ?>/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="<?= base_url('assets/staradmin/') ?>/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/staradmin/') ?>/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?= base_url('assets/staradmin/') ?>/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('assets/staradmin') ?>/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= base_url('assets/staradmin/') ?>/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="<?= base_url('assets/staradmin/') ?>/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo" href="../../index.html">
                    <img src="<?= base_url('assets/staradmin/') ?>/images/logo.svg" alt="logo" /> </a>
                <a class="navbar-brand brand-logo-mini" href="../../index.html">
                    <img src="<?= base_url('assets/staradmin/') ?>/images/logo-mini.svg" alt="logo" /> </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <ul class="navbar-nav">
                    <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +050 2992 709</li>
                    <li class="nav-item dropdown language-dropdown">
                        <a class="nav-link px-2 d-flex align-items-center" id="LanguageDropdown" href="#" data-toggle="" aria-expanded="false">
                            <div class="d-inline-flex mr-0 mr-md-3">
                                <div class="flag-icon-holder">
                                    <i class="flag-icon flag-icon-id"></i>
                                </div>
                            </div>
                            <span class="profile-text font-weight-medium d-none d-md-block">Indonesia</span>
                        </a>
                    </li>
                </ul>
                <form class="ml-auto search-form d-none d-md-block" action="#">
                    <div class="form-group">
                        <input type="search" class="form-control" placeholder="Search Here">
                    </div>
                </form>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <img class="img-xs rounded-circle" src="<?= base_url('assets/staradmin/') ?>/images/faces/face8.jpg" alt="Profile image"> </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <div class="dropdown-header text-center">
                                <img class="img-md rounded-circle" src="<?= base_url('assets/staradmin/') ?>/images/faces/face8.jpg" alt="Profile image">
                                <p class="mb-1 mt-3 font-weight-semibold">gungsp</p>
                                <p class="font-weight-light text-muted mb-0">gungsp@gmail.com</p>
                            </div>
                            <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                            <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                            <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
                            <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
                            <a class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                            <div class="profile-image">
                                <img class="img-xs rounded-circle" src="<?= base_url('/assets/staradmin/') ?>/images/faces/face8.jpg" alt="profile image">
                                <div class="dot-indicator bg-success"></div>
                            </div>
                            <div class="text-wrapper">
                                <p class="profile-name">gungsp</p>
                                <p class="designation">Premium user</p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item nav-category">Main Menu</li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="loadMenu('<?= base_url('perusahaan') ?>')">
                            <i class="menu-icon typcn typcn-document-text"></i>
                            <span class="menu-title">Daftar Perusahaan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="ui-basic" onclick="loadMenu('<?= base_url('lowongan') ?>')">
                            <i class="menu-icon typcn typcn-coffee"></i>
                            <span class="menu-title">Lowongan Pekerjaan</span>
                            <i class=""></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu" onclick="loadMenu('<?= base_url('canaker') ?>')">
                                <li class="nav-item">
                                    <a class="nav-link" href="../pages/ui-features/buttons.html">Informasi Canaker</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="loadMenu('<?= base_url('pengumuman') ?>')">
                            <i class="menu-icon typcn typcn-shopping-bag"></i>
                            <span class="menu-title">Pengumuman</span>
                        </a>
                    </li>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-breadcrumb">
                        <div class="page-title">
                            <div class="col-12">
                                <div class="page-header">
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="kontenTemplate">
                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Selamat Datang Di Aplikasi Bursa Kerja Khusus</h4>
                                        <table id="table_perusahaan" class="table table-bordered">
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <footer class="footer">
                    <div class="container-fluid clearfix">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>
                        </span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url('assets/staradmin/') ?>/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?= base_url('assets/staradmin/') ?>/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="<?= base_url('assets/staradmin/') ?>/js/shared/off-canvas.js"></script>
    <script src="<?= base_url('assets/staradmin/') ?>/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
    <script type="text/javascript">
        function loadMenu(url) {
            $.ajax(url, {
                type: 'GET',
                success: function(data, status, xhr) {
                    var objData = JSON.parse(data);

                    $('#kontenTemplate').html(objData.konten);
                    $('title').html(objData.titel);
                    $('.page-breadcrumb .page-title').html(objData.titel);
                },
                error: function(jqXHR, textStatus, errorMsg) {
                    alert('Error : ' + errorMsg);
                }
            })
        }
    </script>
</body>

</html>