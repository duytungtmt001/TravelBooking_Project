<?php 
    class c_home{
        public function index(){
            include "models/m_home.php";
            $m_home = new m_home();
            $location = $m_home->read_location();
            $tour = $m_home->read_tour();
            $product = $m_home->read_product();
            $hoten = $m_home->read_user();
            $view = "views/home/v_home.php";
            include("templates/frontend/layout.php");
        }

        public function c_destination(){
            include ("models/m_home.php");
            $m_destination = new m_home();
            $destinations = $m_destination->read_destination();
            $hoten = $m_destination->read_user();
            $view = "views/pages/v_destination_detail.php";
            include("templates/frontend/layout.php");
        }

        public function c_location(){
            include ("models/m_home.php");
            $m_location = new m_home();
            $locations = $m_location->read_location();
            $hoten = $m_location->read_user();
            $view = "views/pages/v_destination.php";
            include("templates/frontend/layout.php");
        }

        public function c_product(){
            include ("models/m_home.php");
            $m_product = new m_home();
            $products = $m_product->read_product();
            $hoten = $m_product->read_user();
            $view = "views/pages/v_product.php";
            include("templates/frontend/layout.php");
        }

        public function c_tour(){
            include ("models/m_home.php");
            $m_tour = new m_home();
            $tours = $m_tour->read_tour();
            $hoten = $m_tour->read_user();
            $view = "views/pages/v_tour.php";
            include("templates/frontend/layout.php");
        }

        public function c_tour_detail(){
            include ("models/m_home.php");
            $m_tour = new m_home();
            $tour_detail = $m_tour->read_tour_detail();
            $hoten = $m_tour->read_user();
            $view = "views/pages/v_tour_detail.php";
            include("templates/frontend/layout.php");
        }

        public function c_product_info(){
            include ("models/m_home.php");
            $m_tour = new m_home();
            $product_info = $m_tour->read_product_info();
            $hoten = $m_tour->read_user();
            $view = "views/pages/v_product_info.php";
            include("templates/frontend/layout.php");
        }

        public function c_login_user(){
            include ("models/m_home.php");
            $m_login = new m_home();
            $user = $m_login->read_user();
            $view = "views/pages/v_login_user.php";
            include("templates/frontend/layout.php");
        }

        public function c_logout(){
            include ("models/m_home.php");
            $m_logout = new m_home();
            $hoten = $m_logout->read_user();
            $view = "views/pages/v_logout.php";
            include("templates/frontend/layout.php");
        }

        public function register_user(){
            include ("models/m_home.php");
            $m_register = new m_home();
            $user = $m_register->read_user();
            $view = "views/pages/v_register.php";
            include("templates/frontend/layout.php");
        }

        public function c_booking_tour(){
            include ("models/m_home.php");
            $m_booking = new m_home();
            $hoten = $m_booking->read_user();
            $tour_detail = $m_booking->read_tour_detail();
            $view = "views/pages/v_booking_tour.php";
            include("templates/frontend/layout.php");
        }

        public function c_cart(){
            include ("models/m_home.php");
            $m_cart = new m_home();
            // $cart = $m_cart->read_cart()
            $products = $m_cart->read_product();
            $cart = $m_cart->read_cart();
            $hoten = $m_cart->read_user();
            $view = "views/pages/v_cart.php";
            include("templates/frontend/layout.php");
        }

        public function c_contact(){
            include ("models/m_home.php");
            $m_contact = new m_home();
            $hoten = $m_contact->read_user();
            $view = "views/pages/v_contact.php";
            include("templates/frontend/layout.php");
        }

        public function c_mytour(){
            include ("models/m_home.php");
            $m_mytour = new m_home();
            $hoten = $m_mytour->read_user();
            $tours = $m_mytour->read_tour();
            $mytour = $m_mytour->read_bookingtour();
            $view = "views/pages/v_my_tour.php";
            include("templates/frontend/layout.php");
        }

        public function c_validate() {
            include ("models/m_home.php");
            $m_validate = new m_home();  
            $user2 = $m_validate->read_user();
            include("views/pages/v_validate.php");
        }

        public function c_validate_register() {
            include ("models/m_home.php");
            $m_validate_register = new m_home();  
            $user3 = $m_validate_register->read_user();
            include("views/pages/v_validate_register.php");
        }

    }
?>