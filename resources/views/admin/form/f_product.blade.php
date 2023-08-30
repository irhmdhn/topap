<x-admin-layout title="{{ isset($slug) ? 'Edit Produk' : 'Tambah Produk' }}" >

    <div class="detail-product mt-3 mx-auto">
        <form action="{{ isset($slug) ? route('product.update',$product->prd_slug) : route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @isset($slug)
                @method('PUT')
            @endisset
            <div class="row">
                <div class="col col-12 col-lg-6">
                    <h3 class="mb-4 mt-5 mt-lg-0">Data Produk</h3>
                    
                    <div class="mb-3">
                        <label for="prd_name" class="form-label">Nama Produk</label>
                        <input id="prd_name" name="prd_name" class="form-control @error('prd_name') is-invalid @enderror" type="text" value="{{ isset($slug) ? $product->prd_name : old('prd_name') }}">
                        @error('prd_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <div class="col col-auto me-2">
                            <label for="prd_img" class="form-label">Foto Produk
                                <div class="up-img rounded-4 mt-2 p-3 @error('prd_img') is-invalid @enderror">
                                    <img id="prd_preview" src="{{ isset($slug) ? asset('storage/'.$product->prd_img) : asset('assets/img/default/upload_img.png') }}" class="img-fluid rounded-3" width="80px" alt="">
                                </div>
                                <input id="prd_img" name="prd_img" class="form-control d-none" type="file" accept=".jpg, .png, .webp, .jpeg">
                                @error('prd_img')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </label>
                        </div>
                        <div class="col">
                            <div>
                                <label for="prd_dev" class="form-label">Developer Produk</label>
                                <input id="prd_dev" name="prd_dev" class="form-control @error('prd_dev') is-invalid @enderror" type="text" value="{{ isset($slug) ? $product->prd_dev : old('prd_dev') }}">
                            </div>
                            @error('prd_dev')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div>
                                <label for="prd_category" class="form-label mt-2">Kategori Produk</label>
                                <select id="prd_category" name="prd_category" class="form-select @error('prd_category') is-invalid @enderror">
                                    <option class="text-dark">-- Pilih --</option>
                                    @foreach($category as $ctgr)
                                    <option value="{{$ctgr}}" @isset($slug) @if($ctgr == $product->prd_category) selected @endif @endisset class="text-dark">{{ $ctgr }}</option>
                                    @endforeach
                                </select>
                                @error('prd_category')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    @isset($slug)
                    <div class="mb-3">
                        <label for="prd_status" class="form-label mt-2">Status</label>
                        <select id="prd_status" name="prd_status" class="form-select @error('prd_status') is-invalid @enderror">
                            @foreach(config('enums.prd_status') as $status)
                                <option value="{{$status}}" @isset($slug) @if($status == $product->prd_status) selected @endif @endisset class="text-dark">{{ $status }}</option>
                            @endforeach
                        </select>
                        @error('prd_status')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    @endisset
                    
                    <div class="mb-3">
                        <label for="prd_desc" class="form-label">Deskripsi Produk</label>
                        <textarea id="prd_desc" name="prd_desc" class="form-control @error('prd_desc') is-invalid @enderror" rows="5" >{{ isset($slug) ? $product->prd_desc : old('prd_desc') }}</textarea>
                        @error('prd_desc')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="col col-12 col-lg-6">
                    <h3 class="mb-4 mt-5 mt-lg-0">Data Item</h3>

                    <div class="mb-3">
                        <label for="prd_item_name" class="form-label">Nama Item</label>
                        <input id="prd_item_name" name="prd_item_name" class="form-control @error('prd_item_name') is-invalid @enderror" type="text" value="{{ isset($slug) ? $product->prd_item_name : old('prd_item_name') }}">
                        @error('prd_item_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="prd_item_img" class="form-label">Foto Item
                            <div class="up-img rounded-4 mt-2 p-3 @error('prd_item_name') is-invalid @enderror">
                                <img id="item_preview" src="{{ isset($slug) ? asset('storage/'.$product->prd_item_img) : asset('assets/img/default/upload_img.png')}}" class="img-fluid rounded-3" width="80px" alt="">
                            </div>
                            <input id="prd_item_img" name="prd_item_img" class="form-control d-none" type="file"  accept=".jpg, .png, .webp, .jpeg">
                        </label>
                        @error('prd_item_img')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Nominal Item</label>
                        <ol id="item_nominals" class="ps-3">
                            @if(isset($slug))
                            @foreach ($product_items as $item)
                            <li class="mb-2">
                                <div class="d-flex align-items-center">
                                    <input name="prd_prc_id[{{ $loop->index }}]" hidden class="d-none" value ="{{ $item->prd_prc_id }}">
                                    <input name="prd_prc_vol[{{ $loop->index }}]" class="form-control" type="number" placeholder="Volume" value="{{ $item->prd_prc_vol }}">
                                    <span class="ps-3 pe-2"><p class="my-auto">Rp</p></span>
                                    <input name="prd_prc[{{ $loop->index }}]" class="form-control" type="number" placeholder="Harga" value="{{ $item->prd_prc }}">
                                </div>
                            </li>
                            @endforeach
                            @else
                            <li class="mb-2">
                                <div class="d-flex align-items-center">
                                    <input name="prd_prc_vol[0]" class="form-control" type="number" placeholder="Volume">
                                    <span class="ps-3 pe-2"><p class="my-auto">Rp</p></span>
                                    <input name="prd_prc[0]" class="form-control" type="number" placeholder="Harga">
                                </div>
                            </li>
                            @endif
                        </ol>
                        <input id="tot_prc" name="tot_prc" type="number" hidden>
                        <button id="btn_add_row" type="button" class="btn btn-success ms-3"><i class="fa-solid fa-plus me-2"></i>Baris</button>
                        <button id="btn_del_row" type="button" class="btn btn-outline-danger disabled ms-3"><i class="fa-solid fa-minus me-2"></i>Baris</button>
                    
                    </div>

                </div>

                <div class="my-5 d-flex justify-content-center">
                    <button id="submitButton" type="button" class="btn btn-primary mx-auto w-50" data-bs-toggle="modal" data-bs-target="#staticBackdrop">{{ isset($slug) ? 'Ubah' : 'Tambah'}}</button>
                </div>
            </div>
            
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content bg-secondary-subtle">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <div class="table-data card p-4">         
                <table class="table border-dark">
                    <tbody>
                        <tr>
                            <th>Foto produk</th>
                            <td><img id="confImg" src="" width="80"></td>
                        </tr>
                        <tr>
                            <th>Nama produk</th>
                            <td id="confName"></td>
                        </tr>
                        <tr>
                            <th>Nama developer</th>
                            <td id="confDev"></td>
                        </tr>
                        @isset($slug)
                        <tr>
                            <th> Status</th>
                            <td id="confStatus"></td>
                        </tr>
                        @endisset
                        <tr>
                            <th>Deskripsi</th>
                            <td id="confDesc"></td>
                        </tr>
                        <tr>
                            <th>Kategori</th>
                            <td id="confCategory"></td>
                        </tr>
                        
                        <tr>
                            <th>Nama item</th>
                            <td id="confItem"></td>
                        </tr>
                        <tr>
                            <th>Foto item</th>
                            <td><img id="confItemImg" src="" width="80"></td>
                        </tr>
                        <tr>
                            <th>
                                Nominal
                            </th>
                            <td>
                                <table id="confPrdItems">
                                    <tbody>
                                    </tbody>
                                </table>
                            </td>
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
    </div>
</x-admin-layout>