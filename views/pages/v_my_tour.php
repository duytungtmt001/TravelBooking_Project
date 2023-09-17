<?php
    if(isset($_GET['result'])) {
        $id = null;
        $user_id = $_SESSION['id'];
        $tour_id = $_GET['id'];
        $quantity = $_GET['quantity'];
        $total_price = $_GET['total'];
        $time = date("d/m/Y");
        $add_mytour = $m_mytour->add_tour($id,$user_id,$tour_id,$quantity,$total_price,$time);
        echo "
            <script>
                location.href = 'my_tour.php';
            </script>
        ";
    }
?>

<header class="inner-page-header inner-page-header-4">
    <div class="inner-header-shape"></div>
    <div class="container">
        <div class="header-content m-auto">
            <h1>My Tours</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">My Tours</li>
                </ol>
            </nav>
        </div>
    </div>
</header>

<section class="cart-section pt-100 pb-70 position-relative">
    <div class="map-shapes">
        <div class="map-shape map-shape-2 map-shape-vertical-top">
            <img src="public/Project_TrvelBooking/templates.envytheme.com/traip/default/assets/images/shapes/map-2.png" alt="shape">
        </div>
    </div>
    <div class="container">
        <div class="product-info-header">
            <h2>Tour của tôi</h2>
            <a href="tour.php" class="btn main-btn main-btn-arrow">Xem các Tour khác  <i class="flaticon-right-arrow"></i></a>
        </div>
        <div class="cart-table">
            <table>
                <thead>
                    <tr>
                        <th style="font-size: 19px;">Hình ảnh</th>
                        <th style="font-size: 19px;">Tên Tour</th>
                        <th style="font-size: 19px;">Giá</th>
                        <th style="font-size: 19px;">Số người</th>
                        <th style="font-size: 19px;">Ngày đặt</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        foreach($mytour as $key => $value) {
                            if($value->user_id !== $_SESSION['id']) {
                                continue;
                            }
                    ?>
                    <tr>
                        <td>
                            <div class="product-table-thumb">
                                <style>
                                    .cart-table table td {
                                        padding: 20px 0 !important;
                                    }
                                    .product-table-thumb {
                                        width: 170px !important;
                                    }
                                </style>
                                <img src="admin/public/image_add/<?php foreach($tours as $key_tour => $value_tour) {
                                        if($value_tour->id == $value->tour_id) {
                                            echo $value_tour->img;
                                        }
                                    } 
                                ?>" alt="product">
                            </div>
                        </td>
                        <td style="font-size: 18px; font-weight: 530; font-family:Arial, Helvetica, sans-serif">
                            <?php foreach($tours as $key_tour => $value_tour) {
                                if($value_tour->id == $value->tour_id) {
                                    echo $value_tour->tour_name;
                                }
                            } 
                            ?>
                        </td>
                        <td class="color-secondary">
                            <?php 
                                foreach($tours as $key_tour => $value_tour) {
                                    if($value_tour->id == $value->tour_id) {
                                        echo $value->total_price;
                                    }
                                } 
                            ?>
                        </td>

                        <td>
                            <?php 
                                foreach($tours as $key_tour => $value_tour) {
                                    if($value_tour->id == $value->tour_id) {
                                        echo $value->quantity;
                                    }
                                } 
                            ?>
                        </td>
                        <td class="color-secondary">
                            <?php foreach($tours as $key_tour => $value_tour) {
                                    if($value_tour->id == $value->tour_id) {
                                        echo $value->time;
                                    }
                                } 
                            ?>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
                
            </table>
        </div>
    </div>
</section>