<x-app-layout title="Transaction">
    <div class="title text-center">
        <h1 class="m-0">Proses Transaksi</h1>
        <p class="text-secondary">{{ $transaction->ts_status=='Process'?'Selesaikan pesananmu':'Pesanan berhasil' }}</p>
    </div>
    
    <div class="row mt-4">
        <div class="col-12 col-md-4 mb-3">
            <div class="barcode p-2 text-center">
                <div class="qr">
                    {!!DNS2D::getBarcodeSVG($transaction->ts_code, 'QRCODE',10, 10, '#fff')!!}
                </div>
                <p class="my-3"><strong>Scan QR CODE</strong></p>
            </div>
        </div>
        <div class="col-12 col-md-8">
            <div class="card py-4">
                <div class="row px-3">
                    <div class="col mb-3">
                        <h6>Tanggal pembelian</h6>
                        <small>{{ $transaction->created_at }}</small>
                    </div>
                    <div class="col mb-3">
                        <h6>Kode Transaksi</h6>
                        <small id="tsCode">{{ $transaction->ts_code }}<i id="copy-clipboard" class="fa fa-copy ms-1"></i></small>
                    </div>
                    <div class="col mb-3">
                        <h6>Metode pembayaran</h6>
                        <small>{{ $transaction->ts_method }}</small>
                    </div>
                </div>
                <hr class="my-4 mx-auto">
                <div class="row px-3">
                    <table class="table table-borderless">
                        <tr>
                            <th>Produk</th>
                            <td>{{ $transaction->prd_name }}</td>
                        </tr>
                        <tr>
                            <th>ID Game</th>
                            <td>{{ $transaction->cust_gameid }}</td>
                        </tr>
                        <tr>
                            <th>Item</th>
                            <td>{{ $transaction->prd_prc_vol.' '.$transaction->prd_item_name }}</td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td><h4 class="m-0 text-success">Rp {{ number_format($transaction->prd_prc) }}.-</h4></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td><h4 class="m-0"><i class="fa me-2 fa-{{ $transaction->ts_status=='Process'?'spinner':'check' }}"></i>{{ $transaction->ts_status }} </h4></td>
                        </tr>
                    </table>
                </div>
                @if($transaction->ts_status=='Process')
                <hr class="my-4 mx-auto">
                <div class="row px-3">
                    <form action="{{ url('transaction/'.$transaction->ts_code)}}/confirm" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col mb-3">
                            <label for="ts_confirm">Konfirmasi</label>
                            <div class="d-flex">
                                <input id="ts_confirm" class="form-control @error('ts_confirm') is-invalid @enderror" name="ts_confirm" placeholder="Masukan kode transaksi">
                                <button class="btn btn-primary rounded-pill ms-3"><i class="fa-solid fa-right-long"></i></button>
                            </div>
                            @error('ts_confirm')
                            <span class="text-danger">{{ 'Kode transaksi harus diisi' }}</span><br>
                            @enderror
                        </div>
                    </form>
                </div>
                @endif
            </div>
        </div>
    </div>

</x-app-layout>