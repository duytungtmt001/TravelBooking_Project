<?php
    require_once ("database.php");
    class m_update extends database {
        public function read_location_by_id($id){
            $sql = "SELECT * from locations WHERE id = ?";
            $this->setQuery($sql);
            return $this->loadRow(array($id));
        }

        public function read_tour_by_id($id){
            $sql = "SELECT * from tours WHERE id = ?";
            $this->setQuery($sql);
            return $this->loadRow(array($id));
        }

        public function read_product_by_id($id){
            $sql = "SELECT * from products WHERE id = ?";
            $this->setQuery($sql);
            return $this->loadRow(array($id));
        }

        public function read_destination_by_id($id){
            $sql = "SELECT * from destinations WHERE id = ?";
            $this->setQuery($sql);
            return $this->loadRow(array($id));
        }

        public function read_tour_detail_by_id($id){
            $sql = "SELECT * from tour_detail WHERE id = ?";
            $this->setQuery($sql);
            return $this->loadRow(array($id));
        }

        public function read_product_info_by_id($id){
            $sql = "SELECT * from product_info WHERE id = ?";
            $this->setQuery($sql);
            return $this->loadRow(array($id));
        }

        public function update_location($id,$location_name,$time_start,$destinations,$val,$img){
            $sql = "UPDATE locations SET location_name = ?,time_start = ?,destinations = ?,val = ?,img = ? WHERE id = ?";
            $this->setQuery($sql);
            return $this->execute(array($location_name,$time_start,$destinations,$val,$img,$id));
        }

        public function update_tour($id,$tour_name,$time_tour,$price,$img,$destinations){
            $sql = "UPDATE tours SET tour_name = ?,time_tour = ?,price = ?,img = ?,destinations = ? WHERE id = ?";
            $this->setQuery($sql);
            return $this->execute(array($tour_name,$time_tour,$price,$img,$destinations,$id));
        }

        public function update_product($id,$product_name,$price,$img){
            $sql = "UPDATE products SET product_name = ?,price = ?,img = ? WHERE id = ?";
            $this->setQuery($sql);
            return $this->execute(array($product_name,$price,$img,$id));
        }

        public function update_destination($id,$destination_name,$img_main,$img_1,$img_2,$img_3,$img_4,$img_5,$img_6,$img_7,$img_8,$destination_top,$destination_bot){
            $sql = "UPDATE destinations SET destination_name = ?,img_main = ?,img_1 = ?,img_2 = ?,img_3 = ?,img_4 = ?,img_5 = ?,img_6 = ?,img_7 = ?,img_8 = ?,destination_top = ?,destination_bot = ? WHERE id = ?";
            $this->setQuery($sql);
            return $this->execute(array($destination_name,$img_main,$img_1,$img_2,$img_3,$img_4,$img_5,$img_6,$img_7,$img_8,$destination_top,$destination_bot,$id));
        }

        public function update_tour_detail($id,$tour_name,$price,$describes,$destinations,$duration,$time_start,$time_end,$person,$seat,$img_1,$img_2,$img_3){
            $sql = "UPDATE tour_detail SET tour_name = ?,price = ?,describes = ?,destinations = ?,duration = ?,time_start = ?,time_end = ?,person = ?,seat = ?,img_1 = ?,img_2 = ?,img_3 = ? WHERE id = ?";
            $this->setQuery($sql);
            return $this->execute(array($tour_name,$price,$describes,$destinations,$duration,$time_start,$time_end,$person,$seat,$img_1,$img_2,$img_3,$id));
        }

        public function update_product_info($id,$product_name,$price,$describes,$sku,$brand,$available,$img){
            $sql = "UPDATE product_info SET product_name = ?,price = ?,describes = ?,sku = ?,brand = ?,available = ?,img = ? WHERE id = ?";
            $this->setQuery($sql);
            return $this->execute(array($product_name,$price,$describes,$sku,$brand,$available,$img,$id));
        }
    }
?>