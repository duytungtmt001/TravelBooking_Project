<?php
    if(isset($_GET['tour_name'])) {
        include ("models/m_delete.php");
        $find = new m_delete();
        $find_tour = $find->find_tour($_GET['tour_name']);
        $idFind = $find_tour[0]->id;
        echo "
                <script>
                    location.href = 'tour_detail.php?id=$idFind';
                </script>
            ";
    }
?>
<header class="inner-page-header inner-page-header-1">
    <div class="inner-header-shape"></div>
    <!-- header-content -->
    <div class="container">
        <div class="header-content m-auto">
            <h1>Tour Detail</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="tour.php">Tour</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tour Detail</li>
                </ol>
            </nav>
        </div>
    </div>
</header>
<!-- Header -->
<!-- Tour -->
<section class="tour-section pt-100 pb-100 position-relative">
    <div class="map-shapes">
        <div class="map-shape map-shape-1 map-shape-top">
            <img src="public/Project_TrvelBooking/templates.envytheme.com/traip/default/assets/images/shapes/map-1.png" alt="shape">
        </div>
        <div class="map-shape map-shape-2 map-shape-bottom">
            <img src="public/Project_TrvelBooking/templates.envytheme.com/traip/default/assets/images/shapes/map-2.png" alt="shape">
        </div>
    </div>
    <div class="container">
        <div class="details-card">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="details-card-image-carousel owl-carousel owl-theme default-owl-theme">
                        <div class="item">
                            <img src="admin/public/image_add/<?php echo $tour_detail[$_GET['id'] - 1]->img_1 ?>" alt="tour">
                        </div>
                        <div class="item">
                            <img src="admin/public/image_add/<?php echo $tour_detail[$_GET['id'] - 1]->img_2 ?>" alt="tour">
                        </div>
                        <div class="item">
                            <img src="admin/public/image_add/<?php echo $tour_detail[$_GET['id'] - 1]->img_3 ?>" alt="tour">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 desk-pad-left-40">
                    <div class="details-card-content">
                        <div class="card-2-info">
                            <h3><?php echo $tour_detail[$_GET['id'] - 1]->tour_name; ?></h3>
                            <div class="card-2-info-price"><?php echo $tour_detail[$_GET['id'] - 1]->price."$" ?><span>/người</span></div>
                        </div>
                        <div class="card-2-reviews">
                            <ul class="review-star">
                                <li class="full-star"><i class="flaticon-star"></i></li>
                                <li class="full-star"><i class="flaticon-star"></i></li>
                                <li class="full-star"><i class="flaticon-star"></i></li>
                                <li class="full-star"><i class="flaticon-star"></i></li>
                                <li class="full-star"><i class="flaticon-star"></i></li>
                            </ul>
                            <span>(101 Reviews)</span>
                        </div>
                        <p><?php echo $tour_detail[$_GET['id'] - 1]->describes; ?></p>
                        <div class="details-card-info">
                            <h4>Chi tiết Tour</h4>
                            <div class="details-card-info-list">
                                <style>
                                    .details-card-list-texts:before {
                                        width: 0;
                                        height: 0;
                                        border: none;
                                    }
                                    .details-card-list-item {
                                        padding: 6px 0;
                                    }
                                    .details-card-list-texts {
                                        padding: 0 50px;
                                    }
                                    .details-card-list-label {
                                        font-family: Arial, Helvetica, sans-serif;
                                        font-weight: 600;
                                    }

                                </style>
                                <div class="details-card-list-item">
                                    <div class="details-card-list-label">Điểm đến:</div>
                                    <div class="details-card-list-texts"><?php echo $tour_detail[$_GET['id'] - 1]->destinations; ?></div>
                                </div>
                                <div class="details-card-list-item">
                                    <div class="details-card-list-label">Số ngày:</div>
                                    <div class="details-card-list-texts"><?php echo $tour_detail[$_GET['id'] - 1]->duration; ?></div>
                                </div>
                                <div class="details-card-list-item">
                                    <div class="details-card-list-label">Ngày đi:</div>
                                    <div class="details-card-list-texts"><?php echo $tour_detail[$_GET['id'] - 1]->time_start ?></div>
                                </div>
                                <div class="details-card-list-item">
                                    <div class="details-card-list-label">Ngày về:</div>
                                    <div class="details-card-list-texts"><?php echo $tour_detail[$_GET['id'] - 1]->time_end ?></div>
                                </div>
                                <div class="details-card-list-item">
                                    <div class="details-card-list-label">Số người:</div>
                                    <div class="details-card-list-texts"><?php echo $tour_detail[$_GET['id'] - 1]->person." người/tour"; ?></div>
                                </div>
                                <div class="details-card-list-item">
                                    <div class="details-card-list-label">Số chỗ trống:</div>
                                    <div class="details-card-list-texts"><?php echo $tour_detail[$_GET['id'] - 1]->seat ?></div>
                                </div>
                            </div>
                        </div>
                        <a class="btn main-btn main-btn-arrow book_tour--custom">Đặt tour <i class="flaticon-right-arrow"></i></a>
                        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <?php
                            $indexBook = $tour_detail[$_GET['id'] - 1]->id;
                            $loginUser = 'login_user.php';
                            if(isset($_SESSION['hoten'])) {
                                echo "
                                    <script>
                                        var aNode = document.querySelector('.book_tour--custom');
                                        aNode.onclick = function() {
                                            location.href = 'booking_tour.php?id=$indexBook'
                                        }
                                    </script>
                                ";
                            } else {
                                echo "<script>
                                    var aNode = document.querySelector('.book_tour--custom');
                                    aNode.onclick = function() {
                                        Swal.fire({
                                            icon: 'info',
                                            title: 'Bạn cần đăng nhập để đặt tour nhé!',
                                            footer: '<a href=$loginUser>Đăng nhập ngay</a>',    
                                          })
                                    }
                                </script>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tour -->