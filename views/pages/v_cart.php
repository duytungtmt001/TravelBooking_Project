<?php
    if(isset($_GET['id'])) {
        include ("models/m_delete.php");
        $delete_pr = new m_delete();
        $read_pr = $delete_pr->read_cart_by_id($_GET['id']);
        $delete_cart_pr = $delete_pr->delete_cart($_GET['id']);
        if($delete_cart_pr) {
            echo "
                <script>
                    location.href = 'cart.php';
                </script>
            ";
        } 
    }
?>
<?php
    if(isset($_GET['product_id'])) {
        $id = null;
        $user_id = $_GET['user_id'];
        $product_id = $_GET['product_id'];
        $quantity = $_GET['quantity'];
        $product_cart = $m_cart->add_cart($id,$user_id,$product_id,$quantity);
        echo "
            <script>
                location.href = 'cart.php';
            </script>
        ";
    }
?> 
<!-- Header -->
<header class="inner-page-header inner-page-header-3">
    <div class="inner-header-shape"></div>
    <!-- header-content -->
    <div class="container">
        <div class="header-content m-auto">
            <h1>Giỏ hàng</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                </ol>
            </nav>
        </div>
    </div>
</header>
<!-- Header -->
<!-- Cart -->
<section class="cart-section pt-100 pb-70 position-relative">
    <div class="map-shapes">
        <div class="map-shape map-shape-2 map-shape-vertical-top">
            <img src="public/Project_TrvelBooking/templates.envytheme.com/traip/default/assets/images/shapes/map-2.png" alt="shape">
        </div>
    </div>
    <div class="container">
        <div class="product-info-header">
            <h2>Giỏ hàng</h2>
            <a href="products.php" class="btn main-btn main-btn-arrow">Quay lại cửa hàng  <i class="flaticon-right-arrow"></i></a>
        </div>
        <div class="cart-table">
            <table>
                <thead>
                    <tr>
                        <th style="font-size: 19px;">Ảnh sản phẩm</th>
                        <th style="font-size: 19px;">Tên sản phẩm</th>
                        <th style="font-size: 19px;">Giá</th>
                        <th style="font-size: 19px;">Số lượng</th>
                        <th style="font-size: 19px;">Tổng cộng</th>
                        <th style="font-size: 19px;">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($cart as $key => $value) {
                            if($value->user_id !== $_SESSION['id']) {
                                continue;
                            }
                    ?>
                    <tr>
                        <td>
                            <div class="product-table-thumb">
                                <img src="admin/public/image_add/<?php foreach($products as $key_pr => $value_pr) {
                                        if($value_pr->id == $value->product_id) {
                                            echo $value_pr->img;
                                        }
                                    } 
                                ?>" alt="product">
                            </div>
                        </td>
                        <td style="font-size: 18px; font-weight: 530; font-family:Arial, Helvetica, sans-serif">
                            <?php foreach($products as $key_pr => $value_pr) {
                                if($value_pr->id == $value->product_id) {
                                    echo $value_pr->product_name;
                                }
                            } 
                            ?>
                        </td>
                        <td class="color-secondary">
                            <?php foreach($products as $key_pr => $value_pr) {
                                if($value_pr->id == $value->product_id) {
                                    echo $value_pr->price."$";
                                }
                            } 
                            ?></td>
                        <td>
                            <button class="btn_minus--custom" style="border: 1px solid #ccc;padding: 7px 10px;margin-bottom:2px;"><i class="fa-solid fa-minus"></i></button>
                            <input type="text" name="quantity--custom" id="quantity--custom" value="1" class="amount_product" style="width:60px;padding: 6px 0; font-size:17px;text-align:center;border: 1px solid #ccc; background-color: #efefef;margin: 0 -5px;">
                            <button class="btn_plus--custom" style="border: 1px solid #ccc;padding: 7px 10px;margin-bottom:2px;"><i class="fa-solid fa-plus"></i></button>
                        </td>
                        <td class="color-secondary">
                            <span class="price_product--custom" style="color: #f05123;font-size:17px;"><?php foreach($products as $key_pr => $value_pr) {
                                    if($value_pr->id == $value->product_id) {
                                        echo $value_pr->price;
                                    }
                                } 
                            ?></span><span style="color:#f05123;font-size:17px;">.00$</span>
                        </td>
                        <td class="cancel">
                            <a href="cart.php?id=<?php echo $value->id; ?>" class="btn_close--custom"><i class="flaticon-close"></i></a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>

            

        </div>
        <div class="row justify-content-between mt-30">
            <div class="col-sm-6 col-md-7 col-lg-6 pb-30">
                
            </div>
            <div class="col-sm-6 col-md-5 col-lg-6 pb-30">
                <div class="sub-section-title">
                    <h3 class="sub-section-title-heading">Thành tiền</h3>
                </div>
                <div class="cart-details">
                    <div class="cart-total-box cart-total-box-secondcolor" style="padding: 20px 40px;border-radius: 16px;">
                        <style>
                            .cart_pay-item {
                                display: flex;
                                margin: 36px 0;
                            }
                            .cart_pay-item:last-child {
                                margin-bottom: 12px;
                            }
                            .cart_pay-item h5 {
                                flex: 1;
                            }
                            .cart_pay-item span {
                                font-size: 18px;
                            }
                        </style>
                        <div class="cart_pay-item" style="margin-top:20px;">
                            <h5>Khách hàng</h5>
                            <div class="cart--span">
                                <span><?php echo $hoten[$_SESSION['id']-1]->fullname; ?></span> 
                            </div>
                        </div>
                        <div class="cart_pay-item">
                            <h5>Số điện thoại</h5>
                            <div class="cart--span">
                                <span><?php echo $hoten[$_SESSION['id']-1]->phone; ?></span>
                            </div>
                        </div>
                        <div class="cart_pay-item">
                            <h5>Địa chỉ</h5>
                            <div class="cart--span">
                                <span><?php echo $hoten[$_SESSION['id']-1]->address; ?></span>
                            </div>
                        </div>
                        <div class="cart_pay-item">
                            <h5>Tổng tiền hàng</h5>
                            <div class="cart--span" style="color: red;">
                                <span class="price_product--custom-1"> </span>
                                <span style="margin-left: -5px;">.00$</span>
                            </div>
                        </div>
                        <div class="cart_pay-item">
                            <h5>Phí vận chuyển</h5>
                            <div class="cart--span">
                                <span>2.00$</span>
                            </div>
                        </div>
                        <div class="cart_pay-item">
                            <h5>Tổng thanh toán</h5>
                            <div class="cart--span" style="color: red;">
                                <span class="price_product--custom-2"></span>
                                <span style="margin-left: -5px;">.00$</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-end">
                        <a class="btn main-btn main-btn-arrow pay_product--custom">Thanh toán <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const buttonMinus = document.querySelectorAll('.btn_minus--custom');
    const buttonPlus = document.querySelectorAll('.btn_plus--custom');
    const inputNode = document.querySelectorAll('.amount_product');
    const spanNode = document.querySelectorAll('.price_product--custom');
    const totalPrice = document.querySelector('.price_product--custom-1');
    const totalPrice2 = document.querySelector('.price_product--custom-2');
    var tg = 0;
    var tg2 = true;
    var tg3 = [];
    for(let i=0; i<inputNode.length; i++) {
        tg3[i] = inputNode[i].value;
        const xyz = spanNode[i].innerText;
        tg = tg + parseInt(spanNode[i].innerText);
        buttonMinus[i].onclick = function() {
            if((inputNode[i].value - 1) >= 1) {
                tg = tg - xyz;
                totalPrice.innerText = tg;
                totalPrice2.innerText = parseInt(totalPrice.innerText) + 2;
                tg2 = false;
            }
            inputNode[i].value--;
            if(inputNode[i].value <= 1) {
                inputNode[i].value = 1;
                spanNode[i].innerText = xyz;
            }
            spanNode[i].innerText = xyz * inputNode[i].value;
            tg3[i] = inputNode[i].value;
        }

        buttonPlus[i].onclick = function() {
            inputNode[i].value++;
            spanNode[i].innerText = xyz * inputNode[i].value;
            tg = tg + parseInt(xyz);
            totalPrice.innerText = tg;
            totalPrice2.innerText = parseInt(totalPrice.innerText) + 2;
            tg2 = false;
            tg3[i] = inputNode[i].value;
        }

        inputNode[i].oninput = function() {
            spanNode[i].innerText = xyz * inputNode[i].value;
            console.log(inputNode[i].value);
            if(inputNode[i].value < tg3[i]) {
                tg = tg - ((tg3[i]-inputNode[i].value)*parseInt(xyz));
                totalPrice.innerText = tg;
                totalPrice2.innerText = parseInt(totalPrice.innerText) + 2;
                tg2 = false;
            } else {
                tg = tg + ((inputNode[i].value-tg3[i])*parseInt(xyz));
                totalPrice.innerText = tg;
                totalPrice2.innerText = parseInt(totalPrice.innerText) + 2;
                tg2 = false;
            }
            tg3[i] = inputNode[i].value;
            console.log(tg3[i])
        }
    }

    if(tg2) {
        totalPrice.innerText = tg;
        totalPrice2.innerText = parseInt(totalPrice.innerText) + 2;
    }

</script>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php
    $loginUser = 'login_user.php';
    if(isset($_SESSION['hoten'])) {
        echo "
            <script>
                var aNode = document.querySelector('.pay_product--custom');
                aNode.onclick = function() {
                    Swal.fire({
                        position: 'center-center',
                        icon: 'success',
                        title: 'Thanh toán thành công',
                        showConfirmButton: false,
                        timer: 1500
                      })
                }
            </script>
        ";
    } else {
        echo "<script>
            var aNode = document.querySelector('.pay_product--custom');
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