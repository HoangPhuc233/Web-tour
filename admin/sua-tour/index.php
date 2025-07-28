<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Tour</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color:mistyrose;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
        }
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-group select {
            appearance: none;
        }
        .btn-submit {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>SỬA TOUR</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="ma-blog">Mã Blog</label>
                <input type="text" id="ma-blog" name="ma_blog" value="T001">
            </div>
            <div class="form-group">
                <label for="ten-tour">Tên Tour</label>
                <input type="text" id="ten-tour" name="ten_tour" value="Tour Du Lịch Côn Đảo 2N1Đ từ Sài Gòn">
            </div>
            <div class="form-group">
                <label for="hanh-trinh">Hành Trình</label>
                <input type="text" id="hanh-trinh" name="hanh_trinh" value="Hoang Sơ - Côn Đảo">
            </div>
            <div class="form-group">
                <label for="thoi-gian">Thời Gian</label>
                <select id="thoi-gian-ngay" name="thoi_gian_ngay">
                    
                </select>
                <label for="thoi-gian">Ngày</label>
                <select id="thoi-gian-dem" name="thoi_gian_dem">
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                </select>
                <label for="thoi-gian">Đêm</label>
                
            </div>
            <div class="form-group">
                <label for="ngay-khoi-hanh">Ngày Khởi Hành</label>
                <select id="ngay-khoi-hanh" name="ngay_khoi_hanh">
                    <option>Hàng tuần</option>
                    <option>Không lựa chọn</option>
                </select>
            </div>
            <div class="form-group">
                <label for="di-chuyen">Di Chuyển</label>
                <select id="di-chuyen" name="di_chuyen">
                    <option>Xe 16 chỗ </option>
                    <option>Xe 30 chỗ</option>
                </select>
            </div>
            <div class="form-group">
                <label for="noi-khoi-hanh">Nơi Khởi Hành</label>
                <select id="noi-khoi-hanh" name="noi_khoi_hanh">
                    <option>Tỉnh Thừa Thiên Huế</option>
                </select>
            </div>
            <div class="form-group">
                <label for="noi-den">Nơi Đến</label>
                <select id="noi-den" name="noi_den">
                    <option>Tỉnh Thừa Thiên Huế</option>
                </select>
            </div>
            <button type="submit" class="btn-submit">Tiếp Tục</button>
        </form>
    </div>
</body>
</html>