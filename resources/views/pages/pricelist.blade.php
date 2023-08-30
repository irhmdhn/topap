<x-app-layout title="PRICELIST">
    <h1>DAFTAR HARGA</h1>
    <div class="card p-4">
        <table class="table table-hover align-middle">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Item</th>
                    <th>Harga</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            
                <?php $no = 1 ?>
                @foreach ($products as $loop => $product)
                @foreach ($product->items as $price)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td><img src="{{asset('storage/'.$product->prd_img)}}" width="30" alt=""></td>
                    <td>{{ $product->prd_name }}</td>
                    <td>{{ $price->prd_prc_vol.' '.$product->prd_item_name}} </td>
                    <td>Rp {{ number_format($price->prd_prc) }}.-</td>
                    <td><a class="btn btn-sm btn-success" href="{{ url('/p/'.$product->prd_slug) }}">Beli</a></td>
                </tr>
                @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>