@extends('layouts.app')

@section('title', 'Info Akun')
@section('content')
    <main class="dashboard-customer d-md-flex min-vh-100 flex-no-wrap">
        @include('layouts.partials.sidebar')
        <div class="main-div rounded-md-start-4 flex-grow-1 p-5 mb-5">
            <h3 class="fw-bold dashboard-title">Order</h3>
            <section class="orders-section">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table " >
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Paket</th>
                                        <th>Tanggal Order</th>
                                        <th>Status</th>
                                        <th>Harga</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><span class="badge diamond">Diamond</span></td>
                                        <td>10 Nov 2025</td>
                                        <td><span class="badge bg-success">Succes</span></td>
                                        <td>Rp 249.000</td>
                                        <td class="text-end">
                                            <div class="dropdown">
                                                <button class="btn btn-light border-0" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu shadow border-0">
                                                    <li><a class="dropdown-item" href="#" onclick="showDetailData(this)">
                                                            <i class="bi bi-eye me-2"></i>Lihat</a></li>
                                                    <li><a class="dropdown-item" href="#">
                                                            <i class="bi bi-pencil me-2"></i>Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">
                                                            <i class="bi bi-credit-card me-2"></i>Bayar</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item text-danger" href="#">
                                                            <i class="bi bi-x-circle me-2"></i>Batalkan</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </section>


        </div>
    </main>
@endsection

@section('modal')
    @include('pages.order.modal')
@endsection

@section('js')
    <script>
        function showDetailData(e) {
            let modalSelector = "#modalDetailData";
            let formSelector = "#formDetailData";

            // showLoading(modalSelector);

            // clearValidationForm(`${form}`);

            $(`${modalSelector}`).modal('show');
            $(`${modalSelector} .modal-title`).text('Detail Order')

            // let uuid = e.getAttribute('data-id');

            // $.ajax({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     },
            //     type: "GET",
            //     url: `{{ url('admin/katalog/detail') }}/${uuid}`,
            //     success: function(response) {

            //         hideLoading();

            //         const data = response.data;

            //         setFormValue(formSelector, data);
            //         initializeFormForEdit(formSelector, data);
            //     },
            //     error: function(xhr, status, error) {
            //         Swal.fire({
            //             icon: "error",
            //             title: "Oops...",
            //             text: `Error displaying data`,
            //         });
            //     }
            // });
        }
    </script>
@endsection
