@extends("main")

@section("content")
<div class="wrapper pt-5">
    <div class="container mb-5 pt-5">
        <div class="row mt-1">
            <div class="col-md-3 mb-4">
                <div class="card mt-1 bg-miliyan shadow-lg mt-1 text-white miliyan-rounded-sedang">
                    <div class="card-body">
                        <div class="tombol-edit d-flex">
                            <a href="{{url('/user/edit/profile')}}"class="btn btn-primary btn-sm ms-auto"><i class="fas fa-user-edit"></i> Edit Profile</a>
                        </div>
                        <div class="logo-web mt-4 text-center">
                            <img src="/assets/logo/logo-user.png" alt="user-image" class="rounded-circle" width="90">
                        </div>
                        <hr class="mt-4">
                        <div class="info-user" style="font-size: 12.5px">
                            <table>
                                <tr>
                                    <td style="font-weight: bold; ">Nama</td><td>:</td><td>{{Auth()->user()->name}}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; ">Username</td><td>:</td><td>{{Auth()->user()->username}}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; ">Balance</td><td>:</td><td><span class="badge bg-primary">Rp {{ number_format(Auth::user()->balance, 0, ',', '.') }}</span></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; ">Total Order</td><td>:</td><td>
                                        <span class="badge bg-success">{{count($data)}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; ">Account Type</td><td>:</td><td>
                                        <span class="badge bg-primary">{{Str::upper(Auth()->user()->role)}}</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 ">
                <div class="card mt-1 bg-miliyan shadow-lg mt-1 text-white miliyan-rounded-sedang">
                    <div class="card-body">
                        <h4 class="mb-4">History</h4>
                        <div class="table-responsive">
                             <table class="table m-o table-bordered text-white">
                                <thead>
                                    <tr>
                                        <th>Invoice</th>
                                        <th>Layanan</th>
                                        <th>Target</th>
                                        <th>Harga</th>
                                        <th>Status</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($data as $pesanan)
                                    @php
                                    $zone = $pesanan->zone != null ? "-".$pesanan->zone : "";
                                    $label_pesanan = '';
                                    if($pesanan->status == "Pending" || $pesanan->status == "Menunggu Pembayaran" || $pesanan->status == "Waiting"){
                                    $label_pesanan = 'warning';
                                    }else if($pesanan->status == "Processing"){
                                    $label_pesanan = 'info';
                                    }else if($pesanan->status == "Success"){
                                    $label_pesanan = 'success';
                                    }else{
                                    $label_pesanan = 'danger';
                                    }
                                    @endphp
                                    <tr>
                                        <th scope="row">{{ $pesanan->order_id }}</th>
                                        <td>
                                            {{ $pesanan->layanan }}<br>
                                        </td>
                                        <td>{{ $pesanan->user_id.$zone }}</td>
                                        <td>Rp. {{ number_format($pesanan->harga, 0, ',', '.') }}</td>
                                        <td><span class="badge bg-{{ $label_pesanan }}">{{ $pesanan->status }}</span></td>
                                        <td><a href="javascript:;" onclick="modal('Order Details', '{{ route('riwayat.detail', [$pesanan->order_id]) }}')" class="btn btn-info"><i class="fa fa-qrcode"></i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
     $(document).ready(function(){
        $('.table').DataTable();
    });
    function modal(name, link) {
        // var myModal = new bootstrap.Modal($('#modal-detail'))
        $.ajax({
            type: "GET",
            url: link,
            beforeSend: function() {
                $('#modal-detail-title').html(name);
                $('#modal-detail-body').html('Loading...');
            },
            success: function(result) {
                $('#modal-detail-title').html(name);
                $('#modal-detail-body').html(result);
            },
            error: function() {
                $('#modal-detail-title').html(name);
                $('#modal-detail-body').html('There is an error...');
            }
        });
        $("#modal-detail").modal("show");
    }
</script>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="modal-detail" style="border-radius:7%">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-detail-title"></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modal-detail-body"></div>
        </div>
    </div>
</div>
@endsection