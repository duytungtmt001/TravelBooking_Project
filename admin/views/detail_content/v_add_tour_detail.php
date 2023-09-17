<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h3 class="page-title">Thêm Tour Detail mới</h3>
                    </div>
                </div>
            </div>

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
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Giá</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" placeholder="" name="price">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Mô tả</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="cono1" placeholder="Mô tả ở đây" name="describes">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Điểm đến</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="cono1" placeholder="" name="destinations">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Duration</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="cono1" placeholder="" name="duration">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Start</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="cono1" name="time_start">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">End</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="cono1" name="time_end">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Số người</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="cono1" name="person">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Ghế trống</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="cono1" name="seat">
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
                                    <a href="tour_detail.php" class="a--custom">Xem danh sách</a>
                                </div>
                            </form>

                            <?php
                                if(isset($_POST['btn-submit'])){
                                    $id = null;
                                    $tour_name = $_POST['tour_name'];
                                    $price = $_POST['price'];
                                    $describes = $_POST['describes'];
                                    $destinations = $_POST['destinations'];
                                    $duration = $_POST['duration'];
                                    $time_start = $_POST['time_start'];
                                    $time_end = $_POST['time_end'];
                                    $person = $_POST['person'];
                                    $seat = $_POST['seat'];
                                    $img_1 = ($_FILES['img_1']['error'] == 0) ? $_FILES['img_1']['name'] :"";
                                    $img_2 = ($_FILES['img_2']['error'] == 0) ? $_FILES['img_2']['name'] :"";
                                    $img_3 = ($_FILES['img_3']['error'] == 0) ? $_FILES['img_3']['name'] :"";
                                    $result = $m_add_tour_detail->insert_tour_detail($id,$tour_name,$price,$describes,$destinations,$duration,$time_start,$time_end,$person,$seat,$img_1,$img_2,$img_3);
                                    if($result){
                                        move_uploaded_file($_FILES['img_1']['tmp_name'], "public/image_add/$img_1");
                                        move_uploaded_file($_FILES['img_2']['tmp_name'], "public/image_add/$img_2");
                                        move_uploaded_file($_FILES['img_3']['tmp_name'], "public/image_add/$img_3");
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
        </div>