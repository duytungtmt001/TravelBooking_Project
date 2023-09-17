
<header class="inner-page-header inner-page-header-4">
    <div class="inner-header-shape"></div>
    <div class="container">
        <div class="header-content m-auto">
            <h1>Đăng ký</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Authentication</li>
                </ol>
            </nav>
        </div>
    </div>
</header>

<div id="content"></div>
    
<div class="authentication-section pb-100 position-relative">
    <div class="map-shapes d-none d-md-block">
        <div class="map-shape map-shape-2 map-shape-vertical-top">
            <img src="public/Project_TrvelBooking/templates.envytheme.com/traip/default/assets/images/shapes/map-2.png" alt="shape">
        </div>
    </div>
    <div class="container">
        
        <div class="authentication-header mb-30">
            <ul>
                <li data-authentication-list="1" id="register--btn">Đăng ký</li>
            </ul>
            <script>
                window.onload = function() {
                    document.getElementById('register--btn').click();
                }
            </script>
        </div>

        <div class="authentication-form-box">
            <div class="authentication-form-box-item" data-authentication-item="1">
                <div class="authentication-box">
                    <div class="authentication-box-inner">
                        <form class="authentication-form mb-20" id="form_input" action="" name="fr_form" method="POST" enctype= multipart/form-data>
                            <div class="input-group input-group-bg mb-20">
                                <input type="text" class="form-control" placeholder="Họ và tên" aria-label="Username" name="fullname">
                            </div>
                            <p id="error--custom-1" style="color:red; font-size: 14px; margin: -10px 0 18px 6px"></p>
                            <div class="input-group input-group-bg mb-20">
                                <input type="text" class="form-control" placeholder="Số điện thoại" aria-label="Username" name="phone">
                            </div>
                            <p id="error--custom-2" style="color:red; font-size: 14px; margin: -10px 0 18px 6px"></p>
                            <div class="input-group input-group-bg mb-20">
                                <input type="email" class="form-control" placeholder="Email" aria-label="Username" name="email">
                            </div>
                            <p id="error--custom-3" style="color:red; font-size: 14px; margin: -10px 0 18px 6px"></p>
                            <div class="input-group input-group-bg mb-20">
                                <input type="text" class="form-control" placeholder="Địa chỉ" aria-label="Username" name="address">
                            </div>
                            <p id="error--custom-4" style="color:red; font-size: 14px; margin: -10px 0 18px 6px"></p>
                            <div class="input-group input-group-bg mb-20">
                                <input type="text" class="form-control" placeholder="Tên đăng nhập" aria-label="Username" name="hoten">
                            </div>
                            <p id="error--custom-5" style="color:red; font-size: 14px; margin: -10px 0 18px 6px"></p>
                            <div class="input-group input-group-bg mb-20">
                                <input type="password" class="form-control" placeholder="Mật khẩu" aria-label="Username" name="password">
                            </div>
                            <p id="error--custom-6" style="color:red; font-size: 14px; margin: -10px 0 18px 6px"></p>
                            <div class="authentication-account-access mb-20">
                                <div class="authentication-account-access-item">
                                    <div class="input-checkbox">
                                        <input type="checkbox" id="check1">
                                        <!-- <label for="check1">Accept <a href="terms-conditions.html">terms & conditions</a> & <a href="privacy-policy.html">privacy policy</a>.</label> -->
                                        <label for="check1">Tôi đã đọc tất cả <a href="terms-condition.html">các điều khoản & điều kiện</a> & <a href="privacy-policy.html">chính sách bảo mật.</a>.</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn main-btn main-btn-lg full-width" name="btn-submit-register">Đăng ký ngay</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() { 
        //khai báo biến submit form lấy đối tượng nút submit
        var submit = $("button[name='btn-submit-register']");
        var fullname = $("input[name='fullname']");
        var phone = $("input[name='phone']");
        var email = $("input[name='email']");
        var address = $("input[name='address']");
        var hoten = $("input[name='hoten']");
        var pass = $("input[name='password']");
        var userValue = $("input[name='username']").val();
        var passValue = $("input[name='password']").val();

        var formatName = /^[A-Za-z0-9_\.]{6,32}$/;
        var formatPhone = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
        var formatEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var formatPass = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

        fullname.blur(function() {
            if(fullname.val() == '') {
                $('#error--custom-1').html("Vui lòng nhập trường này");
            }
        })

        phone.blur(function() {
            if(phone.val() == '') {
                $('#error--custom-2').html("Vui lòng nhập trường này");
            } else {
                if(!formatPhone.test(phone.val())) {
                    $('#error--custom-2').html("Số điện thoại không hợp lệ");
                }
            }
        })
        
        email.blur(function() {
            if(email.val() == '') {
                $('#error--custom-3').html("Vui lòng nhập trường này");
            } else {
                if(!formatEmail.test(email.val())) {
                    $('#error--custom-3').html("Email không hợp lệ");
                }
            }
        })

        address.blur(function() {
            if(address.val() == '') {
                $('#error--custom-4').html("Vui lòng nhập trường này");
            }
        })

        hoten.blur(function() {
            if(hoten.val() == '') {
                $('#error--custom-5').html("Vui lòng nhập trường này");
            } else {
                if(!formatName.test(hoten.val())) {
                    $('#error--custom-5').html("Tên đăng nhập tối thiểu 6 ký tự, không chứa ký tự đặc biệt");
                }
            }
        })

        pass.blur(function() {
            if(pass.val() == '') {
                $('#error--custom-6').html("Vui lòng nhập trường này");
            } else {
                if(!formatPass.test(pass.val())) {
                    $('#error--custom-6').html("Mật khẩu ít nhất 8 ký tự, có ít nhất 1 số và 1 chữ cái");
                }
            }
        })

        fullname.keydown(function() {
            $('#error--custom-1').html('');
        })

        phone.keydown(function() {
            $('#error--custom-2').html('');
        })

        email.keydown(function() {
            $('#error--custom-3').html('');
        })

        address.keydown(function() {
            $('#error--custom-4').html('');
        })

        hoten.keydown(function() {
            $('#error--custom-5').html('');
        })

        pass.keydown(function() {
            $('#error--custom-6').html('');
        })

        // khi nút submit được click
        submit.click(function() {
            //Kiểm tra xem trường đã được nhập hay chưa
            if(fullname.val() == ''){
                $('#error--custom-1').html('Vui lòng nhập trường này');
                if(phone.val() == '') {
                    $('#error--custom-2').html('Vui lòng nhập trường này');
                }
                if(email.val() == '') {
                    $('#error--custom-3').html('Vui lòng nhập trường này');
                }
                if(address.val() == '') {
                    $('#error--custom-4').html('Vui lòng nhập trường này');
                }
                if(hoten.val() == '') {
                    $('#error--custom-5').html('Vui lòng nhập trường này');
                }
                if(pass.val() == '') {
                    $('#error--custom-6').html('Vui lòng nhập trường này');
                }
                return false;
            }

            // Lấy toàn bộ dữ liệu trong Form
            var data = $('form#form_input').serialize();

            // Sử dụng phương thức Ajax.
            $.ajax({
                type : 'POST', //Sử dụng kiểu gửi dữ liệu POST
                url : 'validate_register.php', //gửi dữ liệu sang trang data.php
                data : data, //dữ liệu sẽ được gửi
                success : function(data)  // Hàm thực thi khi nhận dữ liệu được từ server
                        {  
                            if(data) {
                                $('#error--custom-5').html(data);
                            }
                        }
                });
            return false;
        });

        
    });
</script>