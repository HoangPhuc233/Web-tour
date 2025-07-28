<?php
// Kết nối đến cơ sở dữ liệu (dùng kết nối bạn đã thiết lập)
include('db_connection.php'); 

// Kiểm tra nếu có yêu cầu xóa tour
if (isset($_POST['makh']) && isset($_POST['makh'])) {
    $makh = $_POST['makh'];  // lấy mã khách hàng từ form gửi đến
    
    // Kiểm tra xem makh có hợp lệ hay không
    if (is_numeric($makh)) {
        // Chuẩn bị câu lệnh SQL xóa khách hàng theo makh
        $sql = "DELETE FROM khachhang WHERE makh = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $makh);  // ràng buộc makh là kiểu số nguyên
        
        // Kiểm tra thực thi câu lệnh xóa
        if ($stmt->execute()) {
            // Xóa thành công, chuyển hướng về trang danh sách hoặc hiển thị thông báo
            echo "<script>alert('Khách hàng đã xóa thành công!'); window.location = 'index.php';</script>";
        } else {
            // Nếu có lỗi trong quá trình xóa
            echo "<script>alert('Có lỗi khi xóa khách hàng!'); window.location = 'index.php';</script>";
        }
    } else {
        // Nếu makh không hợp lệ
        echo "<script>alert('Mã khách hàng không hợp lệ!'); window.location = 'index.php';</script>";
    }
}
?>
