<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h3 class="page-title">Sửa thông tin mô tả</h3>
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
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên địa điểm</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" placeholder="Name here" name="destination_name" value="<?php echo $info->destination_name; ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh chính</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="lname" name="img_main">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh 1</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="lname" name="img_1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh 2</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="lname" name="img_2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh 3</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="lname" name="img_3">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh 4</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="lname" name="img_4">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh 5</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="lname" name="img_5">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh 6</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="lname" name="img_6">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh 7</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="lname" name="img_7">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh 8</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="lname" name="img_8">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Mô tả trên</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" name="destination_top" value="<?php echo $info->destination_top; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Mô tả dưới</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" name="destination_bot" value="<?php echo $info->destination_bot; ?>">
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
                                    <a href="destination.php" class="a--custom">Xem danh sách</a>
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