<?php
    session_start();
    if(!isset($_SESSION['name'])) {
        header('Location:login.php');
    }
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="public/assets/icon.png">
    <title>Booking.com</title>
    <link href="public/assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <link href="public/dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="index.php">
                        <span class="logo-text">
                             <img src="public/assets/logo.png" alt="homepage" class="light-logo" style="width: 210px;
    padding-left: 10px; color: #fff;"/>
                        </span>
                    </a>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <style> 
                                    .topbar .top-navbar .navbar-nav>.nav-item>.nav-link {
                                        font-size: 1rem;
                                    }
                                </style>
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <a href="logout.php"><i class="fa-solid fa-right-from-bracket" style="font-size: 24px; color:#fff; padding:8px;"></i></a>
                    <a href="logout.php" style="color:#fff;padding: 4px 0;margin-right:28px;">Đăng xuất</a>
                    
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item" style="border-bottom: 1px solid #999; border-top: 1px solid #999; "> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false">
                                <i class="mdi mdi-view-dashboard" style="font-size: 24px;"></i>
                                <span class="hide-menu" style="font-size: 16px;">Danh sách địa điểm</span>
                            </a>
                        </li>
                    
                        <li class="sidebar-item" style="border-bottom: 1px solid #999; border-top: 1px solid #999; "> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="tour.php" aria-expanded="false">
                                <i class="fa-solid fa-list" style="font-size: 24px;"></i>
                                <span class="hide-menu" style="font-size: 16px;">Danh sách Tours</span>
                            </a>
                        </li>

                        <li class="sidebar-item" style="border-bottom: 1px solid #999; border-top: 1px solid #999; "> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="product.php" aria-expanded="false">
                                <i class="fa-solid fa-bars" style="font-size: 24px;"></i>
                                <span class="hide-menu" style="font-size: 16px;">Danh sách sản phẩm</span>
                            </a>
                        </li>

                        <li class="sidebar-item" style="border-bottom: 1px solid #999; border-top: 1px solid #999; "> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="destination.php" aria-expanded="false">
                                <i class="fa-solid fa-map" style="font-size: 24px;"></i>
                                <span class="hide-menu" style="font-size: 16px;">Destinations</span>
                            </a>
                        </li>

                        <li class="sidebar-item" style="border-bottom: 1px solid #999; border-top: 1px solid #999; "> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="tour_detail.php" aria-expanded="false">
                                <i class="fa-solid fa-calendar-week" style="font-size: 24px;"></i>
                                <span class="hide-menu" style="font-size: 16px;">Tour Detail</span>
                            </a>
                        </li>

                        <li class="sidebar-item" style="border-bottom: 1px solid #999; border-top: 1px solid #999; "> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="product_info.php" aria-expanded="false">
                                <i class="fa-brands fa-product-hunt" style="font-size: 24px;"></i>
                                <span class="hide-menu" style="font-size: 16px;">Product Info</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
    </div>
    <script src="public/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="public/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="public/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="public/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="public/assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="public/dist/js/waves.js"></script>
    <script src="public/dist/js/sidebarmenu.js"></script>
    <script src="public/dist/js/custom.min.js"></script>
    <script src="public/assets/libs/flot/excanvas.js"></script>
    <script src="public/assets/libs/flot/jquery.flot.js"></script>
    <script src="public/assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="public/assets/libs/flot/jquery.flot.time.js"></script>
    <script src="public/assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="public/assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="public/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="public/dist/js/pages/chart/chart-page-init.js"></script>

</body>

</html>