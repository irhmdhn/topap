<x-admin-layout title="Produk {{ $product->prd_name }}">

    <div class="row mb-5">

        <div class="col">
            @if (Session::has('success'))
                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                    <strong>{!! Session::get('success') !!}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
            <div class="table-data card p-4">         
                <table class="table border-dark">
                    <tbody>
                        <tr>
                            <th>Foto produk</th>
                            <td><img src="{{asset('storage/'.$product->prd_img)}}" width="80" alt="{{ $product->prd_name }}"></td>
                        </tr>
                        <tr>
                            <th>Nama produk</th>
                            <td>{{ $product->prd_name }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td class="{{{ $product->prd_status=='Active' ? 'text-success':'text-danger' }}}">{{ $product->prd_status }}</td>
                        </tr>
                        <tr>
                            <th>Nama developer</th>
                            <td>{{ $product->prd_dev }}</td>
                        </tr>
                        <tr>
                            <th>Deskripsi</th>
                            <td>{{ $product->prd_desc }}</td>
                        </tr>
                        <tr>
                            <th>Kategori</th>
                            <td>{{ $product->prd_category }}</td>
                        </tr>

                        <tr>
                            <th>Nama item</th>
                            <td>{{ $product->prd_item_name }}</td>
                        </tr>
                        <tr>
                            <th>Foto item</th>
                            <td><img src="{{asset('storage/'.$product->prd_item_img)}}" width="50" alt="{{ $product->prd_item_name }}"></td>
                        </tr>
                        <tr>
                            <th>
                                Nominal
                            </th>
                            <td>
                                <table>
                                    @foreach ($product_items as $loop => $item)
                                    <tr>
                                        <td>{{ $loop->iteration }} </td>
                                        <td>. {{ $item->prd_prc_vol.' '. $product->prd_item_name }}</td>
                                        <td class="px-2">:</td>
                                        <td>Rp{{ $item->prd_prc }}</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <form id="deleteData" class="float-end my-3" action="{{ route('product.destroy', $product->prd_slug) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus data?')">
                @csrf
                @method('DELETE')
                <a href="{{ route('product.edit', $product->prd_slug) }}" class="btn btn-success mx-3" ><i class="fa-solid fa-pen-to-square me-2"></i>Ubah</a>
                <button class="btn btn-danger" title="Hapus data"><i class="fa-solid fa-trash-can me-2"></i>Hapus</button>
            </form> 

                            
        </div> 

        {{-- <div class="col col-12 col-md-8 mb-3 ">
            <div class="card">
                <div class="p-4">
                    <div class="col float-start p-0 me-3">
                        <img src="{{asset('storage/'.$product->prd_img)}}" loading="lazy" alt="{{ $product->prd_name }}">
                    </div>
                    <div class="card-body p-0 pe-lg-4 mb-2">
                        <div class="title mb-3">
                            <span class="fs-2 card-title m-0">{{ $product->prd_name }}</span> <br>
                            <span class="fs-6 card-subtitle text-purple">{{ $product->prd_dev }}</span>
                        </div>             
                        <small class="card-text mt-3">{{ $product->prd_desc }}</small>
                    </div>
                </div> 
            </div>
        </div>

        <div class="col col-12 col-md-4 mb-3">
            <div class="table-data card p-4"> 
                <h4>Item Produk</h4>        
                <img src="{{asset('storage/'.$product->prd_item_img)}}" loading="lazy" width="80" alt="{{ $product->prd_item_name }}">
                <h5>{{ $product->prd_item_name }}</h5>        

                <table class="table table-sm border-dark">
        
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Volume</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product_items as $no => $item)
                        <tr>
                            <td>{{ $no+1 }}</td>
                            <td>{{ $item->prd_prc_vol.' '. $product->prd_item_name }}</td>
                            <td>{{ $item->prd_prc }}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div> --}}

        
        
        
    </div>

</x-admin-layout>