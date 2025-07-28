<?php
session_start();
require_once 'connection.php';
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    $_SESSION['error'] = 'Tham số id ko hợp lệ';
    header('Location: index.php');
    exit();
}
$id = $_GET['id'];
$sql_select_one = "SELECT * FROM khachhang WHERE id = $id";
$result_one = mysqli_query($connection, $sql_select_one);
$khachhang = mysqli_fetch_assoc($result_one);

if (isset($_POST['update'])) {
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

    $sql_update = "UPDATE khachhang SET tenkh = '$hoten', diachi = '$diachi', phone = '$sdt', dcmail = '$email', nguoi_lon = '$nguoi_lon', ten_nguoi_lon = '$ten_nguoi_lon', tre_em = '$tre_em', ten_tre_em = '$ten_tre_em', phu_thu_visa = '$phu_thu_visa', phong_don = '$phong_don', payment = '$hinh_thuc_thanh_toan', ghi_chu = '$ghi_chu' WHERE id = '$id'";
    $is_insert = mysqli_query($connection, $sql_update);

    if ($is_insert) {
        echo "<script>alert('Bạn cập nhật tour thành công!');</script>";
        header('Location: qltour.php');
        exit();
    }
}


?>
<title>Cập nhật thông tin tour</title>
<div class="formdat" style="max-width: 1200px; margin: 0 auto; padding: 20px; background-color: #f9f9f9;">
    <a href="qltour.php" class="btn btn-primary">
        <i class="fas fa-plus"></i> Danh sách tours đã đặt
    </a>
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
                <td><input type="text" name="hoten" placeholder="Họ tên" required style="width: 100%; padding: 8px;" value="<?php echo $khachhang['tenkh']?>"></td>
                <td><strong>Email *</strong></td>
                <td><input type="email" name="email" placeholder="Email" required style="width: 100%; padding: 8px;" value="<?php echo $khachhang['dcmail']?>"></td>
            </tr>
            <tr>
                <td><strong>Số điện thoại *</strong></td>
                <td><input type="tel" name="sdt" placeholder="Số điện thoại" required style="width: 100%; padding: 8px;" value="<?php echo $khachhang['phone']?>"></td>
                <td><strong>Địa chỉ *</strong></td>
                <td><input type="text" name="diachi" placeholder="Địa chỉ" required style="width: 100%; padding: 8px;" value="<?php echo $khachhang['diachi']?>"></td>
            </tr>
            <tr>
                <td><strong>Người lớn *</strong></td>
                <td><input type="number" name="nguoi_lon" value="1" min="1" max="10" step="1" style="width: 100%; padding: 8px;" value="<?php echo $khachhang['nguoi_lon']?>"></td>
                <td><strong>Trẻ em (0 - 11 tuổi) *</strong></td>
                <td><input type="number" name="tre_em" value="0" min="0" max="10" step="1" style="width: 100%; padding: 8px;" value="<?php echo $khachhang['tre_em']?>"></td>
            </tr>

            <!-- Tên người lớn -->
            <tr>
            <tr>
                <td><label for="ten_nguoi_lon">Tên người lớn :</label></td>
                <td><textarea name="ten_nguoi_lon" id="ten_nguoi_lon" rows="4" style="width: 100%; padding: 8px;" ><?php echo $khachhang['ten_nguoi_lon']?></textarea></td>
                <td><label for="ten_tre_em">Tên trẻ em :</label></td>
                <td><textarea name="ten_tre_em" id="ten_tre_em" rows="4" style="width: 100%; padding: 8px;"><?php echo $khachhang['ten_tre_em']?></textarea></td>
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
                <td><input type="number" name="phong_don" value="0" style="width: 100%; padding: 8px;" value="<?php echo $khachhang['phong_don']?>"></td>
            </tr>

            <!-- Hình thức thanh toán -->
            <tr>
                <td><strong>Hình thức thanh toán *</strong></td>
                <td colspan="3">
                    <?php
                    $quay = '';
                    $chuyenkhoan = '';
                    if ($khachhang['payment'] == 'chuyenkhoan'){
                        $chuyenkhoan = 'checked';
                    } else{
                        $quay = 'checked';
                    }
                    ?>
                    <label><input type="radio" name="payment" value="quay" <?php echo $quay;?>> Thanh toán tại quầy SevenTour</label><br>
                    <label><input type="radio" name="payment" value="chuyenkhoan" <?php echo $chuyenkhoan;?>> Thanh toán chuyển khoản ngân hàng</label>
                </td>
            </tr>

            <!-- Ghi chú -->
            <tr>
                <td colspan="4" style="text-align: left; padding-top: 10px;">
                    <strong>GHI CHÚ</strong><br>
                    <textarea id="note" name="note" rows="4" style="width: 100%; padding: 8px;" placeholder="Nhập ghi chú của bạn ở đây..."><?php echo $khachhang['ghi_chu']?></textarea>
                </td>
            </tr>

            <!-- Nút submit -->
            <tr>
                <td colspan="4" style="text-align: center; padding-top: 20px;">
                    <input type="submit" value="Chỉnh sửa" name="update" style="background-color: red; color: white; padding: 10px 20px; border: none; cursor: pointer;">
                </td>
            </tr>
        </table>
    </form>
</div>