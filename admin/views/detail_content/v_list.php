<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h3 class="page-title">DANH SÁCH ĐỊA ĐIỂM</h3>
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
                        <a href="add.php" style="color: #fff; font-size: 17px;">Thêm</a>
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
                                color: #da542e;
                                font-size: 16px;
                            }
                        </style>
                        <table border="1px" cellpadding="20" style="width: 100%;" class="table--custom">
                            <tr align="center">
                                <th>STT</th>
                                <th>Địa điểm</th>
                                <th>Thời gian bắt đầu</th>
                                <th>Mô tả</th>
                                <th>Hình ảnh</th>
                                <th>Action</th>
                            </tr>
                            <?php 
                                foreach($location as $key=>$value) { 
                            ?>
                            <tr align="center">
                                <td> <?php echo $value->id; ?> </td>
                                <td><?php echo $value->location_name; ?></td>
                                <td><?php echo $value->time_start; ?></td>
                                <td><?php echo $value->destinations; ?></td>
                                <td><?php echo $value->img ?></td>
                                <td> 
                                    <a class="btn btn-info btn-sm" href="update.php?id= <?php echo $value->id; ?>">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>

                                    <a class="btn btn-info btn-sm" href="delete.php?id= <?php echo $value->id; ?>">
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