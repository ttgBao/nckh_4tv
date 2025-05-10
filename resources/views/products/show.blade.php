<x-layout>
    <x-slot:title>Chi tiết sản phẩm</x-slot>

        <div class="container mt-5 pt-5" style="margin-top: 100px !important;">
            <div class="row">
                <!-- Hình ảnh sản phẩm chính -->
                <div class="col-md-6 fade-slide-up">
                    <div class="mb-3 w-100">
                        <img id="mainImage" src="{{ asset('images/naruto.jpg') }}"
                            class="img-fluid rounded shadow-sm w-100 zoom-in" alt="Ảnh sản phẩm"
                            style="max-height: 450px; object-fit: cover;">
                    </div>

                    <!-- Ảnh phụ -->
                    <div class="d-flex gap-2 fade-slide-up">
                        <img src="{{ asset('images/naruto.jpg') }}" class="img-thumbnail thumb-img"
                            style="width: 80px; height: 80px; object-fit: cover; cursor: pointer;"
                            onclick="changeImage(this)">
                        <img src="{{ asset('images/naruto2.jpg') }}" class="img-thumbnail thumb-img"
                            style="width: 80px; height: 80px; object-fit: cover; cursor: pointer;"
                            onclick="changeImage(this)">
                        <img src="{{ asset('images/naruto3.jpg') }}" class="img-thumbnail thumb-img"
                            style="width: 80px; height: 80px; object-fit: cover; cursor: pointer;"
                            onclick="changeImage(this)">
                    </div>
                </div>

                <!-- Thông tin sản phẩm -->
                <div class="col-md-6  fade-slide-up">
                    <h3 class="fw-bold mb-2">Siêu anh hùng Naruto giải cứu làng lá</h3>
                    <p class="text-danger fw-bold" style="font-size: 24px;">20.000 đ</p>
                    <p><i class="bi bi-geo-alt-fill"></i> 53 Võ Văn Ngân, Phường Linh Chiểu, TP Thủ Đức, TP.HCM</p>
                    <p><i class="bi bi-clock"></i> Cập nhật 1 phút trước</p>

                    <div class="d-flex gap-3 my-3">
                        <form action="#">
                            <button class="btn btn-outline-secondary rounded-3 px-4">Hiện số 093239****</button>
                        </form>
                        <form action="#">
                            <button class="btn btn-success rounded-3 px-4">💬 Chat</button>
                        </form>
                    </div>

                    <!-- Nút báo cáo + lưu -->
                    <div class="mt-3">
                        <a href="#" class="text-decoration-none text-danger me-3"><i class="bi bi-flag"></i> Báo cáo sản
                            phẩm</a>
                        <a href="#" class="text-decoration-none text-primary"><i class="bi bi-heart"></i> Lưu vào yêu
                            thích</a>
                    </div>

                    <!-- Người bán -->
                    <div class="border rounded-3 p-3 mt-4 d-flex align-items-center justify-content-between bounce-in">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('images/naruto.jpg') }}" alt="Avatar" class="rounded-circle me-3 border"
                                style="width: 60px; height: 60px; object-fit: cover;">
                            <div>
                                <strong><a href="#" class="text-decoration-none">Hoài Quốc</a></strong>
                            </div>
                        </div>
                        <div class="text-end">
                            <span class="text-warning">★ 5</span><br>
                            <a href="#" class="text-black">2 đánh giá</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Thông tin chi tiết bổ sung -->
            <div class="row mt-5  fade-slide-up">
                <div class="col-md-12">
                    <h5 class="fw-bold mb-3">Thông tin chi tiết</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <tbody>
                                <tr>
                                    <th>Danh mục</th>
                                    <td>Phụ kiện</td>
                                </tr>
                                <tr>
                                    <th>Tình trạng</th>
                                    <td>Đã qua sử dụng</td>
                                </tr>
                                <tr>
                                    <th>Chất liệu</th>
                                    <td>Nhựa + kim loại</td>
                                </tr>
                                <tr>
                                    <th>Kích thước</th>
                                    <td>15 x 8 cm</td>
                                </tr>
                                <tr>
                                    <th>Thương hiệu</th>
                                    <td>Khác</td>
                                </tr>
                                <tr>
                                    <th>Thời gian sử dụng</th>
                                    <td>Khoảng 3 tháng</td>
                                </tr>
                                <tr>
                                    <th>Lý do bán</th>
                                    <td>Không còn nhu cầu sử dụng</td>
                                </tr>
                                <tr>
                                    <th>Ngày đăng</th>
                                    <td>17/04/2025</td>
                                </tr>
                                <tr>
                                    <th>Mô tả chi tiết</th>
                                    <td>Hàng sưu tầm, còn mới 90%, không trầy xước, thích hợp trang trí bàn học hoặc làm
                                        quà tặng.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Sản phẩm liên quan -->
            <div class="row mt-5  fade-slide-up">
                <div class="col-md-12">
                    <h5 class="fw-bold mb-3">Sản phẩm tương tự</h5>
                    <div class="row g-3">
                        <!-- Sản phẩm 1 -->
                        <div class="col-md-3 col-6">
                            <div class="card border-0">
                                <a href="#"><img src="{{ asset('images/naruto.jpg') }}" class="card-img-top rounded"
                                        alt="related1" style="height: 180px; object-fit: cover;"></a>
                                <div class="card-body px-0">
                                    <small class="text-muted text-uppercase">Tài liệu</small>
                                    <a href="#" class="text-decoration-none text-black">
                                        <h6 class="fw-semibold mt-1 mb-1 ">Siêu anh hùng Naruto giải cứu làng lá</h6>
                                    </a>
                                    <p class="fw-bold text-black mb-1" style="font-size: 16px;">20,000đ</p>
                                    <div class="text-muted small">
                                        <i class="bi bi-person"></i>
                                        <a href="#" class="text-decoration-none text-primary">HoaiQuoc</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sản phẩm 2 -->
                        <div class="col-md-3 col-6">
                            <div class="card border-0">
                                <a href="#"><img src="{{ asset('images/naruto2.jpg') }}" class="card-img-top rounded"
                                        alt="related1" style="height: 180px; object-fit: cover;"></a>
                                <div class="card-body px-0">
                                    <small class="text-muted text-uppercase">Tài liệu</small>
                                    <a href="#" class="text-decoration-none text-black">
                                        <h6 class="fw-semibold mt-1 mb-1 ">Siêu anh hùng Naruto giải cứu làng lá</h6>
                                    </a>
                                    <p class="fw-bold text-black mb-1" style="font-size: 16px;">20,000đ</p>
                                    <div class="text-muted small">
                                        <i class="bi bi-person"></i>
                                        <a href="#" class="text-decoration-none text-primary">HoaiQuoc</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sản phẩm 3 -->
                        <div class="col-md-3 col-6">
                            <div class="card border-0">
                                <a href="#"><img src="{{ asset('images/naruto.jpg') }}" class="card-img-top rounded"
                                        alt="related1" style="height: 180px; object-fit: cover;"></a>
                                <div class="card-body px-0">
                                    <small class="text-muted text-uppercase">Tài liệu</small>
                                    <a href="#" class="text-decoration-none text-black">
                                        <h6 class="fw-semibold mt-1 mb-1 ">Siêu anh hùng Naruto giải cứu làng lá</h6>
                                    </a>
                                    <p class="fw-bold text-black mb-1" style="font-size: 16px;">20,000đ</p>
                                    <div class="text-muted small">
                                        <i class="bi bi-person"></i>
                                        <a href="#" class="text-decoration-none text-primary">HoaiQuoc</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sản phẩm 4 -->
                        <div class="col-md-3 col-6">
                            <div class="card border-0">
                                <a href="#"><img src="{{ asset('images/naruto3.jpg') }}" class="card-img-top rounded"
                                        alt="related1" style="height: 180px; object-fit: cover;"></a>
                                <div class="card-body px-0">
                                    <small class="text-muted text-uppercase">Tài liệu</small>
                                    <a href="#" class="text-decoration-none text-black">
                                        <h6 class="fw-semibold mt-1 mb-1 ">Siêu anh hùng Naruto giải cứu làng lá</h6>
                                    </a>
                                    <p class="fw-bold text-black mb-1" style="font-size: 16px;">20,000đ</p>
                                    <div class="text-muted small">
                                        <i class="bi bi-person"></i>
                                        <a href="#" class="text-decoration-none text-primary">HoaiQuoc</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function changeImage(thumb) {
                document.getElementById("mainImage").src = thumb.src;
            }

            function changeImage(thumb) {
                document.getElementById("mainImage").src = thumb.src;
            }

            // IntersectionObserver
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('show');
                    } else {
                        entry.target.classList.remove('show');
                    }
                });
            }, {
                threshold: 0.5
            });

            const animatedItems = document.querySelectorAll('.fade-slide-up, .zoom-in, .bounce-in');

            animatedItems.forEach(item => {
                observer.observe(item);
            });

        </script>

</x-layout>
