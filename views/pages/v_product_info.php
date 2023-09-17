<header class="inner-page-header inner-page-header-4">
    <div class="inner-header-shape"></div>
    <!-- header-content -->
    <div class="container">
        <div class="header-content m-auto">
            <h1>Chi tiết sản phẩm</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="products.php">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product Info</li>
                </ol>                                                                                                                                  
            </nav>
        </div>
    </div>
</header>
<!-- Header -->
<!-- Product -->
<section class="product-section pt-100 pb-100 position-relative">
    <div class="map-shapes">
        <div class="map-shape map-shape-1 map-shape-top">
            <img src="public/Project_TrvelBooking/templates.envytheme.com/traip/default/assets/images/shapes/map-1.png" alt="shape">
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center pb-30">
            <div class="col-lg-6 pb-30">
                <div class="product-details-carousel owl-carousel owl-theme default-owl-theme product-gallery-grid">
                    <div class="item">
                        <div class="product-gallery-trigger">
                            <a href="admin/public/image_add/<?php echo $product_info[$_GET['id'] - 1]->img; ?>" title="Travel Shoe"><i class="flaticon-full-screen"></i></a>
                        </div>
                        <img src="admin/public/image_add/<?php echo $product_info[$_GET['id'] - 1]->img; ?>" alt="product">
                    </div>
                    <div class="item">
                        <div class="product-gallery-trigger">
                            <a href="admin/public/image_add/<?php echo $product_info[$_GET['id'] - 1]->img; ?>" title="Travel Shoe"><i class="flaticon-full-screen"></i></a>
                        </div>
                        <img src="admin/public/image_add/<?php echo $product_info[$_GET['id'] - 1]->img; ?>" alt="product">
                    </div>
                    <div class="item">
                        <div class="product-gallery-trigger">
                            <a href="admin/public/image_add/<?php echo $product_info[$_GET['id'] - 1]->img; ?>" title="Travel Shoe"><i class="flaticon-full-screen"></i></a>
                        </div>
                        <img src="admin/public/image_add/<?php echo $product_info[$_GET['id'] - 1]->img; ?>" alt="product">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pb-30">
                <div class="product-details-caption desk-pad-left-40">
                    <div class="card-2-info">
                        <h3><?php echo $product_info[$_GET['id'] - 1]->product_name; ?></h3>
                        <div class="card-2-info-price"><?php echo $product_info[$_GET['id'] - 1]->price."$"; ?></div>
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
                    <p><?php echo $product_info[$_GET['id'] - 1]->describes; ?></p>
                    <ul class="product-details-list">
                        <li>
                            <strong>Mã sản phẩm:</strong> <?php echo $product_info[$_GET['id'] - 1]->sku; ?>
                        </li>
                        <li>
                            <strong>Thương hiệu:</strong> <?php echo $product_info[$_GET['id'] - 1]->brand; ?>
                        </li>
                        <li>
                            <strong>Tình trạng:</strong> <?php echo $product_info[$_GET['id'] - 1]->available; ?>
                        </li>
                    </ul>
                    <div class="product-details-action">
                        <div class="product-details-cart cart-quantity">
                            <button class="qu-btn dec">-</button>
                            <input type="text" class="qu-input quantity_products--custom" value="1">
                            <button class="qu-btn inc">+</button>
                        </div>
                    </div>
                    <a href="
                            <?php 
                                if(isset($_SESSION['hoten'])) { 
                                    $tg = $_SESSION['id']; 
                                    echo 'cart.php?product_id='.$_GET['id']. '& user_id='.$tg; 
                                } else { 
                                    echo 'login_user.php'; 
                                } 
                            ?>
                            " class="btn main-btn main-btn-arrow">
                        Thêm vào giỏ hàng 
                        <i class="flaticon-right-arrow"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="product-details-tab">
            <ul class="product-tab-list">
                <li class="active" data-product-tab="1">Mô tả sản phẩm</li>
                <!-- <li data-product-tab="2">Đánh giá</li> -->
            </ul>
            <div class="product-tab-information">
                <div class="product-tab-information-item active" data-product-details-tab="1">
                    <div class="forum-details">
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna. </li>
                            <li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna. aliquyam erat. </li>
                            <li>Dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna. </li>
                            <li>Sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna. aliquyam erat, sed diam voluptua.</li>
                            <li>Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna. aliquyam erat, sed diam voluptua. </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam e justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.</p>
                    </div>
                </div>
                <!-- <div class="product-tab-information-item" data-product-details-tab="2">
                    <div class="max-1050 ms-auto me-auto">
                        <div class="comment-area">
                            <div class="comment-feedback mb-50">
                                <div class="comment-feedback-item">
                                    <div class="comment-feedback-reply">
                                        <div class="comment-reply-thumb">
                                            <img src="assets/images/users/user-1.jpg" alt="user">
                                        </div>
                                        <div class="comment-reply-content">
                                            <div class="comment-reply-header">
                                                <div class="comment-reply-info">
                                                    <h4>Jane Anderson</h4>
                                                    <p>February 07,2021 - 08:18 AM</p>
                                                </div>
                                                <ul class="review-star">
                                                    <li class="full-star"><i class="flaticon-star"></i></li>
                                                    <li class="full-star"><i class="flaticon-star"></i></li>
                                                    <li class="full-star"><i class="flaticon-star"></i></li>
                                                    <li class="full-star"><i class="flaticon-star"></i></li>
                                                    <li class="full-star"><i class="flaticon-star"></i></li>
                                                </ul>
                                            </div>
                                            <p class="comment-reply-para">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-feedback-item">
                                    <div class="comment-feedback-reply">
                                        <div class="comment-reply-thumb">
                                            <img src="assets/images/users/user-3.jpg" alt="user">
                                        </div>
                                        <div class="comment-reply-content">
                                            <div class="comment-reply-header">
                                                <div class="comment-reply-info">
                                                    <h4>Jane Anderson</h4>
                                                    <p>February 05,2021 - 10:21 PM</p>
                                                </div>
                                                <ul class="review-star">
                                                    <li class="full-star"><i class="flaticon-star"></i></li>
                                                    <li class="full-star"><i class="flaticon-star"></i></li>
                                                    <li class="full-star"><i class="flaticon-star"></i></li>
                                                    <li class="full-star"><i class="flaticon-star"></i></li>
                                                    <li class="full-star"><i class="flaticon-star"></i></li>
                                                </ul>
                                            </div>
                                            <p class="comment-reply-para">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form class="product-review-form">
                                <div class="sub-section-title m-0">
                                    <h3 class="sub-section-title-heading">Leave A Review</h3>
                                    <div class="star-rating mb-20">
                                        <input type="radio" id="5-stars" name="rating" value="5" />
                                        <label for="5-stars" class="star"></label>
                                        <input type="radio" id="4-stars" name="rating" value="4" />
                                        <label for="4-stars" class="star"></label>
                                        <input type="radio" id="3-stars" name="rating" value="3" />
                                        <label for="3-stars" class="star"></label>
                                        <input type="radio" id="2-stars" name="rating" value="2" />
                                        <label for="2-stars" class="star"></label>
                                        <input type="radio" id="1-star" name="rating" value="1" />
                                        <label for="1-star" class="star"></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name*" required/>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="email" id="email" class="form-control" placeholder="Your Email*" required/>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <textarea name="message" class="form-control" id="message" rows="6" placeholder="Your Comment*"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-checkbox mb-20">
                                    <input type="checkbox" id="check1">
                                    <label for="check1">Save my name and email in this browser for the next time I comment.</label>
                                </div>
                                <div class="form-button">
                                    <button class="btn main-btn main-btn-arrow" type="submit">Send A Comment <i class="flaticon-right-arrow"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>
