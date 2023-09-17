<?php
    include_once ('database.php');
    class m_delete extends database {
        public function read_cart_by_id($id){
            $sql = "SELECT * from order_product WHERE id = ?";
            $this->setQuery($sql);
            return $this->loadRow(array($id));
        }

        public function delete_cart($id){
            $sql = "DELETE FROM order_product WHERE id = ?";
            $this->setQuery($sql);
            return $this->execute(array($id));
        }

        public function find_tour($tour_name) {
            $sql = "SELECT * from tour_detail WHERE tour_name LIKE '%$tour_name%'";
            $this->setQuery($sql);
            return $this->loadAllRows(array($tour_name));
        }
    }
?>