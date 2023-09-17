<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h3 class="page-title">Thêm sản phẩm mới</h3>
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
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên sản phẩm</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" placeholder="Name here" name="product_name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Giá</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="lname" placeholder="" name="price">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Mô tả</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" placeholder="" name="describes">
                                        </div>
                                    </div><div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Mã sản phẩm</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" placeholder="" name="sku">
                                        </div>
                                    </div><div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Thương hiệu</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" placeholder="" name="brand">
                                        </div>
                                    </div><div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Tình trạng</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" placeholder="" name="available">
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
                                    <a href="product_info.php" class="a--custom">Xem danh sách</a>
                                </div>
                            </form>

                            <?php
                                if(isset($_POST['btn-submit'])){
                                    $id = null;
                                    $product_name = $_POST['product_name'];
                                    $price = $_POST['price'];
                                    $describes = $_POST['describes'];
                                    $sku = $_POST['sku'];
                                    $brand = $_POST['brand'];
                                    $available = $_POST['available'];
                                    $img = ($_FILES['img']['error'] == 0) ? $_FILES['img']['name'] :"";
                                    $result = $m_add_product_info->insert_product_info($id,$product_name,$price,$describes,$sku,$brand,$available,$img);
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
        </div>