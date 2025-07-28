<?php
// Kết nối đến cơ sở dữ liệu
include('db_connection.php');

// Kiểm tra nếu có yêu cầu xóa tour
if (isset($_POST['makh']) && isset($_POST['makh'])) {
    $tour_id = $_POST['makh'];
    
    // Thực hiện câu lệnh xóa tour từ cơ sở dữ liệu
    $sql = "DELETE FROM khachhang WHERE makh = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $tour_id);
    
    if ($stmt->execute()) {
        // Xóa thành công, chuyển hướng về trang này
        echo "<script>alert('Tour đã xóa thành công!'); window.location = 'index.php';</script>";
    } else {
        // Xử lý lỗi nếu có
        echo "Lỗi khi xóa tour!";
    }
}

// Lấy danh sách tour đã đặt từ CSDL
$sql = "SELECT * FROM khachhang";
$result = $conn->query($sql);
$tour_list = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tour_list[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Tour đã đặt</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header">
        <div class="subHeader" style="background-color: #b3e0ff; padding: 10px 0; margin-bottom: 20px;">
            <div class="subHeader--wrapper section-container">
                <div class="subHeader-left" style="display: flex; align-items: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                        <path stroke="#000" stroke-linejoin="round" stroke-width="1.5" d="M21 19v-1.646a2 2 0 0 0-1.257-1.857l-2.034-.813a2 2 0 0 0-2.532.962L15 16s-2.5-.5-4.5-2.5S8 9 8 9l.354-.177a2 2 0 0 0 .963-2.532l-.814-2.034A2 2 0 0 0 6.646 3H5a2 2 0 0 0-2 2c0 8.837 7.163 16 16 16a2 2 0 0 0 2-2Z"></path>
                    </svg>
                    <span>
                        <a href="tel:19001839" style="font-weight: bold; color: black;">
                            <b>1900 1839</b>
                        </a>
                    </span>
                    - <small>Từ 8:00 - 23:00 hằng ngày</small>
                </div>
            </div>
        </div>

        <nav class="header_navbar" style="margin-top: 30px;">
            <ul class="header_navbar-list" style="display: flex; list-style-type: none; margin: 0; padding: 0;">
                <li class="header_navbar-item" style="margin-right: 20px;">
                    <a href="index.php" class="header_navbar-item-link" style="text-decoration: none; color: black; font-weight: bold;">TRANG CHỦ</a>
                </li>
                <li class="header_navbar-item" style="margin-right: 20px;">
                    <a href="contact.php" class="header_navbar-item-link" style="text-decoration: none; color: black; font-weight: bold;">LIÊN HỆ</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="body">
        <div class="content" style="display: flex; justify-content: center; flex-wrap: wrap; gap: 20px;">
            <div class="formdat" style="max-width: 1200px; margin: 0 auto; padding: 20px; background-color: #f9f9f9;">
                <h2>Danh sách các tour đã đặt</h2>
                
                <!-- Bảng thông tin tour đã đặt -->
                <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px; background-color: #fff;">
                    <thead>
                        <tr>
                            <th style="text-align: center; padding: 10px;">Mã Khách hàng</th>
                            <th style="text-align: center; padding: 10px;">Tên Khách Hàng</th>
                            <th style="text-align: center; padding: 10px;">Số điện thoại</th>
                            <th style="text-align: center; padding: 10px;">Email</th>
                            <th style="text-align: center; padding: 10px;">Địa chỉ</th>
                            <th style="text-align: center; padding: 10px;">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tour_list as $tour): ?>
                            <tr>
                                <td style="text-align: center; padding: 10px;"><?php echo $tour['makh']; ?></td>
                                <td style="text-align: center; padding: 10px;"><?php echo $tour['tenkh']; ?></td>
                                <td style="text-align: center; padding: 10px;"><?php echo $tour['phone']; ?></td>
                                <td style="text-align: center; padding: 10px;"><?php echo $tour['dcmail']; ?></td>
                                <td style="text-align: center; padding: 10px;"><?php echo $tour['diachi']; ?></td>
                                <td style="text-align: center; padding: 10px;">
                                    <form action="index.php" method="POST">
                                         <input type="hidden" name="makh" value="<?php echo $tour['makh']; ?>">
                                         <input type="submit" name="delete_tour" value="Xóa" style="background-color: red; color: white; border: none; padding: 5px 10px; cursor: pointer;">

                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer style="background-color: #f7f9fb; padding: 20px 0; text-align: center; border-top: 20px solid #ddd; margin-top: 20px;">
        <p style="margin: 5px 0; color: #555; font-size: 14px;">190 Pasteur, Phường Võ Thị Sáu, Quận 3, TP.HCM</p>
        <p style="margin: 5px 0; color: #555; font-size: 14px;">(+84 28) 3822 8898 - info@seventravel.com</p>
        <p style="margin: 5px 0; color: #555; font-size: 14px;">© Seventravel 2024</p>
    </footer>
</body>
</html>
