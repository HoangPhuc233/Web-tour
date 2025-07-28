<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seventour đặt tour du lịch</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header">
        <nav class="header_navbar">

            <ul class="header_navbar-list">
                <li class="header_navbar-item">
                    <a href="" class="header_navbar-item-link">TRANG CHỦ</a>
                </li>
                <li class="header_navbar-item">
                    <a href="" class="header_navbar-item-link">LIÊN HỆ</a>
                </li>
            </ul>

            <ul class="header_navbar-list">
                <li class="header_navbar-item">
                    <a href="" class="header_navbar-item-link">MIỀN BẮC</a>
                </li>
                <li class="header_navbar-item">
                    <a href="" class="header_navbar-item-link">MIỀN TRUNG</a>
                </li>
                <li class="header_navbar-item">
                    <a href="" class="header_navbar-item-link">MIỀN NAM</a>
                    <div class="sub_navbar-item">
                        <ul class="header_navbar-list">
                            <li><a href="" class="header_navbar-item-link">Tiền Giang</a></li>
                            <li><a href="" class="header_navbar-item-link">Long An</a></li>
                            <li><a href="" class="header_navbar-item-link">Bến Tre</a></li>
                        </ul>
                    </div>
                </li>
            </ul>

            <ul class="header_navbar-list">
                <li class="header_navbar-item">
                    <a href="" class="header_navbar-item-link">TÌM KIẾM</a>
                </li>
            </ul>
            <ul class="header_navbar-list">
                <li class="header_navbar-item">
                    <a href="../user/qltour.php" class="header_navbar-item-link">TOUR ĐÃ ĐẶT</a>
                </li>
            </ul>
            <?php
            if (empty($_SESSION['user_id'])):
                ?>
                <ul class="header_navbar-list">
                    <li class="header_navbar-item">
                        <a href="../user/login.php" class="header_navbar-item-link">ĐĂNG NHẬP</a>
                    </li>
                </ul>
            <?php else:?>
                <ul class="header_navbar-list">
                    <li class="header_navbar-item">
                        <a href="../user/logout.php" class="header_navbar-item-link"">ĐĂNG XUẤT</a>
                    </li>
                </ul>
            <?php endif;?>
        </nav>
    </div>

    <div class="body">
        <!--anh banner-->
        <div class="banner">
            <img src="../img/banner2.jpg" alt="">
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

        <!--cac tour-->
        <div class="content">
            <div class="tenmien">
                <h2>TOUR MIỀN BẮC</h2>
            </div>
            <div class="list-tour">
                <div class="tour">
                    <div class="imgtour">
                        <a href="../chi-tiet-tour/"><img src="../img/banner1.jpg" alt=""></a>
                    </div>
                    <div class="tentour">
                        <h4>Mỹ Tho-Bến Tre-Cần Thơ-Cà Mau</h4>
                    </div>
                    <div class="thoigian">
                        <i class="	fa fa-clock-o"></i> 4 ngày 3 đêm
                    </div>
                    <div class="khoihanh">
                        <i class="fa fa-calendar-check-o"></i> 20/11/2024
                    </div>
                    <div class="slot">
                        <i class="fa fa-male"></i>  Còn 10 chỗ
                    </div>
                    <div class="gia" style="color: red; font-size: 16px;"><strong>7.000.000 vnđ</strong></div>
                    <div style="display: flex; justify-content:center;">
                        <input type="submit" value="Đặt ngay" style="background-color: red; color: white;">
                    </div>
                </div>
                <div class="tour">
                    <div class="imgtour">
                        <img src="../img/banner1.jpg" alt="">
                    </div>
                    <div class="tentour">
                        <h4>Mỹ Tho-Bến Tre-Cần Thơ-Cà Mau</h4>
                    </div>
                    <div class="thoigian">
                        <i class="	fa fa-clock-o"></i> 4 ngày 3 đêm
                    </div>
                    <div class="khoihanh">
                        <i class="fa fa-calendar-check-o"></i> 20/11/2024
                    </div>
                    <div class="slot">
                        <i class="fa fa-male"></i>  Còn 10 chỗ
                    </div>
                    <div class="gia" style="color: red; font-size: 16px;"><strong>7.000.000 vnđ</strong></div>
                    <div style="display: flex; justify-content:center;">
                        <input type="submit" value="Đặt ngay" style="background-color: red; color: white;">
                    </div>
                </div>
                <div class="tour">
                    <div class="imgtour">
                        <img src="../img/banner1.jpg" alt="">
                    </div>
                    <div class="tentour">
                        <h4>Mỹ Tho-Bến Tre-Cần Thơ-Cà Mau</h4>
                    </div>
                    <div class="thoigian">
                        <i class="	fa fa-clock-o"></i> 4 ngày 3 đêm
                    </div>
                    <div class="khoihanh">
                        <i class="fa fa-calendar-check-o"></i> 20/11/2024
                    </div>
                    <div class="slot">
                        <i class="fa fa-male"></i>  Còn 10 chỗ
                    </div>
                    <div class="gia" style="color: red; font-size: 16px;"><strong>7.000.000 vnđ</strong></div>
                    <div style="display: flex; justify-content:center;">
                        <input type="submit" value="Đặt ngay" style="background-color: red; color: white;">
                    </div>
                </div>
                <div class="tour">
                    <div class="imgtour">
                        <img src="../img/banner1.jpg" alt="">
                    </div>
                    <div class="tentour">
                        <h4>Mỹ Tho-Bến Tre-Cần Thơ-Cà Mau</h4>
                    </div>
                    <div class="thoigian">
                        <i class="	fa fa-clock-o"></i> 4 ngày 3 đêm
                    </div>
                    <div class="khoihanh">
                        <i class="fa fa-calendar-check-o"></i> 20/11/2024
                    </div>
                    <div class="slot">
                        <i class="fa fa-male"></i>  Còn 10 chỗ
                    </div>
                    <div class="gia" style="color: red; font-size: 16px;"><strong>7.000.000 vnđ</strong></div>
                    <div style="display: flex; justify-content:center;">
                        <input type="submit" value="Đặt ngay" style="background-color: red; color: white;">
                    </div>
                </div>
            </div>
            <div class="sb" style="justify-content: center; display: flex;">
                <input type="submit" style="background-color: white; color: red; border: 2px solid red; margin-top: 20px;" value="Xem tất cả tour">
            </div>
        </div>
        
        <div class="content">
            <div class="tenmien">
                <h2>TOUR MIỀN TRUNG</h2>
            </div>
            <div class="list-tour">
                <div class="tour">
                    <div class="imgtour">
                        <img src="../img/banner1.jpg" alt="">
                    </div>
                    <div class="tentour">
                        <h4>Mỹ Tho-Bến Tre-Cần Thơ-Cà Mau</h4>
                    </div>
                    <div class="thoigian">
                        <i class="	fa fa-clock-o"></i> 4 ngày 3 đêm
                    </div>
                    <div class="khoihanh">
                        <i class="fa fa-calendar-check-o"></i> 20/11/2024
                    </div>
                    <div class="slot">
                        <i class="fa fa-male"></i>  Còn 10 chỗ
                    </div>
                    <div class="gia" style="color: red; font-size: 16px;"><strong>7.000.000 vnđ</strong></div>
                    <div style="display: flex; justify-content:center;">
                        <input type="submit" value="Đặt ngay" style="background-color: red; color: white;">
                    </div>
                </div>
                <div class="tour">
                    <div class="imgtour">
                        <img src="../img/banner1.jpg" alt="">
                    </div>
                    <div class="tentour">
                        <h4>Mỹ Tho-Bến Tre-Cần Thơ-Cà Mau</h4>
                    </div>
                    <div class="thoigian">
                        <i class="	fa fa-clock-o"></i> 4 ngày 3 đêm
                    </div>
                    <div class="khoihanh">
                        <i class="fa fa-calendar-check-o"></i> 20/11/2024
                    </div>
                    <div class="slot">
                        <i class="fa fa-male"></i>  Còn 10 chỗ
                    </div>
                    <div class="gia" style="color: red; font-size: 16px;"><strong>7.000.000 vnđ</strong></div>
                    <div style="display: flex; justify-content:center;">
                        <input type="submit" value="Đặt ngay" style="background-color: red; color: white;">
                    </div>
                </div>
                <div class="tour">
                    <div class="imgtour">
                        <img src="../img/banner1.jpg" alt="">
                    </div>
                    <div class="tentour">
                        <h4>Mỹ Tho-Bến Tre-Cần Thơ-Cà Mau</h4>
                    </div>
                    <div class="thoigian">
                        <i class="	fa fa-clock-o"></i> 4 ngày 3 đêm
                    </div>
                    <div class="khoihanh">
                        <i class="fa fa-calendar-check-o"></i> 20/11/2024
                    </div>
                    <div class="slot">
                        <i class="fa fa-male"></i>  Còn 10 chỗ
                    </div>
                    <div class="gia" style="color: red; font-size: 16px;"><strong>7.000.000 vnđ</strong></div>
                    <div style="display: flex; justify-content:center;">
                        <input type="submit" value="Đặt ngay" style="background-color: red; color: white;">
                    </div>
                </div>
                <div class="tour">
                    <div class="imgtour">
                        <img src="../img/banner1.jpg" alt="">
                    </div>
                    <div class="tentour">
                        <h4>Mỹ Tho-Bến Tre-Cần Thơ-Cà Mau</h4>
                    </div>
                    <div class="thoigian">
                        <i class="	fa fa-clock-o"></i> 4 ngày 3 đêm
                    </div>
                    <div class="khoihanh">
                        <i class="fa fa-calendar-check-o"></i> 20/11/2024
                    </div>
                    <div class="slot">
                        <i class="fa fa-male"></i>  Còn 10 chỗ
                    </div>
                    <div class="gia" style="color: red; font-size: 16px;"><strong>7.000.000 vnđ</strong></div>
                    <div style="display: flex; justify-content:center;">
                        <input type="submit" value="Đặt ngay" style="background-color: red; color: white;">
                    </div>
                </div>
            </div>
            <div class="sb" style="justify-content: center; display: flex;">
                <input type="submit" style="background-color: white; color: red; border: 2px solid red; margin-top: 20px;" value="Xem tất cả tour">
            </div>
        </div>

        <div class="content">
            <div class="tenmien">
                <h2>TOUR MIỀN NAM</h2>
            </div>
            <div class="list-tour">
                <div class="tour">
                    <div class="imgtour">
                        <img src="../img/banner1.jpg" alt="">
                    </div>
                    <div class="tentour">
                        <h4>Mỹ Tho-Bến Tre-Cần Thơ-Cà Mau</h4>
                    </div>
                    <div class="thoigian">
                        <i class="	fa fa-clock-o"></i> 4 ngày 3 đêm
                    </div>
                    <div class="khoihanh">
                        <i class="fa fa-calendar-check-o"></i> 20/11/2024
                    </div>
                    <div class="slot">
                        <i class="fa fa-male"></i>  Còn 10 chỗ
                    </div>
                    <div class="gia" style="color: red; font-size: 16px;"><strong>7.000.000 vnđ</strong></div>
                    <div style="display: flex; justify-content:center;">
                        <input type="submit" value="Đặt ngay" style="background-color: red; color: white;">
                    </div>
                </div>
                <div class="tour">
                    <div class="imgtour">
                        <img src="../img/banner1.jpg" alt="">
                    </div>
                    <div class="tentour">
                        <h4>Mỹ Tho-Bến Tre-Cần Thơ-Cà Mau</h4>
                    </div>
                    <div class="thoigian">
                        <i class="	fa fa-clock-o"></i> 4 ngày 3 đêm
                    </div>
                    <div class="khoihanh">
                        <i class="fa fa-calendar-check-o"></i> 20/11/2024
                    </div>
                    <div class="slot">
                        <i class="fa fa-male"></i>  Còn 10 chỗ
                    </div>
                    <div class="gia" style="color: red; font-size: 16px;"><strong>7.000.000 vnđ</strong></div>
                    <div style="display: flex; justify-content:center;">
                        <input type="submit" value="Đặt ngay" style="background-color: red; color: white;">
                    </div>
                </div>
                <div class="tour">
                    <div class="imgtour">
                        <img src="../img/banner1.jpg" alt="">
                    </div>
                    <div class="tentour">
                        <h4>Mỹ Tho-Bến Tre-Cần Thơ-Cà Mau</h4>
                    </div>
                    <div class="thoigian">
                        <i class="	fa fa-clock-o"></i> 4 ngày 3 đêm
                    </div>
                    <div class="khoihanh">
                        <i class="fa fa-calendar-check-o"></i> 20/11/2024
                    </div>
                    <div class="slot">
                        <i class="fa fa-male"></i>  Còn 10 chỗ
                    </div>
                    <div class="gia" style="color: red; font-size: 16px;"><strong>7.000.000 vnđ</strong></div>
                    <div style="display: flex; justify-content:center;">
                        <input type="submit" value="Đặt ngay" style="background-color: red; color: white;">
                    </div>
                </div>
                <div class="tour">
                    <div class="imgtour">
                        <img src="../img/banner1.jpg" alt="">
                    </div>
                    <div class="tentour">
                        <h4>Mỹ Tho-Bến Tre-Cần Thơ-Cà Mau</h4>
                    </div>
                    <div class="thoigian">
                        <i class="	fa fa-clock-o"></i> 4 ngày 3 đêm
                    </div>
                    <div class="khoihanh">
                        <i class="fa fa-calendar-check-o"></i> 20/11/2024
                    </div>
                    <div class="slot">
                        <i class="fa fa-male"></i>  Còn 10 chỗ
                    </div>
                    <div class="gia" style="color: red; font-size: 16px;"><strong>7.000.000 vnđ</strong></div>
                    <div style="display: flex; justify-content:center;">
                        <input type="submit" value="Đặt ngay" style="background-color: red; color: white;">
                    </div>
                </div>
            </div>
            <div class="sb" style="justify-content: center; display: flex;">
                <input type="submit" style="background-color: white; color: red; border: 2px solid red; margin-top: 20px;" value="Xem tất cả tour">
            </div>
        </div>

        <div class="content">
            <div class="tenmien">
                <h2>TIN TỨC</h2>
            </div>
            <div class="list-blog">
                <div class="tour">
                    <div class="imgtour">
                        <img src="../img/banner2.jpg" alt="">
                    </div>
                    <div class="tentour">
                        <h4>Vui chơi thả ga cùng bạn bè tại Phan Thiết với cẩm nang du lịch chi tiết này</h4>
                    </div>
                    <div class="noidung" style="color: gray;">
                    Phan Thiết là một thành phố thuộc tỉnh Bình Thuận, nằm trên quốc lộ 1A cách TP Hồ Chí Minh 183 km về hướng...
                    </div>
                    <div style="display: flex; justify-content:center;">
                        <input type="submit" value="Đọc thêm" style="background-color: white; color: black;">
                    </div>
                </div>

                <div class="tour">
                    <div class="imgtour">
                        <img src="../img/banner2.jpg" alt="">
                    </div>
                    <div class="tentour">
                        <h4>Vui chơi thả ga cùng bạn bè tại Phan Thiết với cẩm nang du lịch chi tiết này</h4>
                    </div>
                    <div class="noidung" style="color: gray;">
                    Phan Thiết là một thành phố thuộc tỉnh Bình Thuận, nằm trên quốc lộ 1A cách TP Hồ Chí Minh 183 km về hướng...
                    </div>
                    <div style="display: flex; justify-content:center;">
                        <input type="submit" value="Đọc thêm" style="background-color: white; color: black;">
                    </div>
                </div>

                <div class="tour">
                    <div class="imgtour">
                        <img src="../img/banner2.jpg" alt="">
                    </div>
                    <div class="tentour">
                        <h4>Vui chơi thả ga cùng bạn bè tại Phan Thiết với cẩm nang du lịch chi tiết này</h4>
                    </div>
                    <div class="noidung" style="color: gray;">
                    Phan Thiết là một thành phố thuộc tỉnh Bình Thuận, nằm trên quốc lộ 1A cách TP Hồ Chí Minh 183 km về hướng...
                    </div>
                    <div style="display: flex; justify-content:center;">
                        <input type="submit" value="Đọc thêm" style="background-color: white; color: black;">
                    </div>
                </div>
            </div>
            <div class="sb" style="justify-content: center; display: flex;">
                <input type="submit" style="background-color: white; color: red; border: 2px solid red; margin-top: 20px;" value="Xem tất cả tin tức">
            </div>
        </div>

    </div>

    <div class="footer">
        <p style="margin: 5px 0; color: #555; font-size: 14px;">190 Pasteur, Phường Võ Thị Sáu, Quận 3, TP.HCM</p>
        <p style="margin: 5px 0; color: #555; font-size: 14px;">(+84 28) 3822 8898 - info@seventravel.com</p>
        <p style="margin: 5px 0; color: #555; font-size: 14px;">© Seventravel 2024</p>
    </div>
</body>
</html>