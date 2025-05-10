<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Trang web bán đồ cũ' }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product-detail.css') }}">

    
</head>

<body>
    <nav class="header">
        <div class="header-left">
            <a href="/"><img src="{{ asset('images/logo-fittdc.png') }}" alt="Logo" class="logo"></a>
            <div class="dropdown">
                <div class="dropdown-label">
                    Danh Mục <i class="bi bi-chevron-down icon-down"></i>
                </div>
                <div class="dropdown-menu">
                    <a href="#" style="--i:1">Tài liệu</a>
                    <a href="#" style="--i:2">Quần áo</a>
                    <a href="#" style="--i:3">Phụ kiện</a>
                    <a href="#" style="--i:4">Nội thất</a>
                </div>

            </div>
        </div>
        <div class="header-right">
            <a href="#">Đăng bán</a>
            <a href="#">Thông tin cá nhân</a>
            <img src="{{ asset('images/logo-vn.png') }}" alt="VN Flag" class="flag">
            <a href="#" class="login-btn">Đăng Nhập</a>
            <a href="#" class="login-btn">Đăng Ký</a>
        </div>
    </nav>

        {{ $slot }}

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section contact-info">
                <h2>Liên hệ</h2>
                <p>KHOA CÔNG NGHỆ THÔNG TIN<br>
                    Trường Cao Đẳng Công Nghệ Thủ Đức</p>
            </div>

            <div class="footer-section address-info">
                <h2>Địa chỉ</h2>
                <p>53 Võ Văn Ngân, Phường Linh Chiểu, Thành phố Thủ Đức, Thành phố Hồ Chí Minh<br>
                    Điện thoại: (028) 2215 8642<br>
                    Fax: (028) 3896 2474</p>
            </div>

            <div class="footer-section about-info">
                <h2>Về chúng tôi</h2>
                <p>Dự án xây dựng website bán đồ cũ với mục tiêu giúp người dùng dễ dàng tiếp cận các sản phẩm giá rẻ,
                    chất lượng được kiểm định và hỗ trợ bảo hành minh bạch.</p>
            </div>

            <div class="footer-section social-media">
                <h2>Kết nối</h2>
                <a href="#">Facebook</a>
                <a href="#">Zalo</a>
                <a href="#">Instagram</a>
            </div>
        </div>

        <div class="footer-bottom">
            &copy; 2025 Nhóm 4 người mạnh nhất lịch sử.
        </div>
    </footer>

</body>

</html>
