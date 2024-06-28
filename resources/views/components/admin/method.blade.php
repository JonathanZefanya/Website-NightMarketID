@extends('main-admin')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Setelan Payment</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">/Payment</li>
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
        <h4 class="mb-3 header-title mt-0">Tambah Payment</h4>
        <form action="{{ route('method.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row">
                <label class="col-lg-2 col-form-label" for="example-fileinput">Nama</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-lg-2 col-form-label" for="example-fileinput">Kode</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control @error('code') is-invalid @enderror" value="{{ old('code') }}" name="code">
                    @error('code')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-lg-2 col-form-label" for="example-fileinput">Keterangan</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" value="{{ old('keterangan') }}" name="keterangan">
                    @error('keterangan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-lg-2 col-form-label" for="example-fileinput">Tipe</label>
                <div class="col-lg-10">
                    <select class="form-select" name="tipe">
                        <option value="e-walet">E-Wallet</option>
                        <option value="tfbank">Transfer Bank</option>
                        <option value="virtual-account">Virtual Account</option>
                        <option value="convenience-store">Convenience Store</option>
                    </select>
                    @error('tipe')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-lg-2 col-form-label" for="example-fileinput">Images</label>
                <div class="col-lg-10">
                    <input type="file" class="form-control" name="images">
                    @error('images')
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
                <h4 class="header-title mt-0 mb-1">Semua Payment</h4>
                <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Kode</th>
                                <th>Keterangan</th>
                                <th>Tipe</th>
                                <th>Images</th>
                                <th>Aksi</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $data as $datas )
                            <tr>
                                <th scope="row">{{ $datas->id }}</th>
                                <td>{{ $datas->name }}</td>
                                <td>{{ $datas->code }}</td>
                                <td>{{ $datas->keterangan }}</td>
                                <td>{{ $datas->tipe }}</td>
                                <td><img width="100" src="{{ asset($datas->images) }}"></td>
                                <td>
                                    <a href="javascript:;" onclick="modal('{{ $datas->nama }}', '{{ route('method.detail', [$datas->id]) }}')" class="btn-sm btn-info mb-3">Edit</a>
                                    <br>
                                     <br>
                                    <a class="btn-sm btn-danger mt-2" href="/method/hapus/{{ $datas->id }}">Hapus</a>
                                </td>
                                <td>{{ $datas->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
                <div class="d-flex justify-content-center">
                    {{ $data->links('vendor.pagination.simple-tailwind') }}
                </div>
        </div>

    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.table').DataTable({
            "paging":   false,
            "info":     false
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