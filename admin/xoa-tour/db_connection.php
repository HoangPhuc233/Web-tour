<?php
// Cấu hình kết nối cơ sở dữ liệu
$servername = "localhost"; // Địa chỉ máy chủ (localhost nếu chạy trên máy chủ của bạn)
$username = "root"; // Tên người dùng CSDL
$password = ""; // Mật khẩu CSDL (nếu có, nếu không có thì để trống)
$dbname = "tour_tmdt"; // Tên cơ sở dữ liệu

// Tạo kết nối đến MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    // Nếu không thể kết nối, hiển thị thông báo lỗi và thoát
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Set charset để tránh lỗi mã hóa ký tự (đặc biệt với các ký tự tiếng Việt)
$conn->set_charset("utf8");

?>
