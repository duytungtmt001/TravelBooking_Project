<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
    if(isset($_POST['btn-submit'])) {
        $hoten = $_POST['username'];
        $password = $_POST['password'];
        $tg = false;
        foreach($user as $key=>$value) {
            if($hoten == $value->hoten && $password == $value->password) {
                $_SESSION['hoten'] = $hoten; 
                $_SESSION['id'] = $value->id;
                $tg = true;
            }
        }
        if($tg) {
            if(isset($_GET['go'])) {
                echo '<script language="javascript">';
                echo 'location.href="cart.php"';
                echo '</script>';
            } else {
                echo '<script language="javascript">';
                echo 'location.href="index.php"';
                echo '</script>';
            }
        } else {
            echo "<script language='javascript'>
                    Swal.fire({
                        icon: 'error',
                        text: 'Sai tên đăng nhập hoặc mật khẩu!',
                    })
                </script>";

        }
    }
?>

<header class="inner-page-header inner-page-header-4">
    <div class="inner-header-shape"></div>
    <div class="container">
        <div class="header-content m-auto">
            <h1>Đăng nhập</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Authentication</li>
                </ol>
            </nav>
        </div>
    </div>
</header>
    
<div class="authentication-section pb-100 position-relative">
    <div class="map-shapes d-none d-md-block">
        <div class="map-shape map-shape-2 map-shape-vertical-top">
            <img src="public/Project_TrvelBooking/templates.envytheme.com/traip/default/assets/images/shapes/map-2.png" alt="shape">
        </div>
    </div>
    <div class="container">
        
        <div class="authentication-header mb-30">
            <ul>
                <li data-authentication-list="2" class="active">Đăng nhập</li>
            </ul>
        </div>

        <div class="authentication-form-box">
            
            <div class="authentication-form-box-item active" data-authentication-item="2">
                <div class="authentication-box">
                    <!-- <form class="form-horizontal" id="form_input">
                        <input type="text" name="username">
                        <p id="error--custom-1"></p>
                        <input type="password" name="password">
                        <p id="error--custom-2"></p>
                        <button type="submit">Gửi</button>
                    </form> -->
                    <div class="authentication-box-inner">
                        <form class="authentication-form mb-20" id="form_input" action="" name="fr_form" method="POST" enctype= multipart/form-data>
                            <div class="input-group input-group-bg mb-20">
                                <input type="text" class="form-control" placeholder="Tên đăng nhập" aria-label="Username" name="username">
                            </div>
                            <p id="error--custom-1" style="color:red; margin: -12px 0 20px 6px;"></p>
                            <div class="input-group input-group-bg mb-20">
                                <input type="password" class="form-control" placeholder="Mật khẩu" aria-label="Username" name="password">
                            </div>  
                            <p id="error--custom-2" style="color:red; margin: -12px 0 20px 6px;"></p>
                            <p id="content" style="color:red; margin: -12px 0 20px 6px;"></p>
                            <div class="authentication-account-access mb-20">
                                <div class="authentication-account-access-item">
                                    <div class="input-checkbox">
                                        <input type="checkbox" id="check2">
                                        <label for="check2">Nhớ mật khẩu!</label>
                                    </div>
                                </div>
                                <div class="authentication-account-access-item">
                                    <div class="authentication-link">
                                        <a href="forget-password.html">Quên mật khẩu?</a>
                                    </div>
                                </div>
                            </div>
                            <button type='submit' name="btn-submit"  class="btn main-btn main-btn-secondary full-width">Đăng nhập</button>
                        </form> 
                                                                      
                    </div>
                    

                    <div class="authentication-divider">
                        <span>hoặc</span>
                    </div>
                    <ul style="display: flex; list-style: none; justify-content:center; padding: 0;">
                        <li class="dtbeo-dz">
                            <a href="register.php" style="font-size: 18px;">Đăng ký ngay</a>
                        </li>
                        <style>
                                .dtbeo-dz:hover a {
                                    color: #f05123;
                                }
                        </style>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() { 
        //khai báo biến submit form lấy đối tượng nút submit
        var submit = $("button[type='submit']");
        var user = $("input[name='username']");
        var pass = $("input[name='password']");
        var userValue = $("input[name='username']").val();
        var passValue = $("input[name='password']").val();

        user.blur(function() {
            if(user.val() == '') {
                $('#error--custom-1').html('Vui lòng nhập trường này');
            }
        })

        pass.blur(function() {
            if(pass.val() == '') {
                $('#error--custom-2').html('Vui lòng nhập trường này');
            }
        })

        user.keydown(function() {
            $('#error--custom-1').html('');
        })

        pass.keydown(function() {
            $('#error--custom-2').html('');
        })

        //khi nút submit được click
        submit.click(function() {
            //Kiểm tra xem trường đã được nhập hay chưa
            if(user.val() == ''){
                $('#error--custom-1').html('Vui lòng nhập trường này');
                if(pass.val() == '') {
                    $('#error--custom-2').html('Vui lòng nhập trường này');
                }
                return false;
            }

            //Lấy toàn bộ dữ liệu trong Form
            var data = $('form#form_input').serialize();

            //Sử dụng phương thức Ajax.
            $.ajax({
                type : 'POST', //Sử dụng kiểu gửi dữ liệu POST
                url : 'validate.php', //gửi dữ liệu sang trang data.php
                data : data, //dữ liệu sẽ được gửi
                success : function(data)  // Hàm thực thi khi nhận dữ liệu được từ server
                        { 
                            if(data == 'false') 
                            {
                                alert('Không có người dùng');
                            }else{
                                $('#content').html(data); 
                            }
                        }
                });
            return false;
        });

        
    });
</script>


