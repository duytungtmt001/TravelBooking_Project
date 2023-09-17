<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h3 class="page-title">Thêm Tour mới</h3>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <style>
                    .text-right {
                        text-align: left!important;
                    }

                </style>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên Tour</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" placeholder="Name here" name="tour_name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Thời gian</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" name="time_tour">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Giá</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" placeholder="" name="price">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="lname" name="img">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Mô tả</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="cono1" placeholder="Mô tả ở đây" name="destinations">
                                        </div>
                                    </div>
                                    
                                <div class="border-top">
                                    <div class="card-body" style="text-align: center;"> 
                                        <input type="submit" class="submit-add--custom" value="Add new" name="btn-submit" style="border: none; padding: 8px 28px; border-radius: 6px; background-color: #28b779; color: #fff;
                                        font-size: 16px; cursor: pointer;">
                                    </div>
                                    <style>
                                        .a--custom {
                                            color: #fff;
                                            background-color: #28b779;
                                            padding: 8px 12px;
                                            font-size: 16px;
                                            border-radius: 6px;
                                            display: inline-block;
                                            position: relative;
                                            top: -61px;
                                            left: 34px;
                                        }
                                    </style>
                                    <a href="tour.php" class="a--custom">Xem danh sách</a>
                                </div>
                            </form>

                            <?php
                                if(isset($_POST['btn-submit'])){
                                    $id = null;
                                    $tour_name = $_POST['tour_name'];
                                    $time_tour = $_POST['time_tour'];
                                    $price = $_POST['price'];
                                    $img = ($_FILES['img']['error'] == 0) ? $_FILES['img']['name'] :"";
                                    $destinations = $_POST['destinations'];
                                    $result = $m_add_tour->insert_tour($id,$tour_name,$time_tour,$price,$img,$destinations);
                                    if($result){
                                        move_uploaded_file($_FILES['img']['tmp_name'], "public/image_add/$img");
                                        echo "<script>
                                            alert('Thêm thành công!')
                                        </script>";
                                        
                                    }else{
                                        echo "<script>
                                        alert('Thêm ko thành công!')
                                            </script>";
                                    }
                                } 
                            ?>


                        </div>
                    </div>
                </div>


            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>