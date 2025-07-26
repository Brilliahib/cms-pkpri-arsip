<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PKPRI Surakarta')</title>

    <!-- SEO -->
    <meta name="description" content="Sistem Kearsipan Data Digital PKPRI Surakarta">
    <meta name="keywords" content="PKPRI, Arsip, Surakarta">
    <meta name="author" content="PKPRI Surakarta">

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        .font-paytone {
            font-family: 'Paytone One', sans-serif;
        }

        .navbar {
            background-color: #f5f5f5 !important;
        }

        .navbar-brand,
        .nav-link {
            color: #000 !important;
        }

        .btn {
            padding: 8px 36px;
            border-radius: 8px;
        }

        footer {
            background-color: #188341;
            color: white;
            padding: 20px 0;
        }

        .pagination .page-link {
            color: #188341;
        }

        .pagination .page-item.active .page-link {
            background-color: #188341;
            border-color: #188341;
            color: #fff;
        }

        .pagination .page-link:hover {
            color: #fff;
            background-color: #157034;
            border-color: #157034;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="#">
                <img src="/images/logo-pkpri.png" alt="Logo PKPRI" height="40" />
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon bg-light"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="/panduan">Panduan</a></li>
                    <li class="nav-item"><a class="nav-link" href="/documents">Cari Dokumen</a></li>
                </ul>
                <a href="/admin/login" class="btn btn-success ms-lg-3 mt-2 mt-lg-0">Masuk</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="min-vh-100">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-white pt-5">
        <div class="container">
            <div class="row gy-4 justify-content-between">
                <!-- Info -->
                <div class="col-md-4">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('/images/logo-pkpri.png') }}" alt="Logo PKPRI" height="40" class="me-2">
                    </div>
                    <p class="small">Sistem Kearsipan Data Digital untuk pengelolaan arsip yang lebih efektif dan efisien.</p>
                </div>

                <!-- Navigasi -->
                <div class="col-md-4">
                    <h6 class="fw-semibold mb-4">Link</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none small d-block mb-2">Beranda</a></li>
                        <li><a href="#" class="text-white text-decoration-none small d-block mb-2">Tentang</a></li>
                        <li><a href="#" class="text-white text-decoration-none small d-block mb-2">Panduan</a></li>
                        <li><a href="#" class="text-white text-decoration-none small d-block mb-2">Kontak</a></li>
                    </ul>
                </div>

                <!-- Sosial Media -->
                <div class="col-md-3">
                    <h6 class="fw-semibold mb-4">Ikuti Kami</h6>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-white fs-5"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white fs-5"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white fs-5"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="text-white fs-5"><i class="bi bi-envelope-fill"></i></a>
                    </div>
                </div>
            </div>

            <hr class="border-light my-4" />

            <div class="text-center small mb-2">
                © 2025 PKPRI Surakarta.
            </div>
            <p class="text-center small">Dikelola oleh Kelompok 2 TIM KKNT 153 Universitas Diponegoro</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>