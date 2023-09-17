<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h3 class="page-title">Sửa thông tin Tour</h3>
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
                        text-align: center!important;
                    }
                </style>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                        <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                            <style>
                                .text-right {
                                    text-align: left !important;
                                }
                            </style>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên Tour</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" placeholder="Name here" name="tour_name" value="<?php echo $info->tour_name; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Giá</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" placeholder="" name="price" value="<?php echo $info->price; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Mô tả</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="cono1" placeholder="Mô tả ở đây" name="describes" value="<?php echo $info->describes; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Điểm đến</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="cono1" placeholder="" name="destinations" value="<?php echo $info->destinations; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Duration</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="cono1" placeholder="" name="duration" value="<?php echo $info->duration; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Start</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="cono1" name="time_start" value="<?php echo $info->time_start; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">End</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="cono1" name="time_end" value="<?php echo $info->time_end; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Số người</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="cono1" name="person" value="<?php echo $info->person; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Ghế trống</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="cono1" name="seat" value="<?php echo $info->seat; ?>">
                                        </div>
                                    </div>                               
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh 1</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="lname" name="img_1" value="<?php echo $info->img_1 ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh 2</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="lname" name="img_2" value="<?php echo $info->img_2 ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh 3</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="lname" name="img_3" value="<?php echo $info->img_3 ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body" style="text-align: center;"> 
                                        <input type="submit" class="submit-add--custom" value="Update" name="btn-submit" style="border: none; padding: 8px 28px; border-radius: 6px; background-color: #28b779; color: #fff;
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
                                            top: -60px;
                                            left: 30px;
                                        }
                                    </style>
                                    <a href="tour_detail.php" class="a--custom">Xem danh sách</a>
                                </div>
                            </form>
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