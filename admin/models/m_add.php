<?php 
    require_once ("database.php");
    class m_add extends database {
        public function insert_location($id,$location_name,$time_start,$destinations,$val,$img){
            $sql = "INSERT INTO locations VALUES (?,?,?,?,?,?)";
            $this->setQuery($sql);
            return $this->execute(array($id,$location_name,$time_start,$destinations,$val,$img));
        }

        public function insert_tour($id,$tour_name,$time_tour,$price,$img,$destinations){
            $sql = "INSERT INTO tours VALUES (?,?,?,?,?,?)";
            $this->setQuery($sql);
            return $this->execute(array($id,$tour_name,$time_tour,$price,$img,$destinations));
        }

        public function insert_product($id,$product_name,$price,$img){
            $sql = "INSERT INTO products VALUES (?,?,?,?)";
            $this->setQuery($sql);
            return $this->execute(array($id,$product_name,$price,$img));
        }

        public function insert_destination($id,$destination_name,$img_main,$img_1,$img_2,$img_3,$img_4,$img_5,$img_6,$img_7,$img_8,$destination_top,$destination_bot){
            $sql = "INSERT INTO destinations VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $this->setQuery($sql);
            return $this->execute(array($id,$destination_name,$img_main,$img_1,$img_2,$img_3,$img_4,$img_5,$img_6,$img_7,$img_8,$destination_top,$destination_bot));
        }

        public function insert_tour_detail($id,$tour_name,$price,$describes,$destinations,$duration,$time_start,$time_end,$person,$seat,$img_1,$img_2,$img_3){
            $sql = "INSERT INTO tour_detail VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $this->setQuery($sql);
            return $this->execute(array($id,$tour_name,$price,$describes,$destinations,$duration,$time_start,$time_end,$person,$seat,$img_1,$img_2,$img_3));
        }

        public function insert_product_info($id,$product_name,$price,$describes,$sku,$brand,$available,$img){
            $sql = "INSERT INTO product_info VALUES (?,?,?,?,?,?,?,?)";
            $this->setQuery($sql);
            return $this->execute(array($id,$product_name,$price,$describes,$sku,$brand,$available,$img));
        }
    }
?>