<x-admin-layout title="{{ $title }}">

    <div class="data mb-5">
        <div class="btn-add">
            <a href="{{ route('product.create') }}" class="btn btn-primary mb-3"><i class="fa-solid fa-plus me-2"></i>Tambah produk</a>
        </div>
        @if (Session::has('success'))
            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                <strong>{!! Session::get('success') !!}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="table-produk card table-responsive">        
        <table class="table table-sm border-dark table-hover">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Icon game</th>
                    <th>Nama</th>
                    <th>Developer</th>
                    <th>Nama item</th>
                    <th>Icon item</th>
                    <th>Item tersedia</th>
                    <th>Status</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $no => $product)
                <tr>
                    <td><small>{{ $no+1 }}</small></td>
                    <td><img src="{{ asset('storage/'.$product->prd_img) }}" alt="{{ $product->prd_name }}"></td>
                    {{-- <td><img src="{{ asset('assets/img/'.$product->prd_pict) }}" class="w-75" alt="{{ $product->prd_name }}"></td> --}}
                    <td><small>{{ $product->prd_name }}</small></td>
                    <td><small>{{ $product->prd_dev }}</small></td>
                    <td><small>{{ $product->prd_item_name }}</small></td>
                    <td><img src="{{ asset('storage/'.$product->prd_item_img) }}" alt="{{ $product->prd_item_name }}"></small></td>
                    <td><small>{{ $product->items()->get()->count() }}</small></td>
                    <td>
                        <div class="btn btn-{{{ $product->prd_status=='Active' ? 'success':'danger' }}}" title="{{$product->prd_status}}"></div>
                    </td>
                    <td class="align-self-center">
                        <div class="btn-menu my-auto">
                            <a href="{{ route('product.show', $product->prd_slug) }}" class="btn btn-sm btn-success mb-1" title="Detail"><i class="fa-solid fa-angles-right" class="btn btn-secondary"></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        </div>
    </div>
      
</x-admin-layout>