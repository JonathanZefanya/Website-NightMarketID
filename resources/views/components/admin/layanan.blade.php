@extends('main-admin')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Setelan Layanan</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">/layanan</li>
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
        <h4 class="mb-3 header-title mt-0">Tambah Layanan</h4>
        <form action="{{ route('layanan.post') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3 row">
                <label class="col-lg-2 col-form-label" for="example-fileinput">Layanan</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" name="nama">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-lg-2 col-form-label">Kategori</label>
                <div class="col-lg-10">
                    <select class="form-select" name="kategori">
                        @foreach($kategoris as $kategori)
                        <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-lg-2 col-form-label">Provider</label>
                <div class="col-lg-10">
                    <select class="form-select" name="provider">
                        <option value="digiflazz">Digiflazz</option>
                        <option value="apigames">API Games</option>
                        <option value="vip">Vip Reseller</option>
                        <option value="smileone">SmileOne</option>
                        <option value="bangjeff">bangjeff</option>
                    </select>
                </div>
            </div>
          <div class="mb-3 row">
                <label for="" class="col-lg-1 col-form-label">Harga</label>
                <div class="col-lg-5">
                    <input type="number" class="form-control @error('harga') is-invalid @enderror" value="{{ old('harga') }}" name="harga">
                    @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <label for="" class="col-lg-1 col-form-label">Profit</label>
                <div class="col-lg-5">
                    <input type="number" class="form-control @error('profit') is-invalid @enderror" value="{{ old('profit') }}" name="profit">
                    @error('profit')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-lg-1 col-form-label">Harga Member</label>
                <div class="col-lg-5">
                    <input type="text" class="form-control @error('harga_reseller') is-invalid @enderror" value="{{ old('harga_reseller') }}" name="harga_reseller">
                    @error('harga_reseller')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <label for="" class="col-lg-1 col-form-label">Harga Platinum</label>
                <div class="col-lg-5">
                    <input type="text" class="form-control @error('harga_platinum') is-invalid @enderror" value="{{ old('harga_platinum') }}" name="harga_platinum">
                    @error('harga_platinum')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <label for="" class="col-lg-1 col-form-label">Harga Gold</label>
                <div class="col-lg-5">
                    <input type="text" class="form-control @error('harga_gold') is-invalid @enderror" value="{{ old('harga_gold') }}" name="harga_gold">
                    @error('harga_gold')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <label for="" class="col-lg-1 col-form-label">Provider ID</label>
                <div class="col-lg-5">
                    <input type="text" class="form-control @error('provider_id') is-invalid @enderror" value="{{ old('provider_id') }}" name="provider_id">
                    @error('provider_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-lg-2 col-form-label" for="example-fileinput">Product Logo</label>
                <div class="col-lg-10">
                    <input type="file" class="form-control" name="product_logo">
                    @error('product_logo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
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
                <h4 class="header-title mt-0 mb-1">Semua Layanan</h4>
                <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Logo</th>
                                <th>Kategori</th>
                                <th>Layanan</th>
                                <th>Provider</th>
                                <th>PID</th>
                                <th>Harga</th>
                                <th>Harga Member</th>
                                <th>Harga Platinum</th>
                                <th>Harga Gold</th>
                                <th>Profit</th>
                                <th>Status</th>
                                <th>Aksi</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $datas as $data )
                            @php
                            $label_pesanan = '';
                            if($data->status == "available"){
                            $label_pesanan = 'info';
                            }else if($data->status == "unavailable"){
                            $label_pesanan = 'warning';
                            }
                            @endphp
                            <tr>
                                <th scope="row">{{ $data->id }}</th>
                                <td><img width="55" src="{{ asset($data->product_logo) }}" alt="{{ $data->judul }}">
                                <td>{{ $data->nama_kategori }}</td>
                                <td>{{ $data->layanan }}</td>
                                <td>{{ $data->provider }}</td>
                                <td>{{ $data->provider_id }}</td>
                                <td>Rp. {{ number_format($data->harga, 0, '.', ',') }}</td>
                                <td>Rp. {{ number_format($data->harga_reseller, 0, '.', ',') }}</td>
                                <td>Rp. {{ number_format($data->harga_platinum, 0, '.', ',') }}</td>
                                <td>Rp. {{ number_format($data->harga_gold, 0, '.', ',') }}</td>
                                <td>Rp. {{ number_format($data->profit, 0, '.', ',') }}</td>
                                <td>
                                    <div class="btn-group-vertical">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-{{$label_pesanan}} dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> {{ $data->status }} <i class="mdi mdi-chevron-down"></i> </button>
                                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <li><a class="dropdown-item" href="/layanan-status/{{ $data->id }}/available">available</a></li>
                                            <li><a class="dropdown-item" href="/layanan-status/{{ $data->id }}/unavailable">unavailable</a></li>

                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:;" onclick="modal('{{ $data->layanan }}', '{{ route('layanan.detail', [$data->id]) }}')" class="btn btn-info mb-1">Edit</a>
                                    <a class="btn btn-danger" href="/layanan/hapus/{{ $data->id }}">Hapus</a>
                                </td>
                                <td>{{ $data->created_at }}</td>
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

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="modal-detail" style="border-radius:7%">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-detail-title"></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modal-detail-body"></div>
        </div>
    </div>
</div>

@endsection