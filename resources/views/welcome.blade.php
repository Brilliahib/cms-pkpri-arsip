<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- SEO Meta -->
    <title>Sistem Kearsipan Data PKPRI Surakarta</title>
    <meta name="description" content="Sistem Kearsipan Data Digital PKPRI Surakarta untuk memudahkan akses, pencarian, dan pengelolaan arsip secara aman dan efisien.">
    <meta name="keywords" content="PKPRI, Arsip Digital, Sistem Kearsipan, Surakarta, Arsip PKPRI, Data Digital">
    <meta name="author" content="PKPRI Surakarta">

    <!-- Open Graph (optional, untuk sosial media) -->
    <meta property="og:title" content="Sistem Kearsipan Data PKPRI Surakarta" />
    <meta property="og:description" content="Akses cepat dan aman ke arsip digital PKPRI Surakarta." />
    <meta property="og:image" content="/images/logo.png" />
    <meta property="og:url" content="https://pkpri-surakarta.id" />
    <meta property="og:type" content="website" />

    <!-- Favicon -->
    <link rel="icon" href="/images/logo.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

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

        .hero {
            background: linear-gradient(to right, #388e3c, #66bb6a);
            color: white;
            padding: 100px 0;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
        }

        .hero p {
            font-size: 1.2rem;
        }

        .btn {
            padding: 8px 36px;
            border-radius: 8px;
        }

        .hero {
            background: url('/images/hero.jpg') center 90% / cover no-repeat;
            color: white;
            min-height: 60vh;
            padding: 120px 0;
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            text-align: center;
        }

        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        .btn-primary {
            background-color: #188341;
            border-color: #188341;
        }

        .btn-primary:hover {
            background-color: rgb(21, 102, 52);
        }

        .feature-box {
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }

        .feature-box:hover {
            transform: translateY(-5px);
        }

        footer {
            background-color: #188341;
            color: white;
            padding: 20px 0;
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
                    <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Panduan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
                </ul>
                <a href="/admin/login" class="btn btn-success ms-lg-3 mt-2 mt-lg-0">Masuk</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero text-center">
        <div class="container">
            <h1 class="font-paytone">Sistem Kearsipan Data</h1>
            <p class="mb-4">Digitalisasi arsip PKPRI Surakarta untuk pengelolaan yang lebih mudah, cepat, dan aman.</p>
            <a href="/admin/login" class="btn btn-light text-success fw-semibold">Mulai Sekarang</a>
        </div>
    </section>


    <!-- Features -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="font-paytone">Fitur Unggulan</h1>
                <p class="text-muted">Kemudahan akses dan pengelolaan arsip digital.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-box bg-white text-center">
                        <i class="bi bi-cloud-arrow-down-fill fs-1 text-success mb-3"></i>
                        <h5 class="fw-bold mb-3">Akses Mudah</h5>
                        <p>Mencari dan melihat arsip kapan pun dan di mana pun hanya dalam beberapa klik.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box bg-white text-center">
                        <i class="bi bi-shield-lock-fill fs-1 text-success mb-3"></i>
                        <h5 class="fw-bold mb-3">Keamanan Data</h5>
                        <p>Sistem terenkripsi untuk memastikan data arsip tetap aman dan terlindungi.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box bg-white text-center">
                        <i class="bi bi-speedometer2 fs-1 text-success mb-3"></i>
                        <h5 class="fw-bold mb-3">Efisiensi Waktu</h5>
                        <p>Proses pengarsipan dan pencarian dokumen menjadi lebih cepat dan efisien.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-white pt-5" style="background-color: #188341;">
        <div class="container">
            <div class="row gy-4 justify-content-between">
                <!-- Logo dan Info -->
                <div class="col-md-4">
                    <div class="d-flex align-items-center mb-3">
                        <img src="/images/logo-pkpri.png" alt="Logo PKPRI" height="40" class="me-2">
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>