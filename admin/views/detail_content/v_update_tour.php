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
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Thời gian</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="cono1" name="time_tour" value="<?php echo $info->time_tour; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Price</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="cono1" name="price" value="<?php echo $info->price; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="lname" name="img">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Destinations</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" name="destinations" value="<?php echo $info->destinations; ?>">
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
                                    <a href="tour.php" class="a--custom">Xem danh sách</a>
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