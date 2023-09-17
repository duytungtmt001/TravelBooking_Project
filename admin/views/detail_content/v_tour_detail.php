<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h3 class="page-title">TOURS DETAIL</h3>
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
                        <a href="add_tour_detail.php" style="color: #fff; font-size: 17px;">Thêm</a>
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
                                <th>Tên Tour</th>
                                <th>Giá</th>
                                <th>Mô tả</th>
                                <th>Điểm đến</th>
                                <th>Duration</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Số người</th>
                                <th>Chỗ trống</th>
                                <th>Ảnh 1</th>
                                <th>Ảnh 2</th>
                                <th>Ảnh 3</th>
                                <th>Action</th>
                            </tr>
                            <?php 
                                foreach($tour_detail as $key=>$value) { 
                            ?>
                            <tr align="center">
                                <style>
                                    p {
                                        overflow: hidden;
                                        text-overflow: ellipsis;
                                        white-space: nowrap;
                                        max-width: 150px;
                                        padding: 0;
                                        margin: 0;
                                    }
                                </style>
                                <td> <?php echo $value->id; ?> </td>
                                <td><?php echo $value->tour_name; ?></td>
                                <td><?php echo $value->price . "$"; ?></td>
                                <td><p><?php echo $value->describes; ?></p></td>
                                <td><p><?php echo $value->destinations; ?></p></td>
                                <td><?php echo $value->duration; ?></td>
                                <td><?php echo $value->time_start; ?></td>
                                <td><?php echo $value->time_end; ?></td>
                                <td><?php echo $value->person; ?></td>
                                <td><?php echo $value->seat; ?></td>
                                <td><?php echo $value->img_1; ?></td>
                                <td><?php echo $value->img_2; ?></td>
                                <td><?php echo $value->img_3;?></td>
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