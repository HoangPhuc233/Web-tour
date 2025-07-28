<?php
session_start();
require_once 'connection.php';
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username) || empty($password)) {
        echo 'Username hoặc password không được để trống';
        $error = true;
    }
    if (empty($error)) {
        $sql_select_one = "SELECT * FROM users WHERE username = '$username'";
        $result_one = mysqli_query($connection, $sql_select_one);
        $user = mysqli_fetch_assoc($result_one);
        if (empty($user)) {
            echo 'Username không tồn tại';
        } else {
            $is_same_password = password_verify($password, $user['password']);
            echo $is_same_password;
            if ($is_same_password) {
                echo 'Đăng nhập thành công';
                $_SESSION['user_id'] = $user['id'];
                header('Location: ../trang-chu/');
                exit();
            } else {
                echo 'Sai tài khoản hoặc mật khẩu';
            }
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
    <title>Đăng nhập</title>
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
                <h3 style="text-align: center; font-weight:600;">Chào mừng bạn trở lại!</h3>
                <h6 class="font-weight-light" style="text-align: center;">Đăng nhập tài khoản của bạn</h6>
                <form class="pt-3" method="post" action="">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Tên đăng nhập" name="username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Mật khẩu" name="password">
                  </div>
                  <div class="mt-3">
                      <input type="submit" name="login" value="Đăng nhập" class="btn btn-block btn-success btn-lg font-weight-medium auth-form-btn"/>
                  </div>
                  <div class="mt-3">
                    <a href="register.php" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Tạo tài khoản</a>
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
