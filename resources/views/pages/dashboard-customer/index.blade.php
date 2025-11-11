@extends('layouts.app')

@section('title', 'Dashboard Customer')
@section('content')
    <main class="dashboard-customer d-flex min-vh-100 flex-nowrap">
        @include('layouts.partials.sidebar')
        <div class="main-div rounded-md-start-4 flex-grow-1 p-5 mb-5">
            <h3 class="fw-bold dashboard-title">Dashboard</h3>
            <section class="banner-digital py-5 px-md-0 px-2">
                <div class=" px-md-5 container bg-banner d-flex justify-content-center align-items-center">
                    <div class="col-md-6 col-12 d-flex justify-content-start align-items-start flex-column">
                        <h1 class="fw-bold mb-2">Selamat Datang, <span class="">Rizky</span></h1>
                        <p class=" mb-3">
                            Senang bertemu lagi! Kelola undangan digitalmu di sini dan pantau semua aktivitas tamu dengan
                            mudah.
                        </p>
                    </div>
                    <div class="col-md-6 d-md-flex d-none justify-content-end align-items-end">
                        <img src="images/dashboard.png" alt="Undangan Digital" class="img-banner-digital img-fluid" />
                    </div>
                </div>
            </section>
            <section class="info-dashboard pt-5 px-md-0 px-2 g-4">

                <!-- Statistik Undangan -->
                <div class="row  g-4 mb-4">
                    <div class="col-md-3 col-6">
                        <div class="card text-center border-0 shadow-sm p-3 rounded-4 h-100">
                            <h6 class=" mb-1">Total Tamu</h6>
                            <h3 class="fw-bold">150</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card text-center border-0 shadow-sm p-3 rounded-4 h-100">
                            <h6 class=" mb-1">RSVP Hadir</h6>
                            <h3 class="fw-bold ">120</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card text-center border-0 shadow-sm p-3 rounded-4 h-100">
                            <h6 class=" mb-1">Belum RSVP</h6>
                            <h3 class="fw-bold ">25</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card text-center border-0 shadow-sm p-3 rounded-4 h-100">
                            <h6 class=" mb-1">Ucapan Masuk</h6>
                            <h3 class="fw-bold ">58</h3>
                        </div>
                    </div>
                </div>

                <!-- Preview Undangan -->
                <div class="card border-0 shadow-sm p-4 rounded-4 mb-4">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div>
                            <h5 class="fw-bold mb-2">Undangan Kamu</h5>
                            <p class=" mb-3">Rizky & Marsheila Wedding</p>
                            <p class="mb-3"><strong>Status : </strong> <span
                                    class="p-2 rounded-pill bg-success fw-bold">Active</span></p>
                            <div class="dropdown mb-md-0 mb-3">
                                <button class="btn btn-light border-0" type="button" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Kelola Undangan
                                </button>
                                <ul class="dropdown-menu shadow border-0 rounded-3" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i> Edit</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i> Lihat</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-share me-2"></i> Bagikan</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="#"><i
                                                class="bi bi-repeat me-2"></i>
                                            Ganti</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="">
                            <img src="images/inv1.jpg" alt="Preview Undangan" class="img-fluid rounded-4 shadow-sm"
                                style="max-width: 220px;">
                            <h5 class="text-md-center mt-3">Code : DIGINV001</h5>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </main>
@endsection
