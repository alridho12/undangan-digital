@extends('layouts.app')

@section('title', 'Undangan Digital')
@section('content')
    <main class="undangan-digital">
        <section class="banner-digital py-5 px-md-0 px-2">
            <div class="mt-5 px-5 py-5 container bg-banner d-flex justify-content-center align-items-center">
                <div class="col-6 d-flex justify-content-center align-items-start flex-column">
                    <h1 class="fw-bold">Undangan Digital</h1>
                    <p class="">Jelajahi undangan digital eksklusif kami</p>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-end">
                    <img src="images/preview1.png" alt="Undangan Digital" class="img-banner-digital img-fluid" />
                </div>
            </div>
        </section>
        <section class="katalog-digital py-5 px-md-0 px-2 container g-4">
            <h2 class="mb-5 text-gold fw-bold">Katalog Undangan</h2>
            <div class="row justify-content-center g-4">
                <p><a href="/home">Home</a><span> > </span><a href="/undangan-digital">Undangan Digital</a></p>
                <div class="col-md-4 col-sm-6">
                    <div class="product-card d-flex flex-column align-items-start">
                        <img src="images/inv1.jpg" alt="Rosewood Bliss">
                        <div class="p-3 w-100">
                            <h5 class="text-dark mb-3">Code : DIGINV001</h5>
                            <div class="d-flex gap-2 w-100">
                                <button class="btn btn-detail flex-fill">Lihat Detail</button>
                                <button class="btn btn-pesan flex-fill">Pesan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-card d-flex flex-column align-items-start">
                        <img src="images/inv2.png" alt="Rosewood Bliss">
                        <div class="p-3 w-100">
                            <h5 class="text-dark mb-3">Code : DIGINV002</h5>
                            <div class="d-flex gap-2 w-100">
                                <button class="btn btn-detail flex-fill">Lihat Detail</button>
                                <button class="btn btn-pesan flex-fill">Pesan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-card d-flex flex-column align-items-start">
                        <img src="images/inv1.jpg" alt="Rosewood Bliss">
                        <div class="p-3 w-100">
                            <h5 class="text-dark mb-3">Code : DIGINV001</h5>
                            <div class="d-flex gap-2 w-100">
                                <button class="btn btn-detail flex-fill">Lihat Detail</button>
                                <button class="btn btn-pesan flex-fill">Pesan</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="product-card d-flex flex-column align-items-start">
                        <img src="images/inv2.png" alt="Rosewood Bliss">
                        <div class="p-3 w-100">
                            <h5 class="text-dark mb-3">Code : DIGINV002</h5>
                            <div class="d-flex gap-2 w-100">
                                <button class="btn btn-detail flex-fill">Lihat Detail</button>
                                <button class="btn btn-pesan flex-fill">Pesan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-card d-flex flex-column align-items-start">
                        <img src="images/inv1.jpg" alt="Rosewood Bliss">
                        <div class="p-3 w-100">
                            <h5 class="text-dark mb-3">Code : DIGINV001</h5>
                            <div class="d-flex gap-2 w-100">
                                <button class="btn btn-detail flex-fill">Lihat Detail</button>
                                <button class="btn btn-pesan flex-fill">Pesan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="product-card d-flex flex-column align-items-start">
                        <img src="images/inv2.png" alt="Rosewood Bliss">
                        <div class="p-3 w-100">
                            <h5 class="text-dark mb-3">Code : DIGINV002</h5>
                            <div class="d-flex gap-2 w-100">
                                <button class="btn btn-detail flex-fill">Lihat Detail</button>
                                <button class="btn btn-pesan flex-fill">Pesan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
