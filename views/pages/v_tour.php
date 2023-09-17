<!-- Header -->
<header class="inner-page-header inner-page-header-1">
    <div class="inner-header-shape"></div>
    <!-- header-content -->
    <div class="container">
        <div class="header-content m-auto">
            <h1>Danh sách Tours</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tour List</li>
                </ol>
            </nav>
        </div>
    </div>
</header>
<!-- Header -->
<!-- Tour -->
<section class="tour-section pb-100 position-relative">
    <div class="map-shapes">
        <div class="map-shape map-shape-1 map-shape-top">
            <img src="public/Project_TrvelBooking/templates.envytheme.com/traip/default/assets/images/shapes/map-1.png" alt="shape">
        </div>
        <div class="map-shape map-shape-2 map-shape-bottom">
            <img src="public/Project_TrvelBooking/templates.envytheme.com/traip/default/assets/images/shapes/map-2.png" alt="shape">
        </div>
    </div>
    <div class="container">
        <div class="section-title section-title-lg">
            <small>Các gói Tour phổ biến</small>
            <h2>Chuyến đi tuyệt vời cho những người yêu thích du lịch</h2>
        </div>
        <div class="row">
            <style>
                .img_tour--custom {
                    min-height: 290px;
                }
            </style>
            <?php
                foreach($tours as $key => $value) {
            ?>
                <div class="col-md-6 col-lg-4 pb-30">
                    <div class="card-2">
                        <div class="card-2-image">
                            <img src="admin/public/image_add/<?php echo $value->img; ?>" alt="tour" class="img_tour--custom">
                        </div>
                        <div class="card-2-content">
                            <ul class="card-2-entry">
                                <li>
                                    <i class="flaticon-calendar"></i>
                                    <?php echo $value->time_tour; ?>
                                </li>
                            </ul>
                            <div class="card-2-info">
                                <h3>
                                    <a href="tour_detail.php?id=<?php echo $value->id; ?>"><?php echo $value->tour_name; ?></a>
                                </h3>
                                <div class="card-2-info-price"><?php echo $value->price . "$"; ?><span>/per</span></div>
                            </div>
                            <p><?php echo $value->destinations; ?></p>
                            <div class="card-2-footer">
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
                                <div class="card-2-action">
                                    <a href="tour_detail.php?id=<?php echo $value->id; ?>">Khám phá <i class="flaticon-export"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>            
        </div>
        <!-- pagination -->
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                        <i class="flaticon-left-chevron" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <i class="flaticon-right-arrow-angle" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</section>
<!-- Tour -->