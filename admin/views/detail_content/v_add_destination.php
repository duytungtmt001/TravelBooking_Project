<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h3 class="page-title">Thêm Destination mới</h3>
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
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên địa điểm</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" placeholder="Name here" name="destination_name">
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
                                            <input type="text" class="form-control" id="lname" name="destination_top">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Mô tả dưới</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" name="destination_bot">
                                        </div>
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
                                    <a href="destination.php" class="a--custom">Xem danh sách</a>
                                </div>
                            </form>

                            <?php
                                if(isset($_POST['btn-submit'])){
                                    $id = null;
                                    $destination_name = $_POST['destination_name'];
                                    $img_main = ($_FILES['img_main']['error'] == 0) ? $_FILES['img_main']['name'] :"";
                                    $img_1 = ($_FILES['img_1']['error'] == 0) ? $_FILES['img_1']['name'] :"";
                                    $img_2 = ($_FILES['img_2']['error'] == 0) ? $_FILES['img_2']['name'] :"";
                                    $img_3 = ($_FILES['img_3']['error'] == 0) ? $_FILES['img_3']['name'] :"";
                                    $img_4 = ($_FILES['img_4']['error'] == 0) ? $_FILES['img_4']['name'] :"";
                                    $img_5 = ($_FILES['img_5']['error'] == 0) ? $_FILES['img_5']['name'] :"";
                                    $img_6 = ($_FILES['img_6']['error'] == 0) ? $_FILES['img_6']['name'] :"";
                                    $img_7 = ($_FILES['img_7']['error'] == 0) ? $_FILES['img_7']['name'] :"";
                                    $img_8 = ($_FILES['img_8']['error'] == 0) ? $_FILES['img_8']['name'] :"";
                                    $destination_top = $_POST['destination_top'];
                                    $destination_bot = $_POST['destination_bot'];
                                    $result = $m_add_destination->insert_destination($id,$destination_name,$img_main,$img_1,$img_2,$img_3,$img_4,$img_5,$img_6,$img_7,$img_8,$destination_top,$destination_bot);
                                    if($result){
                                        move_uploaded_file($_FILES['img_main']['tmp_name'], "public/image_add/$img_main");
                                        move_uploaded_file($_FILES['img_1']['tmp_name'], "public/image_add/$img_1");
                                        move_uploaded_file($_FILES['img_2']['tmp_name'], "public/image_add/$img_2");
                                        move_uploaded_file($_FILES['img_3']['tmp_name'], "public/image_add/$img_3");
                                        move_uploaded_file($_FILES['img_4']['tmp_name'], "public/image_add/$img_4");
                                        move_uploaded_file($_FILES['img_5']['tmp_name'], "public/image_add/$img_5");
                                        move_uploaded_file($_FILES['img_6']['tmp_name'], "public/image_add/$img_6");
                                        move_uploaded_file($_FILES['img_7']['tmp_name'], "public/image_add/$img_7");
                                        move_uploaded_file($_FILES['img_8']['tmp_name'], "public/image_add/$img_8");
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