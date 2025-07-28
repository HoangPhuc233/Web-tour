<?php
session_start();
require_once 'connection.php';

if (empty($_SESSION['user_id'])) {
    header('Location: ../user/login.php');
    exit();
}

if (isset($_POST['btThem'])) {
    $makh = $_SESSION['user_id'];
    $hoten = $_POST["hoten"];
    $email = $_POST["email"];
    $sdt = $_POST["sdt"];
    $diachi = $_POST["diachi"];
    $nguoi_lon = $_POST["nguoi_lon"];
    $ten_nguoi_lon = $_POST["ten_nguoi_lon"];
    $tre_em = $_POST["tre_em"];
    $ten_tre_em = $_POST["ten_tre_em"];
    $phu_thu_visa = $_POST["phu_thu_visa"];
    $phong_don = $_POST["phong_don"];
    $hinh_thuc_thanh_toan = $_POST["payment"];
    $ghi_chu = $_POST["note"];

    $sql_insert = "INSERT INTO khachhang(makh, tenkh, diachi, phone, dcmail, nguoi_lon,ten_nguoi_lon, tre_em, ten_tre_em,phu_thu_visa, phong_don, payment,ghi_chu) 
                VALUES ('$makh','$hoten', '$diachi', '$sdt', '$email', '$nguoi_lon','$ten_nguoi_lon', '$tre_em', '$ten_tre_em','$phu_thu_visa', '$phong_don', '$hinh_thuc_thanh_toan','$ghi_chu')";

    $is_insert = mysqli_query($connection, $sql_insert);

    if ($is_insert) {
        echo "<script>alert('Bạn đã đặt tour thành công!');</script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết tour</title>
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
                    - <small>
                        <!-- -->
                        Từ 8:00 - 23:00 hằng ngày</small>
                </div>
            </div>
        </div>

        <nav class="header_navbar" style="margin-top: 30px;">
            <ul class="header_navbar-list" style="display: flex; list-style-type: none; margin: 0; padding: 0;">
                <li class="header_navbar-item" style="margin-right: 20px;">
                    <a href="" class="header_navbar-item-link" style="text-decoration: none; color: black; font-weight: bold;">TRANG CHỦ</a>
                </li>
                <li class="header_navbar-item" style="margin-right: 20px;">
                    <a href="" class="header_navbar-item-link" style="text-decoration: none; color: black; font-weight: bold;">LIÊN HỆ</a>
                </li>
            </ul>

            <ul class="header_navbar-list" style="display: flex; list-style-type: none; margin: 0; padding: 0;">
                <li class="header_navbar-item" style="margin-right: 20px;">
                    <a href="" class="header_navbar-item-link" style="text-decoration: none; color: black; font-weight: bold;">TÌM KIẾM</a>
                </li>
            </ul>
            <ul class="header_navbar-list" style="display: flex; list-style-type: none; margin: 0; padding: 0;">
                <li class="header_navbar-item">
                    <a href="../user/qltour.php" class="header_navbar-item-link" style="text-decoration: none; color: black; font-weight: bold;">TOUR ĐÃ ĐẶT</a>
                </li>
            </ul>
            <?php
            if (empty($_SESSION['user_id'])):
            ?>
            <ul class="header_navbar-list" style="display: flex; list-style-type: none; margin: 0; padding: 0;">
                <li class="header_navbar-item">
                    <a href="../user/login.php" class="header_navbar-item-link" style="text-decoration: none; color: black; font-weight: bold;">ĐĂNG NHẬP></NHẬP></a>
                </li>
            </ul>
            <?php else:?>
            <ul class="header_navbar-list" style="display: flex; list-style-type: none; margin: 0; padding: 0;">
                <li class="header_navbar-item">
                    <a href="../user/logout.php" class="header_navbar-item-link" style="text-decoration: none; color: black; font-weight: bold;">ĐĂNG XUẤT</a>
                </li>
            </ul>
            <?php endif;?>
        </nav>
    </div>


    <div class="body">
        <!--anh banner thay doi theo tour dc click (php)-->
        <div class="banner">
            <img src="..\img\banner01.png" alt="Banner" width="600" height="400">
        </div>
        <!--ket thuc anh banner-->

        <!--thanh sech-->
        <div class="search-bar">
            <div class="">
                <div class="search">
                    Bạn cần tìm tour:<input type="text">
                    Từ ngày <input type="date" value="từ ngày">
                    Đến ngày <input type="date" value="đến ngày">
                    <select name="miền" id="miền">
                        <option value="MIỀN BẮC">MIỀN BẮC</option>
                        <option value="MIỀN TRUNG">MIỀN TRUNG</option>
                        <option value="MIỀN NAM">MIỀN NAM</option>
                    </select>
                    <input type="submit" value="TÌM KIẾM " style="background-color: orange; color: white;">
                </div>
            </div>
        </div>
        <!--ket thuc thanh sech-->

        <!--cac tour -->
        <div class="content" style="display: flex; justify-content: center; flex-wrap: wrap; gap: 20px;">

            <div class="topct" style="flex: 1; display: flex; justify-content: center; align-items: center; max-width: 100%; gap: 20px;">
                <div class="anh1" style="flex: 1; max-width: 100%; display: flex; justify-content: center;">
                    <img src="../img//anh1ct.png" alt="" style="max-width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                </div>

                <div class="dat" style="background-color: #f1f8ff; padding: 40px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 600px; margin: 0 auto;">
                    <div style="padding: 20px;">
                        <div class="ten" style="padding-bottom: 20px; font-size: 22px; color: #0056b3; font-weight: bold; text-align: center;">
                            ĐÀ NẴNG - HỘI AN - HUẾ - PHỐ CỔ HỘI AN - CẦU VÀNG - DI TÍCH LỊCH SỬ CỐ ĐÔ HUẾ
                        </div>
                        <div class="gia" style="color: red; padding-bottom: 20px; font-size: 24px; font-weight: bold; text-align: center;">
                            7.000.000 VNĐ
                        </div>
                        <div class="hanhtrinh" style="padding-bottom: 20px; font-size: 18px; color: #333;">
                            <strong>Hành trình:</strong> Sài gòn - Đà Nẵng
                        </div>
                        <div class="hanhtrinh" style="padding-bottom: 20px; font-size: 18px; color: #333;">
                            <strong>Di chuyển:</strong> Xe Khách giường nằm 45 chỗ
                        </div>
                        <div class="hanhtrinh" style="padding-bottom: 20px; font-size: 18px; color: #333;">
                            <strong>Lịch khởi hành:</strong> Hằng ngày
                        </div>
                        <div class="hanhtrinh" style="padding-bottom: 20px; font-size: 18px; color: #333;">
                            <strong>Thời gian:</strong> 19/10/2024 - 21/10/2024
                        </div>
                        <div class="hanhtrinh" style="padding-bottom: 20px; font-size: 18px; color: #333;">
                            <strong>Thời gian tour:</strong> 3 ngày 2 đêm
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="formdat" style="max-width: 1200px; margin: 0 auto; padding: 20px; background-color: #f9f9f9;">
    <!-- Bảng giá chi tiết tour -->
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px; background-color: #fff;">
        <tr>
            <th colspan="3" style="background-color: #f2f2f2; text-align: center; padding: 10px;">Bảng giá chi tiết tour</th>
        </tr>
        <tr>
            <td style="padding: 10px; text-align: center;"><strong>Loại</strong></td>
            <td style="padding: 10px; text-align: center;"><strong>Người lớn</strong></td>
            <td style="padding: 10px; text-align: center;"><strong>Trẻ em dưới 11 tuổi</strong></td>
        </tr>
        <tr>
            <td style="padding: 10px;">Giá</td>
            <td style="padding: 10px; text-align: center;">6,599,000 đ</td>
            <td style="padding: 10px; text-align: center;">4,320,000 đ</td>
        </tr>
        <tr>
            <td style="padding: 10px;">Phụ thu phòng đơn</td>
            <td colspan="2" style="padding: 10px; text-align: center;">1,500,000 đ</td>
        </tr>
    </table>

    <!-- Form thông tin liên hệ -->
    <form method="post" enctype="multipart/form-data">
        <table style="width: 100%; border-collapse: collapse; background-color: #fff; border: 1px solid #ddd;">
            <tr>
                <th colspan="4" style="background-color: #f2f2f2; text-align: center; padding: 10px;">THÔNG TIN LIÊN HỆ</th>
            </tr>
            <tr>
                <td><strong>Họ tên *</strong></td>
                <td><input type="text" name="hoten" placeholder="Họ tên" required style="width: 100%; padding: 8px;"></td>
                <td><strong>Email *</strong></td>
                <td><input type="email" name="email" placeholder="Email" required style="width: 100%; padding: 8px;"></td>
            </tr>
            <tr>
                <td><strong>Số điện thoại *</strong></td>
                <td><input type="tel" name="sdt" placeholder="Số điện thoại" required style="width: 100%; padding: 8px;"></td>
                <td><strong>Địa chỉ *</strong></td>
                <td><input type="text" name="diachi" placeholder="Địa chỉ" required style="width: 100%; padding: 8px;"></td>
            </tr>
            <tr>
                <td><strong>Người lớn *</strong></td>
                <td><input type="number" name="nguoi_lon" value="1" min="1" max="10" step="1" style="width: 100%; padding: 8px;"></td>
                <td><strong>Trẻ em (0 - 11 tuổi) *</strong></td>
                <td><input type="number" name="tre_em" value="0" min="0" max="10" step="1" style="width: 100%; padding: 8px;"></td>
            </tr>

            <!-- Tên người lớn -->
            <tr>
            <tr>
                <td><label for="ten_nguoi_lon">Tên người lớn :</label></td>
                <td><textarea name="ten_nguoi_lon" id="ten_nguoi_lon" rows="4" style="width: 100%; padding: 8px;"></textarea></td>
                <td><label for="ten_tre_em">Tên trẻ em :</label></td>
                <td><textarea name="ten_tre_em" id="ten_tre_em" rows="4" style="width: 100%; padding: 8px;"></textarea></td>
            </tr>
            </tr>

            <!-- Phụ thu visa -->
            <tr>
                <td><strong>Phụ thu visa *</strong></td>
                <td>
                    <select name="phu_thu_visa" style="width: 100%; padding: 8px;">
                        <option value="Không">Không</option>
                        <option value="Có">Có</option>
                    </select>
                </td>
                <td><strong>Số lượng phòng đơn *</strong></td>
                <td><input type="number" name="phong_don" value="0" style="width: 100%; padding: 8px;"></td>
            </tr>

            <!-- Hình thức thanh toán -->
            <tr>
                <td><strong>Hình thức thanh toán *</strong></td>
                <td colspan="3">
                    <label><input type="radio" name="payment" value="quay" required> Thanh toán tại quầy SevenTour</label><br>
                    <label><input type="radio" name="payment" value="chuyenkhoan"> Thanh toán chuyển khoản ngân hàng</label>
                </td>
            </tr>

            <!-- Ghi chú -->
            <tr>
                <td colspan="4" style="text-align: left; padding-top: 10px;">
                    <strong>GHI CHÚ</strong><br>
                    <textarea id="note" name="note" rows="4" style="width: 100%; padding: 8px;" placeholder="Nhập ghi chú của bạn ở đây..."></textarea>
                </td>
            </tr>

            <!-- Nút submit -->
            <tr>
                <td colspan="4" style="text-align: center; padding-top: 20px;">
                    <input type="submit" value="Đặt ngay" name="btThem" style="background-color: red; color: white; padding: 10px 20px; border: none; cursor: pointer;">
                </td>
            </tr>
        </table>
    </form>
</div>



    </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer style="background-color: #f7f9fb; padding: 20px 0; text-align: center; border-top: 20px solid #ddd; margin-top: 20px;">
        <p style="margin: 5px 0; color: #555; font-size: 14px;">190 Pasteur, Phường Võ Thị Sáu, Quận 3, TP.HCM</p>
        <p style="margin: 5px 0; color: #555; font-size: 14px;">(+84 28) 3822 8898 - info@seventravel.com</p>
        <p style="margin: 5px 0; color: #555; font-size: 14px;">© Seventravel 2024</p>
    </footer>
</body>

</html>