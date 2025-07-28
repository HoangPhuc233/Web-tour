<?php
require_once 'connection.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $sql_select_one = "SELECT * FROM users WHERE username = '$username'";
    $result_one = mysqli_query($connection, $sql_select_one);
    $user = mysqli_fetch_assoc($result_one);
    if (empty($username) || empty($password) || empty($password_confirm)) {
        echo 'Không được để trống các trường';
        $error = true;
    } else if ($password != $password_confirm) {
        echo 'Password nhập lại chưa đúng';
        $error = true;
    } else if (!empty($user)) {
        echo 'Username này đã tồn tại';
        $error = true;
    }
    if (empty($error)) {
        $password_encrypt = password_hash($password, PASSWORD_BCRYPT);
        $sql_insert = "INSERT INTO users(username,password) VALUES('$username', '$password_encrypt')";
        $is_insert = mysqli_query($connection, $sql_insert);
        if ($is_insert) {
            echo 'Đăng ký thành công';
//            header('Location: login.php');
//            exit();
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
    <title>Đăng ký</title>
</head>
<body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0"> 
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo" style="text-align: center;">
                </div>
                <h3 style="text-align: center; font-weight:600;">Chào mừng bạn!</h3>
                <h6 class="font-weight-light" style="text-align: center;">Đăng ký tài khoản của bạn</h6>
                <form class="pt-3" method="post" action="">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Tên đăng nhập" name="username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Mật khẩu" name="password">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword2" placeholder="Nhập lại mật khẩu" name="password_confirm">
                  </div>
                  <div class="mt-3">
                      <input type="submit" name="register" value="Đăng ký" class="btn btn-block btn-success btn-lg font-weight-medium auth-form-btn"/>
                  </div>
                  <div class="mt-3">
                    <a href="login.php" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Đăng nhập</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
