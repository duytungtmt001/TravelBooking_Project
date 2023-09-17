<?php
    include_once ('database.php');
    class m_home extends database {
        public function read_location() {
            $sql = "SELECT * FROM locations";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }

        public function read_tour() {
            $sql = "SELECT * FROM tours";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }

        public function read_product() {
            $sql = "SELECT * FROM products";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }

        public function read_destination() {
            $sql = "SELECT * FROM destinations";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }

        public function read_tour_detail() {
            $sql = "SELECT * FROM tour_detail";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }

        public function read_product_info() {
            $sql = "SELECT * FROM product_info";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }

        public function read_user() {
            $sql = "SELECT * FROM user";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }

        public function read_cart() {
            $sql = "SELECT * FROM order_product";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }

        public function read_bookingtour() {
            $sql = "SELECT * FROM booking_tour";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }

        public function add_user($id,$fullname,$phone,$email,$address,$hoten,$password){
            $sql = "INSERT INTO user VALUES (?,?,?,?,?,?,?)";
            $this->setQuery($sql);
            return $this->execute(array($id,$fullname,$phone,$email,$address,$hoten,$password));
        }

        public function add_cart($id,$user_id,$product_id,$quantity){
            $sql = "INSERT INTO order_product VALUES (?,?,?,?)";
            $this->setQuery($sql);
            return $this->execute(array($id,$user_id,$product_id,$quantity));
        }

        public function add_tour($id,$user_id,$tour_id,$quantity,$total_price,$time){
            $sql = "INSERT INTO booking_tour VALUES (?,?,?,?,?,?)";
            $this->setQuery($sql);
            return $this->execute(array($id,$user_id,$tour_id,$quantity,$total_price,$time));
        }

    }
?>