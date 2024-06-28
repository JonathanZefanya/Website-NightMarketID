@extends('main-admin')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Pesanan Manual</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">/Pesanan Manual</li>
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
@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card">
    <div class="card-body">
        <h4 class="mb-3 header-title mt-0">Buat Pesanan Manual</h4>
        <form action="{{ url('/pesanan/manual') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row">
                <label class="col-lg-2 col-form-label" for="example-fileinput">User ID</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" name="uid">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-lg-2 col-form-label" for="example-fileinput">Server ID</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" name="zone">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-lg-2 col-form-label" for="example-fileinput">Kategori</label>
                <div class="col-lg-10">
                    <select class="form-control kategori" name="kategori">
                    <option value="">--PILIH KATEGORI--</option>
                    @foreach($kategori as $ktg)
                    <option value="{{$ktg->id}}">{{$ktg->nama}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-lg-2 col-form-label" for="example-fileinput">Layanan</label>
                <div class="col-lg-10">
                    <select class="form-control layanan" name="layanan">

                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Riwayat Pesanan Manual</h4>
                <div class="table-responsive">
                    <table class="table m-0">
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
                            }else if($data_pesanan->status == "Pending" || $data_pesanan->status == "Menunggu"){
                            $label_pesanan = 'info';
                            }else if($data_pesanan->status == "Success" || $data_pesanan->status == "Sukses"){
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
                                    {{ $data_pesanan->status }}
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
<script type="text/javascript">
    $(document).ready(function(){
        $('.table').DataTable({
        });
    });
    
    
    $('.kategori').change(function(){
         const data = $(this).val();
         $.ajax({
            url: "{{url('/pesanan/manual/ajax/layanan')}}",
            method: "POST",
            data: {data:data,_token:"{{csrf_token()}}"},
            success:function(res){
              $('.layanan').empty();
              $('.layanan').append(res);
            }
         });
    });
    
</script>



@endsection