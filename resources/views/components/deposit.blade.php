@extends("main")

@section("content")
<div class="wrapper pt-4">
    <div class="container mb-5">
        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @elseif(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <div class="alert alert-primary">
            <marquee style="color:#4C4993 !important;" class="fw-bold">
                <i class="fas fa-angle-double-right"></i> Deposit bertanda manual konfirmasi ke WhatsApp Admin setelah melakukan transfer <a href="{{ ENV('APP_WA') }}?text=%20Hallo%20{{ ENV('APP_NAME') }}" target="_blank"><b>WHATSAPP ADMIN</b> (KLIK)</a>
            </marquee>
        </div>
        <div class="row mt-1">
            <div class="col-sm-12 col-12">
                <div class="card bg-dark shadow-lg text-white miliyan-rounded-sedang">
                    <div class="card-header bg-dark bg-gradient">
                        <h4 class="page-title text-white">Deposit</h4>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal mt-1" action="{{ route('deposit.post') }}" method="POST">
                            @csrf
                        
                                <div class="mb-2 row">
                                    <label class="col-lg-2 col-form-label text-white" for="simpleinput">Metode :</label>
                                    <div class="col-lg-10">
                                        <select class="form-control" name="metode">
                                            <option value="BCA">BCA(MANUAL)</option>
                                            <option value="OVO">OVO(MANUAL)</option>
                                            <option value="GOPAY">GOPAY(MANUAL)</option>
                                            <option value="DANA">DANA(MANUAL)</option>
                                            <option value="SHOPEPAY">SHOPEPAY(MANUAL)</option>
                                            <option value="BRI">BRI(MANUAL)</option>
                                        </select>
                                        @error('metode')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label text-white" for="simpleinput">Jumlah :</label>
                                    <div class="col-lg-10">
                                        <input type="number" class="form-control text-dark @error('jumlah') is-invalid @enderror" placeholder="Masukan Nominal Deposit" value="{{ old('jumlah') }}" name="jumlah" value="">
                                        @error('jumlah')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-2">
                <div class="card bg-dark shadow-lg mt-1 text-white miliyan-rounded-sedang">
                    <div class="card-header bg-gradient">
                        <h4 class="page-title text-white">Riwayat deposit</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table m-o text-white">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Jumlah</th>
                                        <th>Metode</th>
                                        <th>No Pembayaran</th>
                                        <th>Status</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                        		@forelse($data as $pesanan)
                                @php
                                    $zone = $pesanan->zone != null ? "-".$pesanan->zone : "";
                                    $label_pesanan = '';
                                    
                                    if($pesanan->status == "Pending" || $pesanan->status == "Batal"){
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
                        			<td>{{ $pesanan->id }}</td>
                        			<td>Rp {{ number_format($pesanan->jumlah,0,',','.'); }}</td>
                        			<td>{{ $pesanan->metode }}</td>
                        			<td>{{ $pesanan->no_pembayaran }}</td>
                        			<td><span class="badge bg-{{ $label_pesanan }}">{{ $pesanan->status }}</span></td>
                        			<td>{{ $pesanan->created_at }}</td>
                        		</tr>
                        		@empty
                        		<tr>
                        			<td align="center" colspan="6">Tidak ada riwayat</td>
                        		</tr>
                        		@endforelse
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
<script type="text/javascript">
    function modal(name, link) {
        var myModal = new bootstrap.Modal($('#modal-detail'))
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
        myModal.show();
    }
</script>

<!-- sample modal content -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="myModalLabel">QRIS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="/qris.jpg" width="70%" class="mx-auto d-flex justify-content-center">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection			