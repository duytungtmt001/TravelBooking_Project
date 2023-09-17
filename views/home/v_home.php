    <!-- Header -->
    <header class="header-banner fixed-header-banner">
    <div class="booking-search">
        <form>
            <div class="booking-search-inputs" style="position: relative;">
                <div class="booking-search-input-item">
                    <div class="booking-input">
                        <!-- <label>
                            <i class="flaticon-placeholder-point"></i>
                            Đi đâu?
                        </label> -->
                        
                        <label class="location_select-title" style="padding: 12px; cursor: pointer;    margin: 0;padding: 0;">
                            <i class="flaticon-placeholder-point"></i>
                            Đi đâu?
                        </label>
                        <input type="text" placeholder="Bạn muốn đi đâu nào" class="input_location-select">
                         
                        <style>
                            .input_location-select {
                                margin-top: 4px;
                                font-size: 15px !important;
                            }
                            .location_select-menu {
                                list-style: none;
                                width: 250px;
                                margin: 0;
                                padding: 0;
                                margin-top: 12px;
                                position: absolute;
                                top: 110px;
                                left: 15%;
                                background-color: #fff;
                                max-height: 200px;
                                overflow-y: scroll;
                                
                            }

                            .location_select-menu::-webkit-scrollbar {
                                width: 6px;
                                background-color: #F5F5F5;
                            }
                            .location_select-menu::-webkit-scrollbar-thumb {
                                background-color: #000000;
                            }
 
                            .location_select-menu--item {
                                padding: 12px;
                                border-bottom: 1px solid #ccc;
                                cursor: pointer;
                            }
                            .location_select-menu--item:hover {
                                background-color: #ccc;
                            }
                            .display--none {
                                display: none;
                            }
                        </style>                            
                    </div>
                </div>
                <ul class="location_select-menu display--none">
                    <?php
                        foreach($location as $key=>$value) {
                    ?>
                        <li class="location_select-menu--item"><?php echo $value->location_name; ?></li>
                    <?php 
                        } 
                    ?>
                </ul>
                   
                <div class="booking-search-input-item">
                    <div class="booking-input" style="padding: 34.7px 65px;">
                        <label>
                            <i class="flaticon-calendar"></i>
                            Khi nào?
                        </label>
                        <input type="date" name="" id="">
                    </div>
                </div>
                
                <div class="booking-search-input-item">
                    <div class="booking-input"  style="padding: 22px 35px;">
                        <label>
                            <i class="flaticon-user-1"></i>
                            Số người đồng hành
                        </label>
                        <div class="amount--custom" style="display: flex; margin-top: 14px;">
                            <span class="btn_minus--custom" style="border-radius: 20px;display: block ;border: 1px solid #ccc;padding: 6px 10px;"><i class="fa-solid fa-minus"></i></span>
                            <input type="text" name="quantity--custom" id="quantity--custom" value="0" class="amount_product" style="border-radius: 20px;margin: 0 4px;display: block ;width:60px;padding: 5px 0; font-size:17px;text-align:center;border: 1px solid #ccc; background-color: #efefef;color: #000">
                            <span class="btn_plus--custom" style="border-radius: 20px;display: block ;border: 1px solid #ccc;padding: 6px 10px;"><i class="fa-solid fa-plus"></i></span>
                        </div>
                    </div>
                    <div class="booking-search-button">
                        <a class="btn main-btn search-icon--custom">
                            <i class="flaticon-searching"></i>
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- header-content -->
    <div class="container-fluid">
        <div class="header-content">
            <!-- <h1>Plan Your Best Holiday With Us & Enjoy</h1> -->
            <h1>Lên lịch cho kỳ nghỉ tuyệt vời của bạn nào</h1>
            <a href="tour.php" class="btn main-btn main-btn-arrow">Xem tất cả Tours <i class="flaticon-right-arrow"></i></a>
        </div>
    </div>
    <div class="scroll-parallax" id="parallax">
        <div class="parallax-layer parallax-layer-0 parallax" data-speed="66">
            <img src="public/Project_TrvelBooking/templates.envytheme.com/traip/default/assets/images/homepage-1/header-part-5.png" alt="header">
        </div>
        <div class="parallax-layer parallax-layer-1 parallax" data-speed="50">
            <img src="public/Project_TrvelBooking/templates.envytheme.com/traip/default/assets/images/homepage-1/header-part-4.png" alt="header">
        </div>
        <div class="parallax-layer parallax-layer-2 parallax" data-speed="40">
            <img src="public/Project_TrvelBooking/templates.envytheme.com/traip/default/assets/images/homepage-1/header-part-3.png" alt="header">
        </div>
        <div class="parallax-layer parallax-layer-3 parallax" data-speed="33">
            <img src="public/Project_TrvelBooking/templates.envytheme.com/traip/default/assets/images/homepage-1/header-part-2.png" alt="header">
        </div>
        <div class="parallax-layer parallax-layer-4 parallax" data-speed="20">
            <img src="public/Project_TrvelBooking/templates.envytheme.com/traip/default/assets/images/homepage-1/header-part-1.png" alt="header">
        </div>
        <div class="parallax-layer parallax-cover" ></div>
    </div>
