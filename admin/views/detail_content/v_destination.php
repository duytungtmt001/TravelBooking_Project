<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h3 class="page-title">DANH SÁCH DESTINATION</h3>
                <div class="ml-auto text-right">
                    <style>
                        .button--custom {
                            border: none; 
                            background-color: #28b779; 
                            border-radius: 6px; 
                            margin-right: 20px; 
                            padding: 8px 28px; 
                            cursor: pointer;    
                            opacity: 0.9;
                        }

                        .button--custom:hover {
                            opacity: 1;
                        }

                    </style>
                    <button class="button--custom">
                        <a href="add_destination.php" style="color: #fff; font-size: 17px;">Thêm</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <style>
                            .table--custom th {
                                color: #ef954e;
                                font-size: 16px;
                            }
                        </style>
                        <table border="1px" cellpadding="20" style="width: 100%;" class="table--custom">
                            <tr align="center">
                                <th>STT</th>
                                <th>Tên địa điểm</th>
                                <th>Ảnh chính</th>
                                <th>Ảnh 1</th>
                                <th>Ảnh 2</th>
                                <th>Ảnh 3</th>
                                <th>Ảnh 4</th>
                                <th>Ảnh 5</th>
                                <th>Ảnh 6</th>
                                <th>Ảnh 7</th>
                                <th>Ảnh 8</th>
                                <th>Mô tả trên</th>
                                <th>Mô tả dưới</th>
                                <th>Action</th>
                            </tr>
                            <?php 
                                foreach($destination as $key=>$value) { 
                            ?>
                            <tr align="center">
                                <td> <?php echo $value->id; ?> </td>
                                <td><?php echo $value->destination_name; ?></td>
                                <td><?php echo $value->img_main ?></td>
                                <td><?php echo $value->img_1 ?></td>
                                <td><?php echo $value->img_2 ?></td>
                                <td><?php echo $value->img_3 ?></td>
                                <td><?php echo $value->img_4 ?></td>
                                <td><?php echo $value->img_5 ?></td>
                                <td><?php echo $value->img_6 ?></td>
                                <td><?php echo $value->img_7 ?></td>
                                <td><?php echo $value->img_8 ?></td>
                                <td><p style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;max-width:150px;padding:0;margin:0;"><?php echo $value->destination_top ?></p></td>
                                <td><p style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;max-width:150px;padding:0;margin:0;"><?php echo $value->destination_bot ?></p></td>
                                <td style="display: flex; justify-content: space-evenly; width: 100px; padding: 100% 0;"> 
                                    <a class="btn btn-info btn-sm" href="update_tour_detail.php?id= <?php echo $value->id; ?>" style="display: block; border-color: none; padding: 4px 8px;">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>

                                    <a class="btn btn-info btn-sm" href="delete_tour_detail.php?id= <?php echo $value->id; ?>" style="display: block; border-color: none; padding: 4px 8px;">
                                    <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php 
                                } 
                            ?>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer text-center">
        All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
    </footer>
</div>