<?php 
    include_once("database.php");
    class m_list extends database{
        public function read_location(){
            $sql = "SELECT * from locations";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }

        public function read_tour(){
            $sql = "SELECT * from tours";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }

        public function read_product(){
            $sql = "SELECT * from products";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }

        public function read_destination(){
            $sql = "SELECT * from destinations";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }

        public function read_tour_detail(){
            $sql = "SELECT * from tour_detail";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }

        public function read_product_info(){
            $sql = "SELECT * from product_info";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }

        public function read_login(){
            $sql = "SELECT * from login_admin";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }
    }
?>