</header>
<!-- Header -->
<!-- Holiday Planning -->
<section class="holiday-planning-section pt-min-100 pb-70 position-relative">
    <div class="map-shapes">
        <div class="map-shape map-shape-1">
            <img src="public/Project_TrvelBooking/templates.envytheme.com/traip/default/assets/images/shapes/map-1.png" alt="shape">
        </div>
        <div class="map-shape map-shape-2">
            <img src="public/Project_TrvelBooking/templates.envytheme.com/traip/default/assets/images/shapes/map-2.png" alt="shape">
        </div>
    </div>
    <div class="container">
        <div class="section-title">
            <small>Địa điểm hot nhất</small>
            <h2>Lên lịch cho kỳ nghỉ của bạn</h2>
        </div>
        <div class="row">
            <?php
                foreach($location as $key => $value) {
            ?>
                <div class="col-sm-6 col-lg-4 col-xl-3 pb-30">
                    <div class="card-1">
                        <div class="card-1-image">
                            <div class="card-1-overlay">
                                <a href="des.php?id=<?php echo $value->id;?>" style="padding: 60px 0;">
                                    <style>
                                        
                                        .img_tour--custom {
                                            height: 231.375px !important;
                                        }
                                        
                                    </style>
                                    <img src="admin/public/image_add/<?php echo $value->img; ?>" alt="holiday" class="img_tour--custom">
                                </a>
                                <ul class="card-1-entry">
                                    <li>
                                        <i class="flaticon-calendar"></i>
                                        <?php echo $value->time_start; ?>
                                    </li>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
                                    <li>
                                        <i class="flaticon-user-1"></i>
                                        04 +
                                    </li>
                                </ul>
                            </div>
                            <div class="card-1-redirect">
                                <a href="des.php?id=<?php echo $value->id;?>">
                                    <i class="flaticon-export" style="padding: 50px;"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-1-content">
                            <div class="card-1-info">
                                <h3>
                                    <a href="des.php?id=<?php echo $value->id;?>"><?php echo $value->location_name; ?></a>
                                </h3>
                                <div class="card-1-reviews">
                                    <ul class="review-star">
                                        <li class="full-star"><i class="flaticon-star"></i></li>
                                        <li class="full-star"><i class="flaticon-star"></i></li>
                                        <li class="full-star"><i class="flaticon-star"></i></li>
                                        <li class="full-star"><i class="flaticon-star"></i></li>
                                        <li class="full-star"><i class="flaticon-star"></i></li>
                                    </ul>
                                    <span>(100 Reviews)</span>
                                </div>
                            </div>
                            <p><?php echo $value->destinations; ?></p>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
        </div>
    </div>
</section>
<!-- Holiday Planning -->

<!-- Popular Package -->
<section class="popular-package-section pt-100 pb-80 line-shape-bg">
    <div class="container">
        <div class="section-title section-title-lg">
            <small>Gói Tour phổ biến</small>
            <h2>Chuyến du lịch tuyệt vời & đầy trải nghiệm</h2>
        </div>
    </div>
    <div class="popular-package-carousel owl-carousel">
        <?php
            foreach($tour as $key=>$value) {
        ?>
            <div class="item item--custom">
                <div class="card-2">
                    <div class="card-2-image">
                        <style>
                            .img_tourslider--custom {
                                height: 300px !important;
                            }
                        </style>
                        <img src="admin/public/image_add/<?php echo $value->img; ?>" alt="popular package" class="img_tourslider--custom">
                    </div>
                    <div class="card-2-content">
                        <ul class="card-2-entry">
                            <li>
                                <i class="flaticon-calendar"></i>
                                <?php echo $value->time_tour. "days"; ?>
                            </li>
                        </ul>
                        <div class="card-2-info">
                            <h3>
                                <a href="tour_detail.php?id=<?php echo $value->id; ?>"><?php echo $value->tour_name ?></a>
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
                                <a href="tour_detail.php?id=<?php echo $value->id; ?>">Explore Tour <i class="flaticon-export"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
    </div>
</section>
<!-- Popular Package -->
<!-- Tour Video -->
<section class="tour-video-section position-relative">
    <div class="map-shapes">
        <div class="map-shape map-shape-2 map-shape-top">
            <img src="public/Project_TrvelBooking/templates.envytheme.com/traip/default/assets/images/shapes/map-2.png" alt="shape">
        </div>
    </div>
    <div class="tour-video-contents">
        <div class="tour-video-item desk-pad-right-70 order-2 order-lg-1">
            <div class="tour-video-bg">
                <div class="video-icon">
                    <a href="https://www.youtube.com/watch?v=pqEO5r-Vlpo" class="video-popup">
                        <i class="flaticon-play"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="tour-video-item tour-video-item-details pt-100 order-1 order-lg-2 tab-pt-0">
            <div class="max-685 m-auto me-lg-0 ms-lg-0">
                <div class="section-title section-title-left about-title">
                    <small>Còn chờ điều gì nữa</small>
                    <h2>Chọn loại du lịch bạn thích</h2>
                </div>
                <div class="about-content-item">
                    <div class="about-content-thumb">
                        <i class="flaticon-gallery"></i>
                    </div>
                    <div class="about-content-texts">
                        <h3>Chúng tôi gợi ý những loại hình phổ biến nhất</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                    </div>
                </div>
                <div class="text-center text-lg-start">
                    <a href="tour.php" class="btn main-btn main-btn-arrow">Đặt Tour ngay <i class="flaticon-right-arrow"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container tour-category">
        <div class="row">
            <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-2 pt-30">
                <div class="tour-category-card tour-category-card-blue">
                    <a href="tour.php">
                        <i class="flaticon-hiking"></i>
                        <h3>Khám phá</h3>
                    </a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-2 pt-30">
                <div class="tour-category-card tour-category-card-pink">
                    <a href="tour.php">
                        <i class="flaticon-beach"></i>
                        <h3>Bãi biển</h3>
                    </a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-2 pt-30">
                <div class="tour-category-card tour-category-card-green">
                    <a href="tour.php">
                        <i class="flaticon-adventure"></i>
                        <h3>Leo núi</h3>
                    </a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-2 pt-30">
                <div class="tour-category-card tour-category-card-yellow">
                    <a href="tour.php">
                        <i class="flaticon-bagpack"></i>
                        <h3>Cặp đôi</h3>
                    </a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-2 pt-30">
                <div class="tour-category-card tour-category-card-purple">
                    <a href="tour.php">
                        <i class="flaticon-fire"></i>
                        <h3>Đốt lửa trại</h3>
                    </a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-2 pt-30">
                <div class="tour-category-card tour-category-card-greendark">
                    <a href="tour.php">
                        <i class="flaticon-signpost"></i>
                        <h3>Phổ biến</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tour Video -->
<!-- Testimonial -->
<section class="testimonial-section image-bg image-bg-1 p-tb-100">
    <div class="container-fluid position-relative z-index-1">
        <div class="section-title section-title-white">
            <small>Cảm nhận của khách du lịch</small>
            <h2>Một vài feedback về chúng tôi</h2>
        </div>
        <div class="testimonial-carousel owl-carousel owl-theme">
            <div class="item">
                <div class="testimonial-card text-center">
                    <div class="testimoial-quote">
                        <i class="flaticon-left-quote"></i>
                    </div>
                    <p class="testimonial-feedback">Một chuyến du lịch tuyệt vời và đáng nhớ, mọi thứ và dịch rất tốt và chu đáo của Travel Booking. Thanks for all!</p>
                    <div class="testimonial-client-info">
                        <img src="public/tung.jpg" alt="client">
                        <ul class="review-star">
                            <li class="full-star"><i class="flaticon-star"></i></li>
                            <li class="full-star"><i class="flaticon-star"></i></li>
                            <li class="full-star"><i class="flaticon-star"></i></li>
                            <li class="full-star"><i class="flaticon-star"></i></li>
                            <li class="full-star"><i class="flaticon-star"></i></li>
                        </ul>
                        <h3 class="testimonial-name">Nguyễn Duy Tùng</h3>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-card text-center">
                    <div class="testimoial-quote">
                        <i class="flaticon-left-quote"></i>
                    </div>
                    <p class="testimonial-feedback">Một chuyến du lịch tuyệt vời và đáng nhớ, mọi thứ cùng với dịch vụ rất tốt và chu đáo của Travel Booking. Thanks for all!</p>
                    <div class="testimonial-client-info">
                        <img src="public/thien.jpg" alt="client">
                        <ul class="review-star">
                            <li class="full-star"><i class="flaticon-star"></i></li>
                            <li class="full-star"><i class="flaticon-star"></i></li>
                            <li class="full-star"><i class="flaticon-star"></i></li>
                            <li class="full-star"><i class="flaticon-star"></i></li>
                            <li class="full-star"><i class="flaticon-star"></i></li>
                        </ul>
                        <h3 class="testimonial-name">Nguyễn Đình Thiện</h3>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-card text-center">
                    <div class="testimoial-quote">
                        <i class="flaticon-left-quote"></i>
                    </div>
                    <p class="testimonial-feedback">Một chuyến du lịch tuyệt vời và đáng nhớ, mọi thứ và dịch rất tốt và chu đáo của Travel Booking. Thanks for all!</p>
                    <div class="testimonial-client-info">
                        <img src="public/lam.jpg" alt="client">
                        <ul class="review-star">
                            <li class="full-star"><i class="flaticon-star"></i></li>
                            <li class="full-star"><i class="flaticon-star"></i></li>
                            <li class="full-star"><i class="flaticon-star"></i></li>
                            <li class="full-star"><i class="flaticon-star"></i></li>
                            <li class="full-star"><i class="flaticon-star"></i></li>
                        </ul>
                        <h3 class="testimonial-name">Nguyễn Tùng Lâm</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial -->

<!-- Product -->
<section class="product-section pt-100 pb-100 position-relative">
    <div class="map-shapes">
        <div class="map-shape map-shape-1">
            <img src="public/Project_TrvelBooking/templates.envytheme.com/traip/default/assets/images/shapes/map-3.png" alt="shape">
        </div>
    </div>
    <div class="container">
        <div class="section-title">
            <small>Chúng tôi có đa dạng sản phẩm</small>
            <h2>Giúp chuyến đi của bạn hoàn hảo</h2>
        </div>
        <div class="row">
            <?php
                $i = 0;
                foreach($product as $key=>$value) {
                    $i++;
                    if($i==5) {
                        break;
                    }
            ?>
                <div class="col-sm-6 col-lg-3 pb-30 single-card-rotate">
                    <div class="single-card" style="display: block;">
                        <div class="single-card-image">
                            <style>
                                .single-card-image:after {
                                    content: "";
                                    width: 0;
                                    height: 0;
                                }
                            </style>
                            <a href="products.php">
                                <img src="admin/public/image_add/<?php echo $value->img; ?>" alt="product">
                            </a> 
                        </div>
                        <div class="single-card-content">
                            <h3>
                                <a href="product_info.php?id=<?php echo $value->id; ?>"><?php echo $value->product_name; ?></a>
                            </h3>
                            <p><?php echo "$ ".$value->price; ?></p>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>

        </div>
        <div class="text-center">
            <a href="products.php" class="btn main-btn">Ghé thăm cửa hàng <i class="flaticon-shopping-bag"></i></a>
        </div>
    </div>
</section>
<!-- Product -->


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    var inputLocation = document.querySelector('.input_location-select');
    var ulLocation = document.querySelector('.location_select-menu');
    var labelLocation = document.querySelector('.location_select-title');
    var liLocations = document.querySelectorAll('.location_select-menu--item');
    
    var aNodeSearch = document.querySelector('.search-icon--custom');
    var tourNameValue = '';
    var tourPriceValue = ''
    const buttonMinus = document.querySelector('.btn_minus--custom');
    const buttonPlus = document.querySelector('.btn_plus--custom');
    const inputNode = document.querySelector('.amount_product');

    buttonMinus.onclick = function() {
        inputNode.value--;
        if(inputNode.value <= 0) {
            inputNode.value = 0;
        }
    }

    buttonPlus.onclick = function() {
        inputNode.value++;
    }

    labelLocation.onclick = function() {
        ulLocation.classList.toggle('display--none');
    }

    inputLocation.onclick = function() {   
        ulLocation.classList.toggle('display--none');
    }

    inputLocation.oninput = function() {
        ulLocation.classList.remove('display--none');
    }
        
    for(let i=0; i<liLocations.length; i++) {
        liLocations[i].onclick = function() {
            inputLocation.value = liLocations[i].innerText;
            tourNameValue = inputLocation.value;
            ulLocation.classList.add('display--none');
        }
    }

    aNodeSearch.onclick = function() {
        if(tourNameValue == '') {
            Swal.fire({
                icon: 'info',
                title: 'Bạn cần chọn địa điểm đã nhé!',
            })
        } else {
            aNodeSearch.href = `tour_detail.php?tour_name=${tourNameValue}`;
        }
    }
</script> 
