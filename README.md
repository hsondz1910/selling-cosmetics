## Mô tả website Skincares
- Cung cấp dịch vụ giỏ hàng và đặt hàng
- Sản phẩm lựa chọn theo các thể loại và tìm kiếm
- Chi tiết từng loại sản phẩm
- Thêm sản phẩm vào danh sách yêu thích
- Theo dõi quá trình đơn hàng
- Nhận xét đánh giá chi tiết sản phẩm

## Hình ảnh website
- Tài khoản người dùng
<img src="https://i.imgur.com/WDCK7Ev.png">
<img src="https://i.imgur.com/nD1k6nF.png">
<img src="https://i.imgur.com/0A8R97C.png">

- Trang chủ
<img src="https://i.imgur.com/EgIbI2k.png">
<img src="https://i.imgur.com/Qtmxbwg.png">
<img src="https://i.imgur.com/7FW2LtN.png">
<img src="https://i.imgur.com/Lw4w694.png">

- Sản phẩm
<img src="https://i.imgur.com/ImHSvrI.png">
<img src="https://i.imgur.com/6CUNkmT.png">
<img src="https://i.imgur.com/GfTsHDo.png">
<img src="https://i.imgur.com/bYs8iDE.png">

- Chi tiết sản phẩm
<img src="https://i.imgur.com/o8OdnTP.png">
<img src="https://i.imgur.com/yyuMHeY.png">
<img src="https://i.imgur.com/XqtMbLG.png">
<img src="https://i.imgur.com/5W8F1kH.png">

- Chi tiết đơn đặt hàng và thanh toán
<img src="https://i.imgur.com/mW4t3oa.png">
<img src="https://i.imgur.com/JYQ2JAh.png">

- Theo dõi đơn hàng và sản phẩm yêu thích
<img src="https://i.imgur.com/OClNAq3.png">
<img src="https://i.imgur.com/WEwPDFq.png">
<img src="https://i.imgur.com/uQYRaQQ.png">

- Tin tức
<img src="https://i.imgur.com/iW5LqN1.png">

- Liên hệ qua Email
<img src="https://i.imgur.com/cpO7Swc.png">

# Chi tiết cài đặt
## Chi tiết cách chỉnh sửa thông tin để sử dụng chức năng quên mật khẩu người dùng
- Mở file php.ini bằng notepad trong folder php với đường dẫn là `C:\xampp\php\php.ini` (ổ đĩa lưu trữ mặc định)
- Ctrl + F và nhập chữ `[mail function]` để tìm thấy nội dung này
- Chỉnh sửa nội dung như các dòng dưới đây:
```
[mail function]
; For Win32 only.
; http://php.net/smtp
SMTP= smtp.gmail.com
; http://php.net/smtp-port
smtp_port=587

; For Win32 only.
; http://php.net/sendmail-from
sendmail_from = "hsondz1910@gmail.com"

; For Unix only.  You may supply arguments as well (default: "sendmail -t -i").
; http://php.net/sendmail-path
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"
```
- Sau đó mở file sendmail.ini bằng notepad với đường dẫn đến tệp là `C:\xampp\sendmail` 
- Tiếp theo là chỉnh sửa như bên dưới:
```
smtp_server=smtp.gmail.com
smtp_port=587

auth_username=hsondz1910@gmail.com
auth_password=ogfc izsf pgyu jwno
```
- Vậy là đã thành công rồi, chúc bạn có trải nghiệm tốt về website của mình

[![PHP Contact Form Tutorial: Sending Email via XAMPP on Localhost](https://i.ytimg.com/vi/aB6iovBcAAQ/maxresdefault.jpg)]([URL_VIDEO](https://www.youtube.com/watch?v=aB6iovBcAAQ))

## Install XAMPP 
- Link install: [XAMPP](https://www.apachefriends.org/download.html)
- Mở PHPMyAdmin: Import file SQL (banmypham)
- Tạo folder MyPham trong: \htdocs\xampp
- Coppy toàn bộ file vào folder MyPham 
- Chạy file với đường dẫn: Localhost/MyPham/TrangChu

