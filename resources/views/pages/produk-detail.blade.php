<x-app-layout title="{{ $product->prd_name }}">

    <div class="row card p-4 my-3">
        <div class="p-0">
            <div class="col float-start p-0 me-3">
                <img src="{{asset('storage/'.$product->prd_img)}}" loading="lazy" alt="{{ $product->prd_name }}">
            </div>
            <div class="card-body p-0 pe-lg-4">
                <div class="title mb-3">
                    <span class="fs-2 card-title m-0">{{ $product->prd_name }}</span> <br>
                    <span class="fs-6 card-subtitle text-purple">{{ $product->prd_dev }}</span>
                </div>            
                <small class="card-text mt-3">{{ $product->prd_desc }}</small>
            </div>
        </div>   
    </div>

    <form action="{{ $product->prd_slug }}/store" method="POST">
    @csrf
    <div class="row card p-4 mb-3">
        <div class="col p-0">
            <div class="d-flex mb-3">
                <div class="rounded-4 bg-primary fs-3 px-3 me-3">1</div>
                <h3 class="my-auto">Masukan Data</h3>
            </div>
            <input id="cust_gameid" class="form-control @error('cust_gameid') is-invalid @enderror" type="text" name="cust_gameid" placeholder="Masukan id game" value="{{ old('cust_gameid') }}">
            @error('cust_gameid')
                <span class="text-danger">{{ $message }}</span><br>
            @enderror
            <small class="mt-2">Untuk menemukan ID Karakter Anda, masuk ke akun Anda di aplikasi. Klik avatar yang terletak di pojok kiri atas layar utama. Anda dapat menemukan ID Karakter Anda tepat di bawah profil Anda</small>
        </div>
    </div>

    <div class="row">
        <div class="col col-12 col-lg-6 mb-3 ">
            <div class="card h-100 p-4">
                <div class="d-flex mb-3">
                    <div class="rounded-4 bg-primary fs-3 px-3 me-3">2</div>
                    <h3 class="my-auto">Pilih item</h3>
                </div>
                <div class="items-choice">

                    <ul class="row list-unstyled">
                        <input id="cust_itemid" type="hidden" hidden name="cust_itemid">
                        @foreach ($items as $item)
                        <li class="flex-fill col col-12 col-sm-6 col-md-3 col-lg-6 p-1">
                            <div class="card h-100">
                                <input id="item_id" type="number" hidden name="item_id" value="{{ $item->prd_prc_id }}">
                                <div class="d-flex rounded-3 align-items-center p-2 my-auto">
                                    <div class="icon-item me-3">
                                        <img src="{{asset('storage/'.$product->prd_item_img)}}" width="36" alt="">
                                    </div>
                                    <div class="price">
                                        <h5 class="item_name">{{ $item->prd_prc_vol }} UC</h5>
                                        <h6 class="item_price">Rp {{ number_format($item->prd_prc) }}</h6>
                                    </div>
                                </div>
                                <i class="fa-solid fa-circle-check text-primary fs-5 position-absolute invisible"></i>
                            </div>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>

        <div class="col col-12 col-lg-6 mb-3 ">
            <div class="card h-100 p-4">
                <div class="d-flex mb-3">
                    <div class="rounded-4 bg-primary fs-3 px-3 me-3">3</div>
                    <h3 class="my-auto">Metode Pembayaran</h3>
                    <input type="hidden" name="cust_method">
                </div>
                <div class="items-choice">
                    <ul class="row list-unstyled">

                        <li class="flex-fill col col-12 col-sm-6 col-md-6 col-lg-12 p-1">
                            <div class="card">
                                <div class="d-flex rounded-3 align-items-center p-2">
                                    <div class="icon-item m-3">
                                        <i class="fa-solid fa-qrcode"></i>
                                    </div>
                                    <div class="method">
                                        <input type="hidden" hidden disabled value="QR Code">
                                        <h5 class="m-0">QR Code</h5>
                                    </div>
                                </div>
                                <i class="fa-solid fa-circle-check text-primary fs-5 position-absolute invisible"></i>
                            </div>
                        </li>
                        <li class="flex-fill col col-12 col-sm-6 col-md-6 col-lg-12 p-1">
                            <div class="card">
                                <div class="d-flex rounded-3 align-items-center p-2">
                                    <div class="icon-item m-3">
                                        <i class="fa-solid fa-money-check-dollar"></i>
                                    </div>
                                    <div class="method">
                                        <input type="hidden" hidden disabled value="Virtual Bank">
                                        <h5 class="m-0">Virtual Bank</h5>
                                    </div>
                                </div>
                                <i class="fa-solid fa-circle-check text-primary fs-5 position-absolute invisible"></i>
                            </div>
                        </li>
                    
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <div class="row card p-4">
        <div class="col p-0">
            <div class="d-flex mb-3">
                <div class="rounded-4 bg-primary fs-3 px-3 me-3">4</div>
                <h3 class="my-auto">Bukti Transaksi</h3>
            </div>
            <div class="d-md-flex">
                <div class="cust-email-input d-flex align-items-center w-100 my-2">
                    <i class="fa-solid fa-envelope mx-2"></i>
                    <input id="cust_email" class="form-control" name="cust_email" type="email" placeholder="Masukan alamat email" value="{{ old('cust_email') }}">
                </div>
                <div class="cust-phone-input d-flex align-items-center w-100 my-2">
                    <i class="fa-brands fa-whatsapp mx-2"></i>
                    <input id="cust_notelp" class="form-control" name="cust_notelp" maxlength="14" minlength="8" type="number" placeholder="Masukan no. WhatsApp" value="{{ old('cust_notelp') }}">
                </div>
            </div>
            @error('cust_notelp')
                <span class="text-danger">{{ 'Masukkan minimal 1 form untuk melanjutkan transaksi' }}</span><br>
            @enderror
            <small class="mt-2"><b>*Harus memasukkan minimal 1 kontak untuk mendapat bukti transaksi</b></small>
        </div>
    </div>

    <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content bg-secondary-subtle">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Pembelian</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <div class="table-data card p-4">         
                <table class="table border-dark">
                    <tbody>
                        <tr>
                            <th>ID Game</th>
                            <td id="custId"></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td id="custEmail"></td>
                        </tr>
                        <tr>
                            <th>No. Telp</th>
                            <td id="custTelp"></td>
                        </tr>
                        <tr>
                            <th>Metode</th>
                            <td id="custMetode"></td>
                        </tr>
                        <tr>
                            <th>Item</th>
                            <td id="custItem"></td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td class="text-success fw-bold" id="custHarga"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-warning" data-bs-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>

  
    
</form>

    
</x-app-layout>
<div class="confirm sticky-bottom w-100">
    <div class="d-flex justify-content-between align-items-center p-2 px-4 py-md-3">
        <h5>Harga: <span class="text-success"></span></h5>
        <button id="confirmationButton" type="button" class="btn btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Next</button>
    </div>
</div>