<?php
session_start();
require_once 'connection.php';
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    $_SESSION['error'] = 'Tham số id ko hợp lệ';
    header('Location: index.php');
    exit();
}
$id = $_GET['id'];
$sql_delete = "DELETE FROM khachhang WHERE id = $id";
$is_delete = mysqli_query($connection, $sql_delete);
if ($is_delete) {
    echo "Xóa tour thành công";
} else {
    echo 'Xóa tour thất bại';
}
header('Location: qltour.php');
exit();