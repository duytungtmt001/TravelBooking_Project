<?php
    if(isset($_SESSION['hoten'])) {
        unset($_SESSION['hoten']);
    };

    echo '<script language="javascript">';
    echo 'location.href="index.php"';
    echo '</script>';
?>