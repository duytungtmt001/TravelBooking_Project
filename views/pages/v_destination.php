<header class="inner-page-header inner-page-header-1">
    <div class="inner-header-shape"></div>
    <!-- header-content -->
    <div class="container">
        <div class="header-content m-auto">
            <h1>Destination</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Destination</li>
                </ol>
            </nav>
        </div>
    </div>
</header>

<section class="destination-section pb-100">
    <div class="container">
        <div class="section-title">
            <small>Ultimate Destination</small>
            <h2>Chọn điểm đến của bạn</h2>
        </div>
        <div class="row">
            <?php
                foreach($locations as $key=>$value) {
            ?>
                <div class="col-sm-6 col-lg-4 col-xl-3 pb-30" style="min-height: 370px">
                    <div class="destination-card-full" style="height: 100%;">
                        <div class="destination-card-image">
                            <img src="admin/public/image_add/<?php echo $value->img; ?>" alt="destination" style="height: 340px;">
                            <h3 class="destination-card-name"><?php echo $value->location_name; ?></h3>
                        </div>
                        <div class="card-1-content">
                            <div class="card-1-info">
                                <h3>
                                    <a href="des.php?id=<?php echo $value->id; ?>"><?php echo $value->location_name; ?></a>
                                </h3>
                                <div class="card-1-reviews">
                                    <ul class="review-star">
                                        <li class="full-star"><i class="flaticon-star"></i></li>
                                        <li class="full-star"><i class="flaticon-star"></i></li>
                                        <li class="full-star"><i class="flaticon-star"></i></li>
                                        <li class="full-star"><i class="flaticon-star"></i></li>
                                        <li class="full-star"><i class="flaticon-star"></i></li>
                                    </ul>
                                    <span>(112 Reviews)</span>
                                </div>
                            </div>
                            <p><?php echo $value->destinations; ?></p>
                        </div>
                        <div class="destination-card-link">
                            <a href="des.php?id=<?php echo $value->id; ?>"><i class="flaticon-export"></i></a>
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
                    <a class="page-link" href="destination.html" aria-label="Previous">
                        <i class="flaticon-left-chevron" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="destination.html">1</a></li>
                <li class="page-item"><a class="page-link" href="destination.html">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="destination.html">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="destination.html" aria-label="Next">
                        <i class="flaticon-right-arrow-angle" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</section>