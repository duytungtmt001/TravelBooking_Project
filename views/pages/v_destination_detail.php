

<header class="inner-page-header inner-page-header-1">
    <div class="inner-header-shape"></div>
    
    <div class="container">
        <div class="header-content m-auto">
            <h1><?php echo $destinations[$_GET['id'] - 1]->destination_name; ?></h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="destinations.php">Destination</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $destinations[$_GET['id'] - 1]->destination_name; ?></li>
                </ol>
            </nav>
        </div>
    </div>
</header>

<section class="destination-section pt-100 pb-70 position-relative">
    <div class="map-shapes">
        <div class="map-shape map-shape-1 map-shape-top">
            <img src="public/Project_TrvelBooking/templates.envytheme.com/traip/default/assets/images/shapes/map-1.png" alt="shape">
        </div>
        <div class="map-shape map-shape-2 map-shape-bottom">
            <img src="public/Project_TrvelBooking/templates.envytheme.com/traip/default/assets/images/shapes/map-2.png" alt="shape">
        </div>
    </div>
    <div class="container">
        <div class="forum-main-image">
            <img src="admin/public/image_add/<?php echo $destinations[$_GET['id'] - 1]->img_main; ?>" alt="destination" style="max-height: 400px; width: 100%">
        </div>
        <div class="row">
            <div class="col-lg-9 pb-30 desk-pad-right-40">
                <div class="forum-details">
                    <h3>Rome</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    <div class="row">
                        <div class="col-6 col-sm-4 col-lg-4">
                            <div class="forum-details-inner-image">
                                <img src="admin/public/image_add/<?php echo $destinations[$_GET['id'] - 1]->img_1; ?>" alt="destination">
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-4">
                            <div class="forum-details-inner-image">
                                <img src="admin/public/image_add/<?php echo $destinations[$_GET['id'] - 1]->img_2; ?>" alt="destination">
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-4 offset-3 offset-sm-0">
                            <div class="forum-details-inner-image">
                                <img src="admin/public/image_add/<?php echo $destinations[$_GET['id'] - 1]->img_3; ?>" alt="destination">
                            </div>
                        </div>
                    </div>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <h3>Municipalities</h3>
                    <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.</p>
                    <div class="forum-image-gallery">
                        <div class="forum-gallery-item">
                            <img src="admin/public/image_add/<?php echo $destinations[$_GET['id'] - 1]->img_4; ?>" alt="destination">
                        </div>
                        <div class="forum-gallery-item">
                            <img src="admin/public/image_add/<?php echo $destinations[$_GET['id'] - 1]->img_5; ?>" alt="destination">
                        </div>
                        <div class="forum-gallery-item">
                            <img src="admin/public/image_add/<?php echo $destinations[$_GET['id'] - 1]->img_6; ?>" alt="destination">
                        </div>
                        <div class="forum-gallery-item">
                            <img src="admin/public/image_add/<?php echo $destinations[$_GET['id'] - 1]->img_7; ?>" alt="destination">
                        </div>
                        <div class="forum-gallery-item">
                            <img src="admin/public/image_add/<?php echo $destinations[$_GET['id'] - 1]->img_8; ?>" alt="destination">
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="col-lg-3 pb-30">
                <div class="sidebar-item sidebar-search">
                    <form>
                        <div class="form-input-group">
                            <input type="text" placeholder="Search" class="form-control">
                            <button type="submit">
                                <i class="flaticon-searching"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="sidebar-item">
                    <h3>Categories</h3>
                    <ul class="sidebar-category">
                        <li>
                            <a href="destination.html">Europe (09)</a>
                        </li>
                        <li>
                            <a href="destination.html">Latest (15)</a>
                        </li>
                        <li>
                            <a href="destination.html">New York (11)</a>
                        </li>
                        <li>
                            <a href="destination.html">Popular Tour (21)</a>
                        </li>
                        <li>
                            <a href="destination.html">Trendy (12)</a>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-item">
                    <h3>Popular Destination</h3>
                    <ul class="sidebar-destination-list">
                        <li>
                            <a href="#">
                                <img src="admin/public/image_add/<?php echo $destinations[$_GET['id'] - 1]->img_1; ?>" alt="destination">
                                <h3>Italy</h3>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="admin/public/image_add/<?php echo $destinations[$_GET['id'] - 1]->img_1; ?>" alt="destination">
                                <h3>Japan</h3>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="admin/public/image_add/<?php echo $destinations[$_GET['id'] - 1]->img_1; ?>" alt="destination">
                                <h3>Vietnam</h3>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="admin/public/image_add/<?php echo $destinations[$_GET['id'] - 1]->img_1; ?>" alt="destination">
                                <h3>Indonesia</h3>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="admin/public/image_add/<?php echo $destinations[$_GET['id'] - 1]->img_1; ?>" alt="destination">
                                <h3>Ethiopia</h3>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="admin/public/image_add/<?php echo $destinations[$_GET['id'] - 1]->img_1; ?>" alt="destination">
                                <h3>Venice</h3>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-item">
                    <h3>Tags</h3>
                    <ul class="sidebar-tag">
                        <li>
                            <a href="destination.php">Europe</a>
                        </li>
                        <li>
                            <a href="destination.php">Trendy</a>
                        </li>
                        <li>
                            <a href="destination.php">Popular Tour</a>
                        </li>
                        <li>
                            <a href="destination.php">Unique Places</a>
                        </li>
                        <li>
                            <a href="destination.php">America</a>
                        </li>
                        <li>
                            <a href="destination.php">Travel</a>
                        </li>
                        <li>
                            <a href="destination.php">Popular City</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>