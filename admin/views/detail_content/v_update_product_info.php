<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h3 class="page-title">Sửa thông tin sản phẩm</h3>
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
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên sản phẩm</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" value="<?php echo $info->product_name; ?>" name="product_name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Giá</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="lname" value="<?php echo $info->price; ?>" name="price">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Mô tả</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" value="<?php echo $info->describes ?>" name="describes">
                                        </div>
                                    </div><div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Mã sản phẩm</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" value="<?php echo $info->sku ?>" name="sku">
                                        </div>
                                    </div><div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Thương hiệu</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" value="<?php echo $info->brand ?>" name="brand">
                                        </div>
                                    </div><div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Tình trạng</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" value="<?php echo $info->available ?>" name="available">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="lname" name="img">
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
                                    <a href="product_info.php" class="a--custom">Xem danh sách</a>
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