<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h3 class="page-title">DANH SÁCH CÁC SẢN PHẨM</h3>
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
                        <a href="add_product_info.php" style="color: #fff; font-size: 17px;">Thêm</a>
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
                                <th>Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Mô tả</th>
                                <th>Mã sản phẩm</th>
                                <th>Thương hiệu</th>
                                <th>Tình trạng</th>
                                <th>Hình ảnh</th>
                                <th>Action</th>
                            </tr>
                            <?php 
                                foreach($product_info as $key=>$value) { 
                            ?>
                            <tr align="center">
                                <td> <?php echo $value->id; ?> </td>
                                <td><?php echo $value->product_name; ?></td>
                                <td><?php echo $value->price . "$"; ?></td>
                                <td><?php echo $value->describes; ?></td>
                                <td><?php echo $value->sku; ?></td>
                                <td><?php echo $value->brand; ?></td>
                                <td><?php echo $value->available; ?></td>
                                <td><?php echo $value->img ?></td>
                                <td style="display: flex; justify-content: space-evenly; width: 100px; padding: 100% 0;"> 
                                    <a class="btn btn-info btn-sm" href="update_product_info.php?id= <?php echo $value->id; ?>" style="display: block; border-color: none; padding: 4px 8px;">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>

                                    <a class="btn btn-info btn-sm" href="delete_product_info.php?id= <?php echo $value->id; ?>" style="display: block; border-color: none; padding: 4px 8px;">
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
</div>