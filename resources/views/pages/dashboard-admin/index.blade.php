@extends('layouts.app')

@section('title', 'Dashboard Admin')
@section('content')
    <main class="dashboard-customer d-flex min-vh-100 flex-nowrap">
        @include('layouts.partials.sidebar')
        <div class="main-div rounded-md-start-4 flex-grow-1 p-5 mb-5">
            <h3 class="fw-bold dashboard-title">Dashboard</h3>
            <section class="banner-digital py-5 px-md-0 px-2">
                <div class=" px-md-5 container bg-banner d-flex justify-content-center align-items-center">
                    <div class="col-md-6 col-12 d-flex justify-content-start align-items-start flex-column">
                        <h1 class="fw-bold mb-2">Selamat Datang, <span class="">Admin</span></h1>
                        <p class=" mb-3">
                            Kelola undangan digital dengan mudah dan efisien melalui dashboard admin kami. Pantau
                            statistik, atur konten, dan berinteraksi dengan pengguna dalam satu platform terintegrasi.
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
                            <h6 class=" mb-1">Total Undangan</h6>
                            <h3 class="fw-bold">150</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card text-center border-0 shadow-sm p-3 rounded-4 h-100">
                            <h6 class=" mb-1">Total Pesanan</h6>
                            <h3 class="fw-bold ">120</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card text-center border-0 shadow-sm p-3 rounded-4 h-100">
                            <h6 class=" mb-1">Pesanan Pending</h6>
                            <h3 class="fw-bold ">25</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card text-center border-0 shadow-sm p-3 rounded-4 h-100">
                            <h6 class=" mb-1">Pesanan Selesai</h6>
                            <h3 class="fw-bold ">58</h3>
                        </div>
                    </div>
                </div>




            </section>
        </div>
    </main>
@endsection
