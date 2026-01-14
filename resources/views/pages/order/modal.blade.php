{{-- modal detail data --}}
{{-- <div class="modal fade" id="modalDetailData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDetailDataLabel">Detail Data</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="formDetailData">
                    tambahkan input disini
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label fw-semibold text-muted">ID Pesanan</label>
                            <input type="text" class="form-control" id="detail_order_id" value="INV-2025-0012"
                                readonly>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold text-muted">Paket</label>
                            <input type="text" class="form-control" id="detail_paket"
                                value="Website Undangan Pernikahan - Paket Diamond" readonly>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-muted">Harga</label>
                            <input type="text" class="form-control" id="detail_harga" value="Rp 249.000" readonly>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-muted">Tanggal Pemesanan</label>
                            <input type="text" class="form-control" id="detail_tanggal_order"
                                value="10 November 2025" readonly>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-muted">Status</label>
                            <input type="text" class="form-control" id="detail_status" value="Success" readonly>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-muted">Masa Aktif</label>
                            <input type="text" class="form-control" value="1 Tahun" readonly>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label fw-semibold text-muted">Payment Method</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="payment-method"
                                    value="Transfer Bank - BCA" readonly>
                            </div>
                        </div>
                    </div>


                    <div class="d-flex justify-content-end mt-3 -ml-px">
                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}

<div class="modal fade" id="modalDetailData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDetailDataLabel">Detail Data</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="formDetailData">
                    {{-- tambahkan input disini --}}
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label fw-semibold text-muted">ID Pesanan</label>
                            <input type="text" class="form-control" id="detail_order_id" value="INV-2025-0012"
                                readonly>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold text-muted">Paket</label>
                            <input type="text" class="form-control" id="detail_paket"
                                value="Website Undangan Pernikahan - Paket Diamond" readonly>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold text-muted">Undangan</label>
                            <input type="text" class="form-control" id="detail_undangan"
                                value="Red Asian" readonly>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-muted">Harga</label>
                            <input type="text" class="form-control" id="detail_harga" value="Rp 249.000" readonly>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-muted">Tanggal Pemesanan</label>
                            <input type="text" class="form-control" id="detail_tanggal_order"
                                value="10 November 2025" readonly>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-muted">Status</label>
                            <input type="text" class="form-control" id="detail_status" value="Success" readonly>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-muted">Masa Aktif</label>
                            <input type="text" class="form-control" value="1 Tahun" readonly>
                        </div>

                        {{-- <div class="col-md-12">
                            <label class="form-label fw-semibold text-muted">Catatan / Keterangan</label>
                            <textarea class="form-control" id="detail_catatan" rows="3" readonly>Proses penyesuaian desain undangan digital.</textarea>
                        </div> --}}

                        <div class="col-md-12">
                            <label class="form-label fw-semibold text-muted">Payment Method</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="payment-method"
                                    value="Transfer Bank - BCA" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label fw-semibold text-muted">Bukti Transfer</label>
                            <div class="input-group">
                                <input type="file" class="form-control mb-3" id="bukti-transfer" readonly>
                                <img src="images/bukti-transfer.png" alt="Bukti Transfer" class="img-fluid rounded-3">
                            </div>
                        </div>
                    </div>


                    <div class="d-flex justify-content-end mt-3 -ml-px">
                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