<!-- Product -->
<!-- Recent Product -->
<!-- <section class="recent-product pb-100">
    <div class="container">
        <div class="sub-section-title">
            <h3 class="sub-section-title-heading">Related Products</h3>
        </div>
        <div class="recent-product-carousel owl-carousel owl-theme default-owl-theme">
            <div class="item">
                <div class="single-card">
                    <div class="single-card-image">
                        <a href="single-product.html">
                            <img src="assets/images/products/product-2.jpg" alt="product">
                        </a>
                        <ul class="single-card-action">
                            <li>
                                <a href="cart.html" class="btn main-btn main-btn-arrow">Add To Cart <i class="flaticon-right-arrow"></i></a>
                            </li>
                            <li>
                                <a href="wishlist.html" class="btn main-btn main-btn-red main-btn-arrow">Add To Wishlist <i class="flaticon-right-arrow"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="single-card-content">
                        <h3>
                            <a href="single-product.html">Travel Bag</a>
                        </h3>
                        <p>$ 50</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-card">
                    <div class="single-card-image">
                        <a href="single-product.html">
                            <img src="assets/images/products/product-3.jpg" alt="product">
                        </a>
                        <ul class="single-card-action">
                            <li>
                                <a href="cart.html" class="btn main-btn main-btn-arrow">Add To Cart <i class="flaticon-right-arrow"></i></a>
                            </li>
                            <li>
                                <a href="wishlist.html" class="btn main-btn main-btn-red main-btn-arrow">Add To Wishlist <i class="flaticon-right-arrow"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="single-card-content">
                        <h3>
                            <a href="single-product.html">Rope</a>
                        </h3>
                        <p>$ 15</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-card">
                    <div class="single-card-image">
                        <a href="single-product.html">
                            <img src="assets/images/products/product-4.jpg" alt="product">
                        </a>
                        <ul class="single-card-action">
                            <li>
                                <a href="cart.html" class="btn main-btn main-btn-arrow">Add To Cart <i class="flaticon-right-arrow"></i></a>
                            </li>
                            <li>
                                <a href="wishlist.html" class="btn main-btn main-btn-red main-btn-arrow">Add To Wishlist <i class="flaticon-right-arrow"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="single-card-content">
                        <h3>
                            <a href="single-product.html">Travel Map</a>
                        </h3>
                        <p>$ 10</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-card">
                    <div class="single-card-image">
                        <a href="single-product.html">
                            <img src="assets/images/products/product-5.jpg" alt="product">
                        </a>
                        <ul class="single-card-action">
                            <li>
                                <a href="cart.html" class="btn main-btn main-btn-arrow">Add To Cart <i class="flaticon-right-arrow"></i></a>
                            </li>
                            <li>
                                <a href="wishlist.html" class="btn main-btn main-btn-red main-btn-arrow">Add To Wishlist <i class="flaticon-right-arrow"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="single-card-content">
                        <h3>
                            <a href="single-product.html">Travel Combo Pack</a>
                        </h3>
                        <p>$ 1500</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-card">
                    <div class="single-card-image">
                        <a href="single-product.html">
                            <img src="assets/images/products/product-6.jpg" alt="product">
                        </a>
                        <ul class="single-card-action">
                            <li>
                                <a href="cart.html" class="btn main-btn main-btn-arrow">Add To Cart <i class="flaticon-right-arrow"></i></a>
                            </li>
                            <li>
                                <a href="wishlist.html" class="btn main-btn main-btn-red main-btn-arrow">Add To Wishlist <i class="flaticon-right-arrow"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="single-card-content">
                        <h3>
                            <a href="single-product.html">Vintage Travel Suitcase</a>
                        </h3>
                        <p>$ 500</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->