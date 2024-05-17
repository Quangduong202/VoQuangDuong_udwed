<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')
    </title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">


    <script src="assets/jquery/jquery.js"></script>
    @yield('header')
</head>

<body>





    <header class="section_header ">
        <div class="container bg-info">
            <div class="row">
                <div class="col-md-2">
                    <a href="index.html">
                        <img src="assets/imge/logo.webp" class="img-logo" alt="">

                    </a>
                </div>
                <div class="col-md-7 ">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">Trang chủ</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse " id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Sản phẩm</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Thông tin</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Đăng kí</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" aria-disabled="true">Đăng nhập</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="col-md-3">
                    <ul class="nav">
                        <li class="nav-item px-3">
                            <i class="fa-solid fa-magnifying-glass"></i>

                        </li>
                        <li class="nav-item px-3">
                            <i class="fa-solid fa-user"></i>

                        </li>
                        <li class="nav-item">
                            <i class="fa-regular fa-heart px-3"></i>

                        </li>
                    </ul>
                </div>
    </header>
    <main class="">


        @yield('content')

    </main>



    </div>
    <!-- footer -->
    <footer class="section_footer bg-dark pt-4">
        <div class="container">
            <div class="row text-white">
                <div class="col-md-3">
                    <h5>thông tin lien hệ</h5>
                    <ul>
                        Địa chỉ :
                    </ul>
                    <ul>
                        Điện thoại:
                    </ul>
                    <ul>
                        Email:
                    </ul>

                </div>
                <div class="col-md-4">
                    CHÍNH SÁCH
                    <ul>
                        Chính sách thành viên
                    </ul>
                    <ul>
                        Chính sách thanh toán
                    </ul>
                    <ul>
                        Chính sách đổi sản phẩm
                    </ul>
                    <ul>
                        Chính sách bảo mật
                    </ul>
                    <ul>
                        Chính sách cộng tác viên
                    </ul>
                    <ul>
                        Chính sách bảo hành
                    </ul>
                    <ul>
                        Quy định sử dụng
                    </ul>

                </div>

                <div class="col-md-3">
                    <h5>Hướng dẫn</h5>
                    <ul>
                        <li>
                            Hướng dẫn đổi trả

                        </li>
                        <li>
                            Hướng dẫn thanh toán

                        </li>
                        <li>
                            Chương trình cộng tác viên

                        </li>
                        <li>
                            Câu hỏi thường gặp

                        </li>
                        <li>
                            Tìm kiếm

                        </li>
                        <li>
                            Liên hệ
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js.js"></script>
    @yield('footer')
</body>

</html>
