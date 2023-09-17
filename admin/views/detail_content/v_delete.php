<?php
    $m_delete = new m_delete();
    if(isset($_GET['id'])){
        $delete = $m_delete->delete_location_by_id($_GET['id']);
        $delete = $m_delete->delete_location($_GET['id']);
    } 
?>