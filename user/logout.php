<?php
session_start();
$_SESSION = [];
session_destroy();
echo 'Đăng xuất thành công';
header('Location: login.php');
exit();

?>