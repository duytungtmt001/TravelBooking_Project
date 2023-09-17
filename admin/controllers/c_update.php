<?php
    class c_update {
        public function update_location(){
            include ("models/m_update.php");
            $m_update = new m_update();
            if(isset($_GET['id'])){
                $info = $m_update->read_location_by_id($_GET['id']);
                include("views/master.php");
                include ("views/detail_content/v_update.php");
                if(isset($_POST['btn-submit'])){
                    $id= $_GET['id'];
                    $location_name = $_POST['location_name'];
                    $time_start = $_POST['time_start'];
                    $destinations = $_POST['destinations'];
                    $val = $_POST['val'];
                    $img = ($_FILES['img']['error'] == 0) ? $_FILES['img']['name'] :"";
                    $result = $m_update->update_location($id,$location_name,$time_start,$destinations,$val,$img);
                    if($result){
                        if($_FILES['img']['error']==0){
                            move_uploaded_file($_FILES['img']['tmp_name'],"public/image_add/$img");
                        }
                        echo "<script> alert('cập nhật thành công!') </script>";
                    } else {
                        "<script>
                                alert('cập nhật ko thành công!')
                            </script>";
                    };
                }
            }
        }

        public function update_tour(){
            include ("models/m_update.php");
            $m_update = new m_update();
            if(isset($_GET['id'])){
                $info = $m_update->read_tour_by_id($_GET['id']);
                include("views/master.php");
                include ("views/detail_content/v_update_tour.php");
                if(isset($_POST['btn-submit'])){
                    $id= $_GET['id'];
                    $tour_name = $_POST['tour_name'];
                    $time_tour = $_POST['time_tour'];
                    $price = $_POST['price'];
                    $img = ($_FILES['img']['error'] == 0) ? $_FILES['img']['name'] :"";
                    $destinations = $_POST['destinations'];
                    $result = $m_update->update_tour($id,$tour_name,$time_tour,$price,$img,$destinations);
                    if($result){
                        if($_FILES['img']['error']==0){
                            move_uploaded_file($_FILES['img']['tmp_name'],"public/image_add/$img");
                        }
                        echo "<script> alert('cập nhật thành công!') </script>";
                    } else {
                        "<script>
                                alert('cập nhật ko thành công!')
                            </script>";
                    };
                }
            }
        }

        public function update_product(){
            include ("models/m_update.php");
            $m_update = new m_update();
            if(isset($_GET['id'])){
                $info = $m_update->read_product_by_id($_GET['id']);
                include("views/master.php");
                include ("views/detail_content/v_update_product.php");
                if(isset($_POST['btn-submit'])){
                    $id= $_GET['id'];
                    $product_name = $_POST['product_name'];
                    $price = $_POST['price'];
                    $img = ($_FILES['img']['error'] == 0) ? $_FILES['img']['name'] :"";
                    $result = $m_update->update_product($id,$product_name,$price,$img);
                    if($result){
                        if($_FILES['img']['error']==0){
                            move_uploaded_file($_FILES['img']['tmp_name'],"public/image_add/$img");
                        }
                        echo "<script> alert('cập nhật thành công!') </script>";
                    } else {
                        "<script>
                                alert('cập nhật ko thành công!')
                            </script>";
                    };
                }
            }
        }

        public function update_destination(){
            include ("models/m_update.php");
            $m_update = new m_update();
            if(isset($_GET['id'])){
                $info = $m_update->read_destination_by_id($_GET['id']);
                include("views/master.php");
                include ("views/detail_content/v_update_destination.php");
                if(isset($_POST['btn-submit'])){
                    $id= $_GET['id'];
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
                    $result = $m_update->update_destination($id,$destination_name,$img_main,$img_1,$img_2,$img_3,$img_4,$img_5,$img_6,$img_7,$img_8,$destination_top,$destination_bot);
                    if($result){
                        if($_FILES['img']['error']==0
                            && $_FILES['img_1']['error']==0
                            && $_FILES['img_2']['error']==0
                            && $_FILES['img_3']['error']==0
                            && $_FILES['img_4']['error']==0
                            && $_FILES['img_5']['error']==0
                            && $_FILES['img_6']['error']==0
                            && $_FILES['img_7']['error']==0
                            && $_FILES['img_8']['error']==0
                        ){
                            move_uploaded_file($_FILES['img']['tmp_name'],"public/image_add/$img");
                            move_uploaded_file($_FILES['img_1']['tmp_name'], "public/image_add/$img_1");
                            move_uploaded_file($_FILES['img_2']['tmp_name'], "public/image_add/$img_2");
                            move_uploaded_file($_FILES['img_3']['tmp_name'], "public/image_add/$img_3");
                            move_uploaded_file($_FILES['img_4']['tmp_name'], "public/image_add/$img_4");
                            move_uploaded_file($_FILES['img_5']['tmp_name'], "public/image_add/$img_5");
                            move_uploaded_file($_FILES['img_5']['tmp_name'], "public/image_add/$img_6");
                            move_uploaded_file($_FILES['img_5']['tmp_name'], "public/image_add/$img_7");
                            move_uploaded_file($_FILES['img_5']['tmp_name'], "public/image_add/$img_8");
                        }
                        echo "<script> alert('cập nhật thành công!') </script>";
                    } else {
                        "<script>
                                alert('cập nhật ko thành công!')
                            </script>";
                    };
                }
            }
        }

        public function update_tour_detail(){
            include ("models/m_update.php");
            $m_update = new m_update();
            if(isset($_GET['id'])){
                $info = $m_update->read_tour_detail_by_id($_GET['id']);
                include("views/master.php");
                include ("views/detail_content/v_update_tour_detail.php");
                if(isset($_POST['btn-submit'])){
                    $id= $_GET['id'];
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
                    $result = $m_update->update_tour_detail($id,$tour_name,$price,$describes,$destinations,$duration,$time_start,$time_end,$person,$seat,$img_1,$img_2,$img_3);
                    if($result){
                        if( $_FILES['img_1']['error']==0
                            && $_FILES['img_2']['error']==0
                            && $_FILES['img_3']['error']==0
                        ){
                            move_uploaded_file($_FILES['img_1']['tmp_name'], "public/image_add/$img_1");
                            move_uploaded_file($_FILES['img_2']['tmp_name'], "public/image_add/$img_2");
                            move_uploaded_file($_FILES['img_3']['tmp_name'], "public/image_add/$img_3");
                        }
                        echo "<script> alert('cập nhật thành công!') </script>";
                    } else {
                        "<script>
                                alert('cập nhật ko thành công!')
                            </script>";
                    };
                }
            }
        }

        public function update_product_info(){
            include ("models/m_update.php");
            $m_update = new m_update();
            if(isset($_GET['id'])){
                $info = $m_update->read_product_info_by_id($_GET['id']);
                include("views/master.php");
                include ("views/detail_content/v_update_product_info.php");
                if(isset($_POST['btn-submit'])){
                    $id= $_GET['id'];
                    $product_name = $_POST['product_name'];
                    $price = $_POST['price'];
                    $describes = $_POST['describes'];
                    $sku = $_POST['sku'];
                    $brand = $_POST['brand'];
                    $available = $_POST['available'];
                    $img = ($_FILES['img']['error'] == 0) ? $_FILES['img']['name'] :"";
                    $result = $m_update->update_product_info($id,$product_name,$price,$describes,$sku,$brand,$available,$img);
                    if($result){
                        if($_FILES['img']['error']==0){
                            move_uploaded_file($_FILES['img']['tmp_name'],"public/image_add/$img");
                        }
                        echo "<script> alert('cập nhật thành công!') </script>";
                    } else {
                        "<script>
                                alert('cập nhật ko thành công!')
                            </script>";
                    };
                }
            }
        }
    } 
?>
