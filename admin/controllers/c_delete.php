<?php 
    class c_delete{
        public function delete_location(){
            include ("models/m_delete.php");
            // header("Location:index.php");
            include("views/master.php");
            include("views/detail_content/v_delete.php");    
        }
    }
?>