<?php
    require_once ("database.php");
    class m_delete extends database {
        public function delete_location_by_id($id){
            $sql = "SELECT * from locations WHERE id = ?";
            $this->setQuery($sql);
            return $this->loadRow(array($id));
        }

        public function delete_location($id){
            $sql = "DELETE FROM locations WHERE id = ?";
            $this->setQuery($sql);
            return $this->execute(array($id));
        }

    }
?>