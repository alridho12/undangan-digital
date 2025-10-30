@extends('layouts.app')

@section('title', 'Home')
@section('content')
    <main class="main">
        {{-- Hero Section --}}
        <section id="hero" class="hero-section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-center align-items-center text-center text-white" style="min-height: 100vh;">
                    <div class="col-lg-12">
                        <h1 class="display-4 fw-bold mb-4 text-uppercase">Selamat Datang Di Karta Invitation</h1>
                        <p class="lead mb-4">
                            <span class="typed"
                                data-typed-items="Solusi Undangan Pernikahan Digital dan Cetak yang Mudah dan Elegan"></span>
                            <span class="typed-cursor" aria-hidden="true"></span>
                        </p>
                        {{-- <p class="lead mb-4">Solusi Undangan Pernikahan Digital dan Cetak yang Mudah dan Elegan</p> --}}
                    </div>
                </div>
            </div>
        </section>
        {{-- End Hero Section --}}

        {{-- Banner Section --}}
        <section id="banner" class="banner">
            <div class="container text-light">
                <div class="row align-items-center mx-0">
                    <div class="col-md-6 banner-text text-start" data-aos="fade-left" data-aos-delay="100">
                        <h2 class="fw-light">Promo Spesial Bulan Ini !</h2>
                        <h1 class="fw-bold text-highlight">Diskon 50% Untuk 100 Pengguna Pertama</h1>
                        <a href="#" class="btn btn-light btn-shop fw-bold text-uppercase">Dapatkan Sekarang</a>
                        <div class="time">
                            <div class="countdown d-flex gap-3 mt-3">
                                <div class="time-box p-3 bg-white text-dark rounded">
                                    <span id="days" class="fs-4 fw-bold">00</span>
                                    <div class="small text-uppercase">Hari</div>
                                </div>
                                <div class="time-box p-3 bg-white text-dark rounded">
                                    <span id="hours" class="fs-4 fw-bold">00</span>
                                    <div class="small text-uppercase">Jam</div>
                                </div>
                                <div class="time-box p-3 bg-white text-dark rounded">
                                    <span id="minutes" class="fs-4 fw-bold">00</span>
                                    <div class="small text-uppercase">Menit</div>
                                </div>
                                <div class="time-box p-3 bg-white text-dark rounded">
                                    <span id="seconds" class="fs-4 fw-bold">00</span>
                                    <div class="small text-uppercase">Detik</div>
                                </div>
                            </div>
                        </div>
                        <div class="stats mt-3">
                            <small>*Berlaku hingga 31 Oktober 2025 atau Hanya sampai Minggu ini*</small>
                        </div>
                    </div>
                    <div class="col-md-6 banner-image text-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="/images/banner.png" alt="promo banner" class="img-fluid banner-photo">
                    </div>
                </div>
            </div>
        </section>
        {{-- End Banner Section --}}

        {{-- Preview Section --}}
        <section id="preview" class="preview-section">
            <div class="container text-center py-5">
                <div data-aos="fade-up" data-aos-delay="100">
                    <h2 class="fw-semibold mb-3 text-title">
                        Mulai Cerita Cintamu dengan Desain yang Indah
                    </h2>
                    <p class="text-secondary mb-5">
                        Bagikan kebahagiaan pernikahanmu dengan menggunakan website undangan
                        pernikahan eksklusif dari <strong>Karta Invitation</strong>.
                        <span class="fw-semibold">Mudah, cepat & berkesan.</span>
                    </p>
                </div>

                <div class="row align-items-end justify-content-center g-md-5 text-center mx-0">
                    <!-- Undangan Digital -->
                    <div class="col-md-5 d-flex flex-column align-items-center digital-invitation" data-aos="fade-left" data-aos-delay="100">
                        <img src="images/preview1.png" alt="Undangan Digital" class="img-fluid mockup mb-4" />
                        <a href="/undangan-digital" class="btn btn-preview px-4 py-2">Buat Undangan Digital</a>
                    </div>

                    <!-- Undangan Fisik -->
                    <div class="col-md-5 d-flex flex-column align-items-center fisik-invitation" data-aos="fade-right" data-aos-delay="100">
                        <img src="images/preview2.png" alt="Undangan Fisik" class="img-fluid mockup mb-4" />
                        <a href="#buat" class="btn btn-preview px-4 py-2">Buat Undangan Fisik</a>
                    </div>
                </div>

            </div>
        </section>
        {{-- End Preview Section --}}

        {{-- Price Section --}}
        <section id="price" class="price-section">
            <div class="container text-center py-5" data-aos="fade-zoom-in" data-aos-delay="100">
                <h2 class="fw-semibold mb-3 text-title">Pilih Paket</h2>
                <p class="text-secondary mb-5">
                    Pilih paket yang paling sesuai dengan kebutuhanmu
                </p>

                <div class="row justify-content-center g-4">
                    <!-- Paket Silver -->
                    <div class="col-md-4">
                        <div class="card price-card shadow-sm h-100">
                            <div class="card-header bg-secondary text-white fw-semibold py-3">
                                Silver
                            </div>
                            <div class="card-body">
                                <p class="text-decoration-line-through text-danger mb-0">
                                    Rp200.000
                                </p>
                                <h3 class="fw-bold mb-4 text-price">Rp149.000</h3>

                                <ul class="list-unstyled text-start mb-4">
                                    <li class="check">Masa Aktif 3 Bulan</li>
                                    <li class="check">Bahasa Indonesia / Inggris</li>
                                    <li class="check">Jumlah Tamu Tidak Terbatas</li>
                                    <li class="check">Custom Nama Tamu</li>
                                    <li class="check">Cover Pembuka</li>
                                    <li class="check">Detail Info Acara</li>
                                    <li class="check">Profil Pasangan</li>
                                    <li class="check">Protokol Kesehatan</li>
                                    <li class="check">Navigasi Lokasi</li>
                                    <li class="check">Tambahkan ke Google Calendar</li>
                                    <li class="check">Amplop Digital</li>
                                    <li class="check">Wedding Wishes</li>
                                    <li class="check">Konfirmasi Kehadiran</li>
                                    <li class="check">Background Music</li>
                                    <li class="cross">Galeri Foto</li>
                                    <li class="cross">Video Prewed</li>
                                    <li class="cross">Tombol Live Streaming</li>
                                    <li class="cross">Love Stories</li>
                                </ul>

                                <a href="#pesan" class="btn btn-price">Pesan</a>
                                <p class="mt-2 small text-muted">Garansi 7 Hari Uang Kembali</p>
                            </div>
                        </div>
                    </div>

                    <!-- Paket Gold -->
                    <div class="col-md-4">
                        <div class="card price-card shadow-sm h-100">
                            <div class="card-header gold text-white fw-semibold py-3">
                                Gold
                            </div>
                            <div class="card-body">
                                <p class="text-decoration-line-through text-danger mb-0">
                                    Rp400.000
                                </p>
                                <h3 class="fw-bold mb-4 text-price">Rp199.000</h3>

                                <ul class="list-unstyled text-start mb-4">
                                    <li class="check">Masa Aktif 6 Bulan</li>
                                    <li class="check">Bahasa Indonesia / Inggris</li>
                                    <li class="check">Jumlah Tamu Tidak Terbatas</li>
                                    <li class="check">Custom Nama Tamu</li>
                                    <li class="check">Cover Pembuka</li>
                                    <li class="check">Detail Info Acara</li>
                                    <li class="check">Profil Pasangan</li>
                                    <li class="check">Protokol Kesehatan</li>
                                    <li class="check">Navigasi Lokasi</li>
                                    <li class="check">Tambahkan ke Google Calendar</li>
                                    <li class="check">Countdown Acara</li>
                                    <li class="check">Amplop Digital</li>
                                    <li class="check">Wedding Wishes</li>
                                    <li class="check">Konfirmasi Kehadiran</li>
                                    <li class="check">Background Music</li>
                                    <li class="check">Galeri Foto (Maks 10)</li>
                                    <li class="cross">Video Prewed</li>
                                    <li class="cross">Tombol Live Streaming</li>
                                    <li class="cross">Love Stories</li>
                                </ul>

                                <a href="#pesan" class="btn btn-price">Pesan</a>
                                <p class="mt-2 small text-muted">Garansi 7 Hari Uang Kembali</p>
                            </div>
                        </div>
                    </div>

                    <!-- Paket Diamond -->
                    <div class="col-md-4">
                        <div class="card price-card shadow-sm h-100 best-deal">
                            <div class="card-header diamond text-white fw-semibold py-3 position-relative">
                                Diamond
                                <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-2">Best Deal</span>
                            </div>
                            <div class="card-body">
                                <p class="text-decoration-line-through text-danger mb-0">
                                    Rp500.000
                                </p>
                                <h3 class="fw-bold mb-4 text-price">Rp249.000</h3>

                                <ul class="list-unstyled text-start mb-4">
                                    <li class="check">Masa Aktif 1 Tahun</li>
                                    <li class="check">Bahasa Indonesia / Inggris</li>
                                    <li class="check">Jumlah Tamu Tidak Terbatas</li>
                                    <li class="check">Custom Nama Tamu</li>
                                    <li class="check">Cover Pembuka</li>
                                    <li class="check">Detail Info Acara</li>
                                    <li class="check">Profil Pasangan</li>
                                    <li class="check">Protokol Kesehatan</li>
                                    <li class="check">Navigasi Lokasi</li>
                                    <li class="check">Tambahkan ke Google Calendar</li>
                                    <li class="check">Countdown Acara</li>
                                    <li class="check">Amplop Digital</li>
                                    <li class="check">Wedding Wishes</li>
                                    <li class="check">Konfirmasi Kehadiran</li>
                                    <li class="check">Background Music</li>
                                    <li class="check">Galeri Foto (Maks 20)</li>
                                    <li class="check">Video Prewed</li>
                                    <li class="check">Tombol Live Streaming</li>
                                    <li class="check">Love Stories</li>
                                </ul>

                                <a href="#pesan" class="btn btn-price">Pesan</a>
                                <p class="mt-2 small text-muted">Garansi 7 Hari Uang Kembali</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Price Section --}}

        {{-- Tutorial Section --}}
        <section id="tutorial" class="tutorial-section">
            <div class="container text-center py-5">
                <div data-aos="fade-zoom-in" data-aos-delay="100">
                    <h2 class="fw-bold mb-3">Langkah Mudah Membuat Undangan</h2>
                <p class="mb-4">
                    Proses pembuatan undangan digital yang cepat dan sederhana
                </p>
                </div>
                <div class="row justify-content-center g-4">
                    <!-- Step 1 -->
                    <div class="col-md-2 col-sm-6" data-aos="fade-zoom-in" data-aos-delay="200">
                        <div class="tutorial-card h-100">
                            <div class="icon mb-3">
                                <i class="bi bi-clipboard"></i>
                            </div>
                            <h5 class="fw-semibold">01 Pilih Paket</h5>
                            <p>Pilih paket yang sesuai dengan kebutuhanmu.</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="col-md-2 col-sm-6" data-aos="fade-zoom-in" data-aos-delay="300">
                        <div class="tutorial-card h-100">
                            <div class="icon mb-3">
                                <i class="bi bi-cash-stack"></i>
                            </div>
                            <h5 class="fw-semibold">02 Lakukan Pembayaran</h5>
                            <p>Lakukan pemesanan & pembayaran.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="col-md-2 col-sm-6 " data-aos="fade-zoom-in" data-aos-delay="400">
                        <div class="tutorial-card h-100">
                            <div class="icon mb-3">
                                <i class="bi bi-pencil-square"></i>
                            </div>
                            <h5 class="fw-semibold">03 Isi Form Data Pernikahan</h5>
                            <p>Isi data dirimu, pasanganmu, acara & upload foto-foto.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="col-md-2 col-sm-6" data-aos="fade-zoom-in" data-aos-delay="500">
                        <div class="tutorial-card h-100">
                            <div class="icon mb-3">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <h5 class="fw-semibold">04 Review Undanganmu</h5>
                            <p>
                                Undanganmu akan langsung selesai ketika kamu selesai mengisi data dan melakukan review.
                            </p>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="col-md-2 col-sm-6" data-aos="fade-zoom-in" data-aos-delay="600">
                        <div class="tutorial-card h-100">
                            <div class="icon mb-3">
                                <i class="bi bi-send"></i>
                            </div>
                            <h5 class="fw-semibold">05 Undangan Siap Disebar</h5>
                            <p>
                                Setelah desain selesai, kamu dapat mulai menyebarkan link websitemu ke para tamu undangan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Tutorial Section --}}

        {{-- About Section --}}
        <section id="about" class="about">
            <div class="container text-center py-5" data-aos="fade-zoom-out-up" data-aos-delay="100">
                <h2 class="fw-bold mb-3">Mengapa Memilih Kami</h2>
                <p class="mb-4">
                    Kami berkomitmen menghadirkan undangan digital pernikahan yang indah, elegan, dan bermakna.
                    Setiap desain dibuat dengan sepenuh hati untuk menjadikan momen pernikahan Anda lebih berkesan.
                </p>

                <div class="mb-5">
                    <span class="d-block fw-semibold fs-5 text-secondary">
                        Berdiri sejak <span class="year">2015</span> & telah dipercaya oleh lebih dari <span
                            class="member">300+</span> pasangan.
                    </span>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-3 mb-4">
                        <i class="bi bi-heart fs-1 text-danger mb-3"></i>
                        <h5 class="fw-semibold">Desain Romantis</h5>
                        <p>Setiap undangan dirancang dengan sentuhan cinta dan keindahan, sesuai tema pernikahan Anda.</p>
                    </div>
                    <div class="col-md-3 mb-4">
                        <i class="bi bi-emoji-smile fs-1 text-warning mb-3"></i>
                        <h5 class="fw-semibold">Mudah Digunakan</h5>
                        <p>Tinggal kirim link undangan melalui WhatsApp atau media sosial — cepat dan praktis.</p>
                    </div>
                    <div class="col-md-3 mb-4">
                        <i class="bi bi-stars fs-1 text-info mb-3"></i>
                        <h5 class="fw-semibold">Desain Eksklusif</h5>
                        <p>Kami menyediakan template premium yang bisa disesuaikan dengan nama, tanggal, dan foto Anda.</p>
                    </div>
                    <div class="col-md-3 mb-4">
                        <i class="bi bi-gift fs-1 text-pink mb-3"></i>
                        <h5 class="fw-semibold">Fitur Modern</h5>
                        <p>Lengkap dengan galeri foto, RSVP, musik latar, dan peta lokasi digital.</p>
                    </div>
                </div>
            </div>

            <div class="features" data-aos="fade-zoom-out-up" data-aos-delay="200">
                <div class="container text-center py-5">
                    <h2 class="fw-bold mb-3">Fitur Kami</h2>
                    <p class="mb-5">
                        Website Undangan Digital kami dilengkapi dengan berbagai fitur yang memudahkan Anda
                        mengundang orang-orang terdekat ke acara spesial Anda.
                    </p>

                    <div class="row justify-content-center">
                        <div class="col-md-4 mb-4" data-aos="fade-zoom-out-up" data-aos-delay="300">
                            <div class="feature-box">
                                <i class="bi bi-brush fs-2 mb-3"></i>
                                <h5 class="fw-semibold">Desain Elegan & Modern</h5>
                                <p>Undangan didesain dengan elegan dan berkesan.</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4" data-aos="fade-zoom-out-up" data-aos-delay="400">
                            <div class="feature-box">
                                <i class="bi bi-people fs-2 mb-3"></i>
                                <h5 class="fw-semibold">Jumlah Tamu Tanpa Batasan</h5>
                                <p>Tidak ada biaya tambahan untuk berapapun tamu yang diundang.</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4" data-aos="fade-zoom-out-up" data-aos-delay="500">
                            <div class="feature-box">
                                <i class="bi bi-type fs-2 mb-3"></i>
                                <h5 class="fw-semibold">Custom Nama Tamu</h5>
                                <p>Sertakan nama teman atau keluarga agar undangan lebih eksklusif.</p>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4" data-aos="fade-zoom-out-up" data-aos-delay="300">
                            <div class="feature-box">
                                <i class="bi bi-phone fs-2 mb-3"></i>
                                <h5 class="fw-semibold">Akses Dimana Saja</h5>
                                <p>Akses undangan dari perangkat apa pun dengan cepat.</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4" data-aos="fade-zoom-out-up" data-aos-delay="400">
                            <div class="feature-box">
                                <i class="bi bi-check2-square fs-2 mb-3"></i>
                                <h5 class="fw-semibold">RSVP</h5>
                                <p>Tamu dapat mengonfirmasi kehadiran langsung melalui undangan.</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4" data-aos="fade-zoom-out-up" data-aos-delay="500">
                            <div class="feature-box">
                                <i class="bi bi-envelope-paper-heart fs-2 mb-3"></i>
                                <h5 class="fw-semibold">Amplop Digital</h5>
                                <p>Terima hadiah dari tamu secara digital via transfer atau e-money.</p>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4" data-aos="fade-zoom-out-up" data-aos-delay="300">
                            <div class="feature-box">
                                <i class="bi bi-chat-heart fs-2 mb-3"></i>
                                <h5 class="fw-semibold">Wedding Wishes</h5>
                                <p>Tamu dapat mengirim ucapan dan doa langsung di undangan.</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4" data-aos="fade-zoom-out-up" data-aos-delay="400">
                            <div class="feature-box">
                                <i class="bi bi-geo-alt fs-2 mb-3"></i>
                                <h5 class="fw-semibold">Navigasi Lokasi</h5>
                                <p>Permudah tamu menemukan lokasi acara dengan Google Maps.</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4" data-aos="fade-zoom-out-up" data-aos-delay="500">
                            <div class="feature-box">
                                <i class="bi bi-calendar-heart fs-2 mb-3"></i>
                                <h5 class="fw-semibold">Tambahkan ke Kalender</h5>
                                <p>Tamu bisa menyimpan tanggal acara ke Google Calendar mereka.</p>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4" data-aos="fade-zoom-out-up" data-aos-delay="300">
                            <div class="feature-box">
                                <i class="bi bi-music-note-beamed fs-2 mb-3"></i>
                                <h5 class="fw-semibold">Background Music</h5>
                                <p>Tambahkan musik pilihan agar undangan terasa lebih hidup.</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4" data-aos="fade-zoom-out-up" data-aos-delay="400">
                            <div class="feature-box">
                                <i class="bi bi-images fs-2 mb-3"></i>
                                <h5 class="fw-semibold">Galeri Foto</h5>
                                <p>Bagikan foto dan video momen spesial kepada para undangan.</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4" data-aos="fade-zoom-out-up" data-aos-delay="500">
                            <div class="feature-box">
                                <i class="bi bi-heart fs-2 mb-3"></i>
                                <h5 class="fw-semibold">Love Stories</h5>
                                <p>Ceritakan kisah cinta Anda dengan cara yang manis dan hangat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End About Section --}}

        {{-- Testimonial Section --}}
        <section id="testimonial" class="testimonial-section py-5">
            <div class="container text-center py-5 frame-testimonial" data-aos="fade-up" data-aos-delay="100">
                <h2 class="fw-semibold mb-3 text-title">Apa Kata Mereka</h2>
                <p class="text-light mb-5">
                    Dengarkan pengalaman dari pasangan yang telah menggunakan layanan kami
                </p>

                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <!-- Testimonial 1 -->
                        <div class="carousel-item active">
                            <div class="card testimonial-card mx-auto" style="max-width: 600px;">
                                <div class="card-body">
                                    <p class="testimonial-text mb-4">
                                        "Karta Invitation membuat undangan pernikahan kami menjadi sangat istimewa.
                                        Desainnya elegan dan mudah digunakan. Tamu kami sangat terkesan!"
                                    </p>
                                    <h5 class="fw-semibold mb-0">Alya & Rian</h5>
                                    <small class="text-muted">Jakarta</small>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="carousel-item">
                            <div class="card testimonial-card mx-auto" style="max-width: 600px;">
                                <div class="card-body">
                                    <p class="testimonial-text mb-4">
                                        "Pelayanan cepat dan hasil undangan sangat indah. Semua teman memuji tampilannya!"
                                    </p>
                                    <h5 class="fw-semibold mb-0">Nisa & Dimas</h5>
                                    <small class="text-muted">Bandung</small>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="carousel-item">
                            <div class="card testimonial-card mx-auto" style="max-width: 600px;">
                                <div class="card-body">
                                    <p class="testimonial-text mb-4">
                                        "Harga terjangkau tapi kualitas premium! Kami sangat puas dengan hasilnya."
                                    </p>
                                    <h5 class="fw-semibold mb-0">Putri & Arga</h5>
                                    <small class="text-muted">Surabaya</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Sebelumnya</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Berikutnya</span>
                    </button>

                    <!-- Carousel indicators -->
                    <div class="carousel-indicators mt-4">
                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0"
                            class="active"></button>
                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2"></button>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Testimonial Section --}}

        {{-- Kontak Section --}}
        <section id="contact" class="contact-section py-5">
            <div class="container">
                <div class="row align-items-center mb-5" data-aos="fade-down" data-aos-delay="100">
                    <div class="col-md-6">
                        <h2 class="fw-semibold mb-3 text-title">Contact Us</h2>
                        <p class="text-muted">
                            Kami siap membantu Anda mewujudkan undangan digital pernikahan yang
                            elegan, modern, dan berkesan. Silakan hubungi kami untuk informasi
                            lebih lanjut mengenai desain, pemesanan, atau kerja sama.
                        </p>
                    </div>
                    <div class="col-md-6 text-center">
                        <div class="contact-image-wrapper">
                            <img src="/images/contactbanner.jpeg" alt="Office" class="img-fluid contact-image">
                        </div>
                    </div>
                </div>

                <div class="row gy-5 mx-0">
                    <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
                        <h5 class="fw-semibold mb-3 information">Contact Information</h5>
                        <p class="text-muted mb-4">
                            Tim Karta Invitation siap membantu Anda kapan saja. Kami berkomitmen memberikan
                            pelayanan terbaik agar momen spesial Anda semakin istimewa.
                        </p>

                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-circle">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 fw-semibold text-dark">(+62) 823-3727-4550</h6>
                                <small class="text-muted">Mon - Fri 24 hours</small>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-circle">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 fw-semibold text-dark">Karta Invitation@gmail.com</h6>
                                <small class="text-muted">We reply within 24 hours</small>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-circle">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 fw-semibold text-dark">Surabaya, IDN</h6>
                                <small class="text-muted">Kunjungi Kami</small>
                            </div>
                        </div>

                        <h6 class="fw-semibold mb-2 information">Social Media</h6>
                        <div class="d-flex gap-3">
                            <div class="social-icon"><i class="bi bi-instagram"></i></div>
                            <div class="social-icon"><i class="bi bi-tiktok"></i></div>
                            <div class="social-icon"><i class="bi bi-bag"></i></div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
                        <div class="row g-4">
                            <div class="col-md-12">
                                <div class="p-4 rounded-4 form-box">
                                    <h5 class="fw-semibold mb-3 text-white">Get In Touch!</h5>
                                    <p class="text-light small mb-4">
                                        Ingin memiliki undangan digital impian Anda? Kirim pesan kepada
                                        kami, dan tim <strong>Karta Invitation</strong> akan segera menghubungi
                                        Anda untuk membantu proses pembuatan yang mudah dan cepat.
                                    </p>
                                    <form>
                                        <input type="text" class="form-control mb-3" placeholder="Name" required>
                                        <input type="email" class="form-control mb-3" placeholder="Email" required>
                                        <textarea class="form-control mb-3" rows="3" placeholder="Message" required></textarea>
                                        <button type="submit" class="btn btn-information w-100 fw-semibold">Submit
                                            Button</button>
                                    </form>
                                </div>
                            </div>

                            {{-- <div class="col-md-12">
                                <div class="map-box rounded-4 overflow-hidden shadow-sm">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31662.187293566723!2d112.68485658388839!3d-7.266607351940258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fe9f794adb13%3A0x4da089d5c4cb9016!2sMitra%20Keluarga%20Surabaya!5e0!3m2!1sid!2sid!4v1761057113344!5m2!1sid!2sid"
                                        width="700" height="450" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- End Kontak Section --}}
    </main>
@endsection
