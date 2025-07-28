# Dự án SevenTour

## Giới thiệu

SevenTour là một hệ thống quản lý tour du lịch, được thiết kế để hỗ trợ quản lý các hoạt động liên quan đến tour du lịch như quản lý tài khoản, quản lý tour, phân chia hướng dẫn viên, và các chức năng khác.

## Cấu trúc thư mục

- **admin/**: Chứa các chức năng quản trị như chỉnh sửa tour, duyệt tour, quản lý tài khoản, quản lý tour, tính lương, xóa tour.

  - **chinh-sua-tour/**: Chỉnh sửa thông tin tour.
  - **duyet-tour/**: Duyệt các tour mới.
  - **phan-chia-hdv/**: Phân chia hướng dẫn viên cho các tour.
  - **quan-li-tai-khoan/**: Quản lý tài khoản người dùng.
  - **quan-li-tour/**: Quản lý thông tin các tour.
  - **sua-tour/**: Sửa thông tin tour.
  - **tinh-luong/**: Tính lương cho nhân viên.
  - **xoa-tour/**: Xóa tour và các chức năng liên quan.

- **chi-tiet-tour/**: Chứa các tệp liên quan đến chi tiết tour.
- **css/**: Chứa các tệp CSS để định dạng giao diện.
- **img/**: Chứa các hình ảnh sử dụng trong dự án.
- **trang-chu/**: Chứa giao diện trang chủ.
- **user/**: Chứa các chức năng liên quan đến người dùng như đăng nhập, đăng ký, quản lý tour cá nhân.

## Công nghệ sử dụng

- Ngôn ngữ lập trình: PHP
- Cơ sở dữ liệu: MySQL
- Frontend: HTML, CSS

## Hướng dẫn cài đặt

1. Clone dự án về máy:
   ```bash
   git clone https://github.com/buianhtai4903/seventour.git
   ```
2. Import cơ sở dữ liệu từ tệp `tour_tmdt (1).sql` vào MySQL.
3. Cấu hình kết nối cơ sở dữ liệu trong các tệp `connection.php`.
4. Chạy dự án trên máy chủ web (XAMPP, WAMP, hoặc các máy chủ tương tự).

## Tác giả

- **Bùi Anh Tài**
- **Lê Hoàng Phuc**

## Ghi chú

Dự án này được phát triển nhằm mục đích học tập và thử nghiệm.
