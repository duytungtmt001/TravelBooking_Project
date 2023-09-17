<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php  
    $id = null;
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $hoten = $_POST['hoten'];
    $password = $_POST['password'];
    foreach($user3 as $key => $value) {
        if($hoten == $value->hoten) {
            echo "Tên tài khoản đã tồn tại";
            die();
        }
    }
    $result = $m_validate_register->add_user($id,$fullname,$phone,$email,$address,$hoten,$password);
    echo 
        "<script>
            Swal.fire({
                icon: 'success',
                title: 'Đăng ký thành công',
                showConfirmButton: false,
                footer: '<a href=login_user.php>Đăng nhập ngay</a>',  
                })
        </script>";

?>