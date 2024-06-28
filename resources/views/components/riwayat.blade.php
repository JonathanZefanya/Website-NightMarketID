@extends("main")

@section("content")
<div class="wrapper pt-4">
    <div class="container mb-5">
        <div class="row mt-1">
            <div class="col-12">
                <div class="alert alert-primary">
                    <marquee style="color:#4C4993 !important;" class="fw-bold">
                        <i class="fas fa-angle-double-right"></i>
                        Riwayat Transaksi Hanya Tersedia Untuk Pembayaran Saldo
                        <i class="fas fa-angle-double-left"></i>
                        <!--<i class="fas fa-angle-double-right"></i> Deposit via DANA Transfer, Gopay Transfer (1) Sudah limit bulanan. Terimakasih-->
                    </marquee>
                </div>
                <div class="card mt-1 bg-dark shadow-lg mt-1 text-white">
                    <div class="card-body">
                        <h4 class="page-title text-white">Riwayat Pesanan</h4>
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
                                    }else if($pesanan->status == "Sukses"){
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
                        <div class="d-flex justify-content-center">
                            {{ $data->links('vendor.pagination.simple-tailwind') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
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