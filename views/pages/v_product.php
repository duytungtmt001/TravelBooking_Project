<!-- Header -->
<header class="inner-page-header inner-page-header-4">
            <div class="inner-header-shape"></div>
            <!-- header-content -->
            <div class="container">
                <div class="header-content m-auto">
                    <h1>Shop</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shop</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </header>
        <!-- Header -->
        <!-- Product -->

<section class="product-section pb-100 position-relative">
    <div class="map-shapes">
        <div class="map-shape map-shape-2 map-shape-bottom">
            <img src="public/Project_TrvelBooking/templates.envytheme.com/traip/default/assets/images/shapes/map-2.png" alt="shape">
        </div>
    </div>
    <div class="container">
        <div class="section-title">
            <small>Chúng tôi có nhiều thứ giúp bạn</small>
            <h2>Làm cho chuyến đi hoàn hảo hơn</h2>
        </div>

        <div class="product-sort-header">
            <div class="product-sort-header-item">
                <form>
                    <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm">
                    <button type="submit"><i class="flaticon-searching"></i></button>
                </form>
            </div>
            <div class="product-sort-header-item">
                <select class="product-filter">
                    <option value="">Loại sản phẩm</option>
                    <option value="2">Sản phẩm phổ biến</option>
                    <option value="3">Sản phẩm nổi bật</option>
                    <option value="4">Sản phẩm bán chạy nhất</option>
                </select>
            </div>
        </div>

        <div class="row load-more-gallery">
            <?php
                    foreach($products as $key=>$value) {
            ?>
            <div class="col-sm-6 col-lg-3 single-card-rotate pb-30 product-more-item">
                <div class="single-card">
                    <div class="single-card-image">
                        <a href="product_info.php?id=<?php echo $value->id; ?>">
                            <img src="admin/public/image_add/<?php echo $value->img; ?>" alt="product">
                        </a>
                        <ul class="single-card-action">
                            <li>
                                <a href="<?php if(isset($_SESSION['hoten'])) { $tg = $_SESSION['id']; echo 'cart.php?product_id='.$value->id. '& user_id='.$tg. '& quantity=1'; } else { echo 'login_user.php'; } ?>" style="padding:12px 24px;margin:0;" class="btn main-btn main-btn-arrow">
                                    Thêm vào giỏ 
                                    <i class="flaticon-right-arrow"></i>
                                </a>
                            </li> 
                        </ul>
                    </div>
                    <div class="single-card-content">
                        <h3>
                            <a href="product_info.php?id=<?php echo $value->id; ?>"><?php echo $value -> product_name; ?></a>
                        </h3>
                        <p><?php echo number_format($value -> price) . "$"; ?></p>
                    </div>
                </div>
                
            </div>
            <?php
                }
            ?>

        </div>
        
        <!-- Load More -->
        <div class="text-center load-more">
            <button class="btn main-btn main-btn-arrow load-more-btn">Load More <i class="flaticon-right-arrow"></i></button>
        </div>
        <!-- Load More -->
    </div>
</section>





