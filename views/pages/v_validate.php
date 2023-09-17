<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
    session_start();
    $hoten = $_POST['username'];
    $password = $_POST['password'];
    $tg = false;
    foreach($user2 as $key=>$value) {
        if($hoten == $value->hoten && $password == $value->password) {
            $_SESSION['hoten'] = $hoten; 
            $_SESSION['id'] = $value->id;
            $tg = true;
        }
    }
    if($tg) {
        echo '<script language="javascript">';
        echo 'location.href="index.php"';
        echo '</script>';
    } else {
        echo "Sai tên đăng nhập hoặc mật khẩu";
    }
?>
