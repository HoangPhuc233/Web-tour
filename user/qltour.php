<?php
session_start();
require_once 'connection.php';
$makh = $_SESSION['user_id'];
$sql_select_all = "SELECT * FROM khachhang WHERE makh = '$makh'";
$result_all = mysqli_query($connection, $sql_select_all);
$khachhangs = mysqli_fetch_all($result_all, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour đã đặt của bạn</title>

    <!-- Liên kết CSS Bootstrap bằng CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

<!-- Main content -->
<div class="container">
    <h1>Danh sách tour đã đặt</h1>
    <a href="../chi-tiet-tour" class="btn btn-primary">
        <i class="fas fa-plus"></i> Đặt tour
    </a>
    <table class="table table-borderd">
        <thead>
        <tr>
            <th>STT</th>
            <th>ma_tour</th>
            <th>makh</th>
            <th>tenkh</th>
            <th>diachi</th>
            <th>phone</th>
            <th>dcmail</th>
            <th>nguoi_lon</th>
            <th>tre_em</th>
            <th>phu_thu_visa</th>
            <th>phong_don</th>
            <th>ghi_chu</th>
            <th>ten_nguoi_lon</th>
            <th>ten_tre_em</th>
            <th>###</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($khachhangs AS $key => $khachhang): ?>
            <tr>
                <td><?php echo ++$key; ?></td>
                <td><?php echo $khachhang['ma_tour']; ?></td>
                <td><?php echo $khachhang['makh']; ?></td>
                <td><?php echo $khachhang['tenkh']; ?></td>
                <td><?php echo $khachhang['diachi']; ?></td>
                <td><?php echo $khachhang['phone']; ?></td>
                <td><?php echo $khachhang['dcmail']; ?></td>
                <td><?php echo $khachhang['nguoi_lon']; ?></td>
                <td><?php echo $khachhang['tre_em']; ?></td>
                <td><?php echo $khachhang['phu_thu_visa']; ?></td>
                <td><?php echo $khachhang['phong_don']; ?></td>
                <td><?php echo $khachhang['ghi_chu']; ?></td>
                <td><?php echo $khachhang['ten_nguoi_lon']; ?></td>
                <td><?php echo $khachhang['ten_tre_em']; ?></td>
                <td>
                    <!-- Button Sửa -->
                    <a href="update.php?id=<?php echo $khachhang['id']; ?>" id="btnUpdate" class="btn btn-primary">
                        <i class="fas fa-edit"></i>
                    </a>

                    <!-- Button Xóa -->
                    <a href="delete.php?id=<?php echo $khachhang['id']; ?>" id="btnDelete" class="btn btn-danger" onclick="return confirm('Bạn xác nhận xóa tour này?')">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Liên kết JS Jquery bằng CDN -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<!-- Liên kết JS Popper bằng CDN -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<!-- Liên kết JS Bootstrap bằng CDN -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- Liên kết JS FontAwesome bằng CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</body>

</html>