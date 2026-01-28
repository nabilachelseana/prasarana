<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SarPras - Sistem Manajemen Sarana Prasarana</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --accent-color: #3b82f6;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }

        .hero-section {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="white" opacity="0.1"/></svg>');
            opacity: 0.3;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .feature-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            font-size: 2rem;
            color: white;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 20px rgba(37, 99, 235, 0.4);
        }

        .btn-outline-light {
            border: 2px solid white;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-outline-light:hover {
            background: white;
            color: var(--primary-color);
            transform: scale(1.05);
        }

        .report-section {
            background: #f8f9fa;
            padding: 80px 0;
        }

        .report-form {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        }

        .form-control, .form-select {
            border-radius: 10px;
            border: 2px solid #e5e7eb;
            padding: 12px 20px;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(37, 99, 235, 0.25);
        }

        .stats-section {
            background: white;
            padding: 60px 0;
        }

        .stat-card {
            text-align: center;
            padding: 30px;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .stat-label {
            font-size: 1.1rem;
            color: #6b7280;
            margin-top: 10px;
        }

        footer {
            background: #1f2937;
            color: white;
            padding: 40px 0 20px;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .section-subtitle {
            font-size: 1.2rem;
            color: #6b7280;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-building"></i> SarPras
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#fitur">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#lapor">Lapor Masalah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="btn btn-outline-light btn-sm" href="#login">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="beranda">
        <div class="container hero-content">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Kelola Sarana Prasarana dengan Mudah</h1>
                    <p class="lead mb-4">Sistem manajemen sarana dan prasarana yang terintegrasi untuk memudahkan pelaporan, pemeliharaan, dan monitoring kondisi fasilitas institusi Anda.</p>
                    <div class="d-flex gap-3">
                        <a href="#lapor" class="btn btn-primary btn-lg">
                            <i class="fas fa-exclamation-circle"></i> Laporkan Masalah
                        </a>
                        <a href="#fitur" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-info-circle"></i> Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center mt-5 mt-lg-0">
                    <i class="fas fa-tools" style="font-size: 15rem; opacity: 0.2;"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="stat-card">
                        <div class="stat-number">1,250+</div>
                        <div class="stat-label">Aset Terdaftar</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="stat-card">
                        <div class="stat-number">350+</div>
                        <div class="stat-label">Laporan Selesai</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="stat-card">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Tingkat Kepuasan</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="stat-card">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">Layanan Aktif</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5" id="fitur">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Fitur Unggulan</h2>
                <p class="section-subtitle">Berbagai fitur yang memudahkan pengelolaan sarana prasarana</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card feature-card shadow-sm">
                        <div class="card-body p-4">
                            <div class="feature-icon mx-auto">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <h4 class="card-title text-center mb-3">Pelaporan Masalah</h4>
                            <p class="card-text text-center text-muted">Laporkan kerusakan atau masalah sarana prasarana dengan mudah dan cepat tanpa perlu login.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card shadow-sm">
                        <div class="card-body p-4">
                            <div class="feature-icon mx-auto">
                                <i class="fas fa-clipboard-check"></i>
                            </div>
                            <h4 class="card-title text-center mb-3">Tracking Status</h4>
                            <p class="card-text text-center text-muted">Pantau status perbaikan dan pemeliharaan sarana prasarana secara real-time.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card shadow-sm">
                        <div class="card-body p-4">
                            <div class="feature-icon mx-auto">
                                <i class="fas fa-database"></i>
                            </div>
                            <h4 class="card-title text-center mb-3">Database Aset</h4>
                            <p class="card-text text-center text-muted">Kelola dan dokumentasikan semua aset sarana prasarana dalam satu sistem terpadu.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card shadow-sm">
                        <div class="card-body p-4">
                            <div class="feature-icon mx-auto">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h4 class="card-title text-center mb-3">Laporan & Analitik</h4>
                            <p class="card-text text-center text-muted">Dapatkan laporan dan analisis kondisi sarana prasarana untuk pengambilan keputusan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card shadow-sm">
                        <div class="card-body p-4">
                            <div class="feature-icon mx-auto">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <h4 class="card-title text-center mb-3">Jadwal Maintenance</h4>
                            <p class="card-text text-center text-muted">Atur jadwal pemeliharaan berkala untuk menjaga kondisi optimal fasilitas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card shadow-sm">
                        <div class="card-body p-4">
                            <div class="feature-icon mx-auto">
                                <i class="fas fa-bell"></i>
                            </div>
                            <h4 class="card-title text-center mb-3">Notifikasi</h4>
                            <p class="card-text text-center text-muted">Terima notifikasi otomatis untuk setiap update status laporan dan maintenance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Report Problem Section -->
    <section class="report-section" id="lapor">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Laporkan Masalah</h2>
                <p class="section-subtitle">Temukan masalah sarana prasarana? Laporkan sekarang!</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="report-form">
                        <form id="reportForm">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="namaPerapor" class="form-label">Nama Pelapor <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="namaPerapor" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="noTelepon" class="form-label">No. Telepon</label>
                                    <input type="tel" class="form-control" id="noTelepon">
                                </div>
                                <div class="col-md-6">
                                    <label for="kategori" class="form-label">Kategori <span class="text-danger">*</span></label>
                                    <select class="form-select" id="kategori" required>
                                        <option value="">Pilih Kategori</option>
                                        <option value="gedung">Gedung & Bangunan</option>
                                        <option value="listrik">Listrik</option>
                                        <option value="air">Air & Sanitasi</option>
                                        <option value="furniture">Furniture</option>
                                        <option value="elektronik">Peralatan Elektronik</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="lokasi" class="form-label">Lokasi <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="lokasi" placeholder="Contoh: Gedung A, Lantai 2, Ruang 201" required>
                                </div>
                                <div class="col-12">
                                    <label for="judul" class="form-label">Judul Masalah <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="judul" placeholder="Ringkasan singkat masalah" required>
                                </div>
                                <div class="col-12">
                                    <label for="deskripsi" class="form-label">Deskripsi Masalah <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="deskripsi" rows="4" placeholder="Jelaskan masalah secara detail..." required></textarea>
                                </div>
                                <div class="col-12">
                                    <label for="prioritas" class="form-label">Tingkat Prioritas <span class="text-danger">*</span></label>
                                    <select class="form-select" id="prioritas" required>
                                        <option value="">Pilih Prioritas</option>
                                        <option value="rendah">Rendah - Tidak Mengganggu</option>
                                        <option value="sedang">Sedang - Sedikit Mengganggu</option>
                                        <option value="tinggi">Tinggi - Sangat Mengganggu</option>
                                        <option value="urgent">Urgent - Membahayakan</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="foto" class="form-label">Upload Foto (Opsional)</label>
                                    <input type="file" class="form-control" id="foto" accept="image/*" multiple>
                                    <small class="text-muted">Format: JPG, PNG (Max 5MB per file)</small>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="agreement" required>
                                        <label class="form-check-label" for="agreement">
                                            Saya menyatakan bahwa informasi yang diberikan adalah benar dan akurat.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg w-100">
                                        <i class="fas fa-paper-plane"></i> Kirim Laporan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5 bg-white" id="tentang">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="section-title">Tentang SarPras</h2>
                    <p class="lead mb-4">Sistem manajemen sarana dan prasarana yang dirancang untuk meningkatkan efisiensi pengelolaan aset dan pemeliharaan fasilitas institusi.</p>
                    <p class="text-muted">Dengan SarPras, setiap orang dapat melaporkan masalah yang ditemukan, dan tim maintenance dapat merespon dengan cepat. Sistem kami membantu menciptakan lingkungan yang lebih baik dan nyaman untuk semua.</p>
                    <div class="mt-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check-circle text-success me-3" style="font-size: 1.5rem;"></i>
                            <span>Pelaporan cepat dan mudah</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check-circle text-success me-3" style="font-size: 1.5rem;"></i>
                            <span>Tracking real-time</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-check-circle text-success me-3" style="font-size: 1.5rem;"></i>
                            <span>Dashboard analitik komprehensif</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <i class="fas fa-cogs" style="font-size: 20rem; color: var(--primary-color); opacity: 0.1;"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5 class="mb-3"><i class="fas fa-building"></i> SarPras</h5>
                    <p class="text-light">Sistem Manajemen Sarana dan Prasarana yang memudahkan pengelolaan aset institusi Anda.</p>
                    <div class="d-flex gap-3 mt-3">
                        <a href="#" class="text-light"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-linkedin fa-lg"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-lg-0">
                    <h6 class="mb-3">Menu</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#beranda" class="text-light text-decoration-none">Beranda</a></li>
                        <li class="mb-2"><a href="#fitur" class="text-light text-decoration-none">Fitur</a></li>
                        <li class="mb-2"><a href="#lapor" class="text-light text-decoration-none">Lapor Masalah</a></li>
                        <li class="mb-2"><a href="#tentang" class="text-light text-decoration-none">Tentang</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 mb-4 mb-lg-0">
                    <h6 class="mb-3">Layanan</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Manajemen Aset</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Maintenance</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Pelaporan</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none">Analitik</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h6 class="mb-3">Kontak</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2 text-light"><i class="fas fa-map-marker-alt me-2"></i> Jl. Contoh No. 123, Surabaya</li>
                        <li class="mb-2 text-light"><i class="fas fa-phone me-2"></i> +62 812-3456-7890</li>
                        <li class="mb-2 text-light"><i class="fas fa-envelope me-2"></i> info@sarpras.id</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 bg-light">
            <div class="text-center text-light">
                <p class="mb-0">&copy; 2026 SarPras. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Form submission
        document.getElementById('reportForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simulate form submission
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Mengirim...';
            submitBtn.disabled = true;

            setTimeout(() => {
                alert('Terima kasih! Laporan Anda telah dikirim. Kami akan segera menindaklanjuti.');
                this.reset();
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 1500);
        });

        // Navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.boxShadow = '0 4px 20px rgba(0,0,0,0.2)';
            } else {
                navbar.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
            }
        });
    </script>
</body>
</html>