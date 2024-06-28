@extends('main-admin')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Setelan Gopay</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">admin/settings/gopay</li>
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
<div class="card">
    <div class="card-body">
        <h4 class="mb-3 header-title mt-0">Gopay Settings</h4>

        <form action="{{ route('gopay.post') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="row">
                    <label for="exampleInputEmail1">Nomor Gojek</label>
                    <div class="col-8">
                        <input type="number" name="nomor" class="form-control" id="nomor" aria-describedby="emailHelp" placeholder="08xx">
                        <small id="result_getotp" class="form-text text-muted"></small>
                    </div>
                    <div class="col-4">
                        <p class="btn btn-info" onclick="getOTP()" id="get_otp">Dapatkan OTP</p>
                    </div>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="exampleInputPassword1">OTP Token</label>
                <input type="text" name="otp_token" class="form-control" id="otp_token" placeholder="Ref ID" readonly>
            </div>
            <div class="form-group mb-2">
                <div class="row">
                    <label for="exampleInputPassword1">OTP</label>
                    <div class="col-8">
                        <input type="text" name="otp" class="form-control" id="otp" placeholder="Masukkan OTP">
                        <small id="result_validOTP" class="form-text text-muted"></small>
                    </div>
                    <div class="col-4">
                        <p class="btn btn-info" onclick="validasiOTP()" id="validasi_otp">Validasi OTP</p>
                    </div>
                </div>
            </div>
            <div class="form-group mb-2">
                <label for="exampleInputPassword1">Auth Token</label>
                <input type="text" name="auth_token" class="form-control" id="auth_token" placeholder="Auth Token" readonly>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div> <!-- end card-body-->
</div> <!-- end card-->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Riwayat Saldo</h4>
                <div class="row">
                    <div class="col-9">
                        <p class="sub-header">
                            Riwayat saldo gopay masuk.
                        </p>
                    </div>
                    <div class="col-3">
                        <a class="btn btn-success mb-2" href="{{ route('gopay.transaction') }}">Ambil Data Baru!</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tanggal</th>
                                <th>Jumlah Transaksi</th>
                                <th>Tipe Transaksi</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach( $transaksi as $wallet)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $wallet->tanggal }}</td>
                                <td>{{ $wallet->amount }}</td>
                                <td>{{ $wallet->type }}</td>
                                <td>{{ $wallet->keterangan }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
<script>
    $(document).ready(function(){
        $('.table').DataTable({
            "paging":   false,
            "info":     false
        });
    });
    function getOTP() {
        var nomor = document.getElementById("nomor").value;

        $.getJSON("/gopay/Gojek-OTP/" + nomor, function(result) {
            if (result['status'] === "True") {
                $("#result_getotp").append("<span class='text-success'>Mengirim OTP Sukses</span>");
                $("#otp_token").val(result['otp_token']);
            } else {
                $("#result_getotp").append("<span class='text-danger'>Gagal Mengirim OTP</span>");
            }
        });

    };

    function validasiOTP() {
        var refID = document.getElementById("otp_token").value;
        var otp = document.getElementById("otp").value;
        var formData = $("form").serialize();

        $.ajax({
            method: "POST",
            url: "/gopay/Gojek-validasi",
            data: formData,
            success: function(res) {
                if (res['status'] === "True") {
                    $("#auth_token").val(res['auth_token']);
                    $("#result_validOTP").append("<span class='text-succes'>Berhasil Validasi OTP</span>");
                } else {
                    $("#result_validOTP").append("<span class='text-success'>Gagal Vaidasi OTP</span>");
                }
            }
        });
    };
</script>
@endsection