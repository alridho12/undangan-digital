@extends('layouts.app')

@section('title', 'Info Akun')
@section('content')
    <main class="dashboard-customer d-flex min-vh-100 flex-nowrap">
        @include('layouts.partials.sidebar')
        <div class="main-div rounded-md-start-4 flex-grow-1 p-5 mb-5">
            <h3 class="fw-bold dashboard-title">Akun</h3>
            <section class="account-info">
                <div class="row g-4">
                    <!-- Profile Picture & Basic Info -->
                    <div class="col-md-4 text-center">
                        <div class="card border-0 shadow-sm rounded-4 p-4">
                            <i class="bi bi-person-badge-fill profile-icon"></i>
                            <h5 class="fw-bold mb-1">Rizky Saputra</h5>
                            <p class=" small mb-2">Bergabung sejak: 12 Januari 2024</p>

                        </div>
                    </div>

                    <!-- Account Details -->
                    <div class="col-md-8">
                        <div class="card border-0 shadow-sm rounded-4 p-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="fw-bold mb-0">Informasi Akun
                                </h5>
                                <button class="btn btn-light border btn-sm">
                                    <i class="bi bi-pencil-square me-1"></i> Edit Profil
                                </button>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <p class="mb-1  small">Nama Lengkap</p>
                                    <p class="fw-semibold">Rizky Saputra</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="mb-1  small">Email</p>
                                    <p class="fw-semibold">rizky@email.com</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="mb-1  small">Nomor Telepon</p>
                                    <p class="fw-semibold">+62 812 3456 7890</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="mb-1  small">Status Paket</p>
                                    <p class="fw-semibold">
                                        <span class="badge">Diamond</span> - Aktif hingga 10 Des 2025
                                    </p>
                                </div>
                            </div>

                            <hr>

                            <div class="d-flex flex-wrap gap-2">
                                <button class="btn btn-secondary btn-sm">
                                    <i class="bi bi-key me-1"></i> Ubah Password
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>
@endsection
