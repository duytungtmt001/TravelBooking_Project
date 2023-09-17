<?php 
    class c_add{
        public function add_location(){
            include ("models/m_add.php");
            $m_add = new m_add();
            include("views/master.php");
            include("views/detail_content/v_add.php");            
        }

        public function add_tour(){
            include ("models/m_add.php");
            $m_add_tour = new m_add();
            include("views/master.php");
            include("views/detail_content/v_add_tour.php");            
        }

        public function add_product(){
            include ("models/m_add.php");
            $m_add_product = new m_add();
            include("views/master.php");
            include("views/detail_content/v_add_product.php");            
        }

        public function add_destination(){
            include ("models/m_add.php");
            $m_add_destination = new m_add();
            include("views/master.php");
            include("views/detail_content/v_add_destination.php");            
        }

        public function add_tour_detail(){
            include ("models/m_add.php");
            $m_add_tour_detail = new m_add();
            include("views/master.php");
            include("views/detail_content/v_add_tour_detail.php");            
        }

        public function add_product_info(){
            include ("models/m_add.php");
            $m_add_product_info = new m_add();
            include("views/master.php");
            include("views/detail_content/v_add_product_info.php");            
        }
    }
?>