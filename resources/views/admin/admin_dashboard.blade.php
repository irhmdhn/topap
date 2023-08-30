<x-admin-layout title="{{ $title }}">

<div class="wrapper mb-5">
<div class="row mb-5">
    <div class="col">
        <div class="card border-primary shadow">
            <div class="row">
                <div class="col order-1">
                    <h4>Transaksi</h4>
                    <h5 class="text-primary">Rp{{ number_format($tsCount->tsCountStatus('Success')->sum('prd_prc'))}}</h5>
                </div>
                <div class="col col-auto order-0 order-md-2">
                    <i class="fa-solid fa-right-left text-primary-emphasis fs-3"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card border-success shadow">
            <div class="row">
                <div class="col order-1">
                    <h4>Customer</h4>
                    <h5 class="text-success">{{ $cust->count() }}</h5>
                </div>
                <div class="col col-auto order-0 order-md-2">
                    <i class="fa-solid fa-users text-success-emphasis fs-3"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card border-warning shadow">
            <div class="row">
                <div class="col order-1">
                    <h4>Produk</h4>
                    <h5 class="text-warning">{{ $produk->count() }}</h5>
                </div>
                <div class="col col-auto order-0 order-md-2">
                    <i class="fa-solid fa-box-open text-warning-emphasis fs-3"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card border-info shadow">
            <div class="row">
                <div class="col order-1">
                    <h4>Item</h4>
                    <h5 class="text-info">{{ $item->count() }}</h5>
                </div>
                <div class="col col-auto order-0 order-md-2">
                    <i class="fa-solid fa-barcode text-info-emphasis fs-3"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col col-md-7">
        <h4 class="mb-4">Data produk</h4>
        <div class="card">
            <div class="table-responsive">
            
            <table class="table border-secondary">
                <tr>
                <th>No</th>
                <th>Icon</th>
                <th>Nama</th>
                <th>Developer</th>
            </tr>
            @foreach ($produk->skip(0)->take(5) as $no => $p)
            <tr>
                <td>{{ $no+1 }}</td>
                <td>
                    <img src="{{ asset('storage/'.$p->prd_img) }}" width="50" alt="{{ $p->prd_name }}">
                </td>
                <td>{{$p->prd_name}}</td>
                <td>{{ $p->prd_dev}}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="4"><a class="nav-link text-center" href="{{ route('product.index') }}">Show All</a></td>
            </tr>
        </table>
    </div>
    </div>
    </div>
    <div class="col col-md-5">
        <h4 class="mb-4">Data transaksi</h4>
        <div class="card">
            <div class="table-responsive">
            <table class="table border-secondary">
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Waktu</th>
                <th>Status</th>
            </tr>
            @foreach ($transaction->skip(0)->take(10) as $no => $ts)
            <tr>
                <td>{{ $no+1 }}</td>
                <td>{{ $ts->ts_code }}</th>
                <td>{{ $ts->updated_at }}</td>

                <td><div class="btn btn-sm btn-{{{ ($ts->ts_status == 'Process') ? 'secondary' : (($ts->ts_status == 'Success') ? 'success' : 'danger') }}}" title="{{$ts->ts_status}}"><i class="fa-solid fa-{{{ ($ts->ts_status == 'Process') ? 'spinner' : (($ts->ts_status == 'Success') ? 'check' : 'xmark') }}}"></i></div></td>
            </tr>
            @endforeach
            <tr>
                <td colspan="4"><a class="nav-link text-center" href="{{ route('transaction') }}">Show All</a></td>
            </tr>
        </table>
    </div>
    </div>
</div>
</div>
</div>
</x-admin-layout>
