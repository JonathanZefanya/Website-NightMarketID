@extends('main-admin')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Riwayat Pesanan</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Admin/order</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Semua Pesanan</h4>
                <div class="table-responsive">
                    <table class="table m-o">
                        <thead>
                            <tr>
                                <th>OID</th>
                                <th>UID</th>
                                <th>Nickname</th>
                                <th>Layanan</th>
                                <th>Harga</th>
                                <th>PID</th>
                                <th>Status</th>
                                <th>Log</th>
                                <th>Pembayaran</th>
                                <th>Metode</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data_pesanan)
                            @php
                            $label_pesanan = '';
                            if($data_pesanan->status == "Batal"){
                            $label_pesanan = 'warning';
                            }else if($data_pesanan->status == "Pending"){
                            $label_pesanan = 'info';
                            }else if($data_pesanan->status == "Success"){
                            $label_pesanan = 'success';
                            }else{
                            $label_pesanan = 'danger';
                            }
                            @endphp
                            <tr class="table-{{ $label_pesanan }}">
                                <th scope="row">#{{ $data_pesanan->order_id }}</th>
                                <td>{{ $data_pesanan->user_id }} {{ $data_pesanan->zone != null ? "(".$data_pesanan->zone.")" : '' }}</td>
                                <td>{{ $data_pesanan->nickname == null ? '-' : $data_pesanan->nickname }}</td>
                                <td>{{ $data_pesanan->layanan }}</td>
                                <td>Rp. {{ number_format($data_pesanan->harga, 0, '.', ',') }}</td>
                                <td>{{ $data_pesanan->provider_order_id == null ? '-' : $data_pesanan->provider_order_id }}</td>
                                <td>
                                    <div class="btn-group-vertical">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-{{$label_pesanan}} dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> {{ $data_pesanan->status }} <i class="mdi mdi-chevron-down"></i> </button>
                                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <li><a class="dropdown-item" href="/order-status/{{ $data_pesanan->order_id }}/Success">Success</a></li>
                                            <li><a class="dropdown-item" href="/order-status/{{ $data_pesanan->order_id }}/Batal">Batal</a></li>
                                            <li><a class="dropdown-item" href="/order-status/{{ $data_pesanan->order_id }}/Pending">Pending</a></li>
                                    </div>
                                </td>
                                <td>{{ $data_pesanan->log }}</td>
                                <td>{{ $data_pesanan->status_pembayaran }}</td>
                                <td>{{ $data_pesanan->metode }}</td>
                                <td>{{ $data_pesanan->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('.table').DataTable({
        });
    });
</script>
@endsection