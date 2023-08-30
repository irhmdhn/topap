<x-admin-layout title="{{ $title }}">
<div class="row mb-3">
    <div class="col-6 col-md-3 mb-3">
        <div class="card h-100 bg-primary bg-opacity-10 border-primary">
            <div class="row">
                <div class="col">
                    <h4>Total</h4>
                    <h5 class="text-primary">Rp{{ number_format($transactions->sum('prd_prc'))}}</h5>
                </div>
                <div class="col col-auto d-flex align-items-center">
                    <h2>{{$transactions->count()}}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3 mb-3">
        <div class="card h-100 bg-success bg-opacity-10 border-success">
            <div class="row">
                <div class="col">
                    <h4>Success</h4>
                    <h5 class="text-success">Rp{{ number_format($tsCount->tsCountStatus('Success')->sum('prd_prc'))}}</h5>
                </div>
                <div class="col col-auto d-flex align-items-center">
                    <h2>{{$tsCount->tsCountStatus('Success')->count()}}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3 mb-3">
        <div class="card h-100 bg-secondary bg-opacity-10 border-secondary">
            <div class="row">
                <div class="col">
                    <h4>Process</h4>
                    <h5 class="text-secondary">Rp{{ number_format($tsCount->tsCountStatus('Process')->sum('prd_prc'))}}</h5>
                </div>
                <div class="col col-auto d-flex align-items-center">
                    <h2>{{$tsCount->tsCountStatus('Process')->count()}}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3 mb-3">
        <div class="card h-100 bg-danger bg-opacity-10 border-danger">
            <div class="row">
                <div class="col">
                    <h4>Failed</h4>
                    <h5 class="text-danger">Rp{{ number_format($tsCount->tsCountStatus('Failed')->sum('prd_prc'))}}</h5>
                </div>
                <div class="col col-auto d-flex align-items-center">
                    <h2>{{$tsCount->tsCountStatus('Failed')->count()}}</h2>
                </div>
            </div>
        </div>
    </div>
    
    
</div>
    <div class="table-data card table-responsive">        
        <table class="table table-sm border-dark table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Id Game</th>
                    <th>Game</th>
                    <th>Method</th>
                    <th>Status</th>
                    <th>Waktu</th>
                    <th>Menu</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $no => $transaction)
                 @php($status = $transaction->ts_status)
                <tr>
                    <td><small>{{ $no + 1 }}</small></td>
                    <td><small>{{ $transaction->ts_code }}</small></td>
                    <td><small>{{ $transaction->cust_gameid }}</small></td>
                    <td><small>{{ $transaction->prd_name }}</small></td>
                    <td><small>{{ $transaction->ts_method }}</small></td>
                    <td><small>
                        <div class="btn btn-sm btn-{{{ ($status == 'Process') ? 'secondary' : (($status == 'Success') ? 'success' : 'danger') }}}" title="{{$transaction->prd_status}}"><i class="fa-solid fa-{{{ ($status == 'Process') ? 'spinner' : (($status == 'Success') ? 'check' : 'xmark') }}}"></i></div>
                    </small></td>
                    <td><small>{{ $transaction->created_at }}</small></td>
                    <td class="align-self-center">
                        <div class="btn-menu my-auto">
                            <a href="" class="btn btn-sm btn-primary mb-1" title="Detail"><i class="fa-solid fa-angles-right"></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        </div>
</x-admin-layout>