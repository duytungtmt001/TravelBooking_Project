<?php 
    class c_list {
        public function index(){         
            include("models/m_list.php");
            $m_list = new m_list();
            $location = $m_list->read_location();
            include("views/master.php");
            include("views/detail_content/v_list.php");
        }

        public function login(){         
            include("models/m_list.php");
            $m_list = new m_list();
            $login = $m_list->read_login();
            include("views/v_login.php");
        }

        public function index_tour() {
            include("models/m_list.php");
            $m_list = new m_list();
            $tour = $m_list->read_tour();
            include("views/master.php");
            include("views/detail_content/v_tour.php");
        }

        public function index_product() {
            include("models/m_list.php");
            $m_list = new m_list();
            $product = $m_list->read_product();
            include("views/master.php");
            include("views/detail_content/v_product.php");
        }

        public function index_destination() {
            include("models/m_list.php");
            $m_list = new m_list();
            $destination = $m_list->read_destination();
            include("views/master.php");
            include("views/detail_content/v_destination.php");
        }

        public function index_tour_detail() {
            include("models/m_list.php");
            $m_list = new m_list();
            $tour_detail = $m_list->read_tour_detail();
            include("views/master.php");
            include("views/detail_content/v_tour_detail.php");
        }

        public function index_product_info() {
            include("models/m_list.php");
            $m_list = new m_list();
            $product_info = $m_list->read_product_info();
            include("views/master.php");
            include("views/detail_content/v_product_info.php");
        }
    }
?>