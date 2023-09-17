<header class="inner-page-header inner-page-header-4">
    <div class="inner-header-shape"></div>
    <div class="container">
        <div class="header-content m-auto">
            <h1>Đặt Tour</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="tour.php">Tour</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Đặt Tour</li>
                </ol>
            </nav>
        </div>
    </div>
</header>

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
                <div class="col-lg-8 desk-pad-left-40">
                    <div class="details-card-content">
                        <div class="card-2-info">
                            <h3><?php echo $tour_detail[$_GET['id'] - 1]->tour_name; ?></h3>
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
                            <h4>Tour Details</h4>
                            <div class="details-card-info-list">
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
                        <div class="payment_detail">
                            <style>
                                .pay_method {
                                    display: flex;
                                    justify-content: space-between;
                                    margin-top: 30px;
                                }
                                .pay_method p {
                                    padding: 0;
                                    margin: 0;
                                    padding-top: 20px;
                                }
                                .pay_method-group {
                                    border: 1px solid #ccc;
                                    border-radius: 8px;
                                    padding: 12px 24px;
                                    display: flex;
                                    width: 190px;
                                    flex-direction: column;
                                    text-align: center;
                                    cursor: pointer;
                                    transition: all linear 0.05s;
                                }
                                /* .pay_method-group:hover {
                                    background-color: #e9e9e9;
                                } */
                                .active--pay {
                                    background-color: #94fcff;
                                }
                                .pay_method-group img {
                                    width: 50px;
                                    margin: 0 auto;
                                }
                            </style>
                            <h3 style="margin-top: 32px;">Phương thức thanh toán</h3>
                            <div class="pay_method">
                                <div class="pay_method-group">
                                    <img src="public/momo.png" alt="">
                                    <p>Ví MOMO</p>
                                </div>
                                <div class="pay_method-group">
                                    <img src="public/global.png" alt="" style="padding-top: 6px;">
                                    <p>Thẻ thanh toán quốc tế</p>
                                </div>
                                <div class="pay_method-group">
                                    <img src="public/bank.png" alt="">
                                    <p>Chuyển khoản ngân hàng</p>
                                </div>
                                <div class="pay_method-group" style="padding-top: 6px;">
                                    <img src="public/vnpay.png" alt="" style="width: 65px;">
                                    <p>VNPAY QR</p>
                                </div>
                            </div>

                            <script>
                                var payNodes = document.querySelectorAll('.pay_method-group');
                                for(let i=0; i<payNodes.length; i++) {
                                    payNodes[i].onclick = function() {
                                        if(document.querySelector('.pay_method-group.active--pay')) {
                                            document.querySelector('.pay_method-group.active--pay').classList.remove('active--pay');
                                        }
                                        this.classList.add('active--pay');                                            
                                    }
                                }
                            </script>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4" style="padding-right: 40px;">
                    <style>
                        .bill--custom{
                            /* border: 1px solid #ccc; */
                            background-color: #d9feff;
                            border-radius: 16px;
                            padding: 20px 24px;
                            min-height: 400px;
                        }

                        .bill--custom h4 {
                            margin-bottom: 30px;
                        }
                        .bill--custom ul {
                            list-style-type: none;
                            padding: 0;
                            margin: 0;
                        }

                        .bill--custom ul li {
                            border-bottom: 1px solid #ccc;
                            margin-bottom: 28px;
                            font-size: 18px;
                            display: flex;
                            justify-content: space-between;
                        }
                        .bill--custom button {
                            width: 100%;
                            height: 60px;
                            border-radius: 12px;
                            background-color: #FCCF00;
                            font-size: 18px;
                            margin: 16px 0;
                        }

                        .bill--custom input {
                            width: 80px;
                            border: none;
                            text-align: center;
                        }
                    </style>
                    <div class="bill--custom">
                        <h4>Hóa đơn</h4>
                        <ul>
                            <li>
                                <span>Khách hàng</span>
                                <span>
                                    <?php 
                                        for($i = 0; $i<count($hoten); $i++) {
                                            if($hoten[$i]->hoten == $_SESSION['hoten']) {
                                                $indexName = $i;
                                            }
                                        }
                                        echo $nameLogin = $hoten[$indexName]->fullname;
                                    ?>
                                </span>
                            </li>
                            <li>
                                <span>Tên Tour</span>
                                <span><?php echo $tour_detail[$_GET['id'] - 1]->tour_name; ?></span>
                            </li>
                            <li>
                                <span>Ngày đặt</span>
                                <span>24/09/2022</span>
                            </li>
                            <li>
                                <span>Số lượng người</span>
                                <input type="number" name="" id="" value="" class="amount_person" require>
                            </li>
                            <li>
                                <span>Tổng cộng</span>
                                <span class="price_tour--custom" style="color: red;"> <?php echo $tour_detail[$_GET['id'] - 1]->price . "$"; ?> </span>
                            </li>
                            <li>
                                <span>Mã giảm giá</span>
                                <span>Không áp dụng</span>
                            </li>
                        </ul>
                        <button class="payment--custom" name="btn--payment">Thanh toán</button>
                    </div>
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>   
                    <script>
                        var inputNode = document.querySelector('.amount_person');
                        var spanNode = document.querySelector('.price_tour--custom');
                        inputNode.onchange = function() {
                            spanNode.innerText = <?php echo $tour_detail[$_GET['id'] - 1]->price; ?> * inputNode.value + '$';
                        }
                        
                        var payNode = document.querySelector('.payment--custom');
                        var flag = false;


                        payNode.onclick = function() {
                            for(var i=0; i<payNodes.length; i++) {
                                if(payNodes[i].classList.contains('active--pay')) {
                                    flag = true;
                                }
                            }
                            if(flag) {
                                Swal.fire({
                                    position: 'center-center',
                                    imageWidth: 400,
                                    imageHeight: 200,
                                    imageUrl: 'admin/public/image_add/success.gif',
                                    title: 'Bạn đã thanh toán thành công',
                                    html: '<p>Chúc bạn có chuyến đi vui vẻ và đáng nhớ!</p>',
                                    icon: 'success',
                                    showConfirmButton: false,
                                    timer: 3500
                                })
                                setTimeout(function() {
                                    if(inputNode.value == 0) {
                                        location.href = 'http://localhost/TravelBooking_Project/my_tour.php?id=<?php echo $_GET['id']; ?>' + '&quantity=1&result=true' + '&total='+spanNode.innerText;
                                    } else {
                                        location.href = 'http://localhost/TravelBooking_Project/my_tour.php?id=<?php echo $_GET['id']; ?>' + '&quantity='+inputNode.value+'&result=true' + '&total='+spanNode.innerText;
                                    }
                                },3500)
                            } else {
                                Swal.fire({
                                    position: 'center-center',
                                    icon: 'warning',
                                    title: 'Bạn cần chọn phương thức thanh toán',
                                    showConfirmButton: true
                                })
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>