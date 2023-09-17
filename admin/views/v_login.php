<?php
    session_start();
    if(isset($_SESSION['name'])) {
        header('Location:index.php');
    }
    $a = "";
    if(isset($_POST['btn-submit'])) {
        $name = $_POST['name'];
        $pass = $_POST['pass'];

        foreach($login as $key=>$value) {
            if($name == $value->name && $pass == $value->pass) {
                $_SESSION['name'] = $name; 
                header('Location:index.php');
            }
        }
        $a = "Sai tên đăng nhập hoặc mật khẩu";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        .main {
            width: 800px;
            height: 500px;
            /* background-color: #dbdbdb; */
            margin: 0 auto;
            padding: 40px;
            border: 1px solid #28b779;
        }
        .main h1 {
            display: inline-block;
            margin-bottom: 12px;
        }

        .main h4 {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .form-group input {
            width: 600px;
            padding: 12px;
            border-radius: 8px;
            border: none;
        }

        .form-group input:focus {
            outline: none;
        }

        input[type=submit] {
            padding: 12px 16px;
            background-color: #28b779;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            color: #fff;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="main">
            <h1>Quản trị viên</h1>
            <hr>
            <h4>Vui lòng đăng nhập để tiếp tục</h4>

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên đăng nhập</label>
                    <input type="text" placeholder="Tên đăng nhập" name="name">
                </div>
                <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input type="password" placeholder="Mật khẩu" name="pass">
                </div>
                <p style="color:red;"><?php echo $a; ?></p>
                <input type="submit" name="btn-submit" value="ĐĂNG NHẬP">
            </form>
        </div>
    </div>
</body>
</html>