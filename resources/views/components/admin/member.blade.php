@extends('main-admin')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Konfigurasi</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">/Pengguna</li>
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
<div class="card">
    <div class="card-body">
        <h4 class="mb-3 header-title mt-0">Tambah Pengguna</h4>
        <form action="{{ route('member.post') }}" method="POST">
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
                <label for="" class="col-lg-2 col-form-label">Username</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" name="username">
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-lg-2 col-form-label">Password</label>
                <div class="col-lg-10">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" name="password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-lg-2 col-form-label">Whatsapp</label>
                <div class="col-lg-10">
                    <input type="whatsapp" class="form-control @error('whatsapp') is-invalid @enderror" value="{{ old('whatsapp') }}" name="whatsapp">
                    @error('whatsapp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>            <div class="mb-3 row">
                <label for="" class="col-lg-2 col-form-label">Role</label>
                <div class="col-lg-10">
                    <select class="form-control @error('role') is-invalid @enderror" name="role">
                        <option value="Member">Member</option>
                        <option value="Gold">Gold</option>
                        <option value="Platinum">Platinum</option>
                    </select>
                    @error('role')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>


            <button type="submit" class="btn btn-danger">Buat Member</button>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h4 class="mb-3 header-title mt-0">Kirim saldo</h4>
        <form action="{{ route('saldo.post') }}" method="POST">
            @csrf

            <div class="mb-3 row">
                <label class="col-lg-2 col-form-label" for="example-fileinput">Username</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" name="username">
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-lg-2 col-form-label">Jumlah</label>
                <div class="col-lg-10">
                    <input type="number" class="form-control @error('balance') is-invalid @enderror" value="{{ old('balance') }}" name="balance">
                    @error('balance')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-danger">Kirim</button>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Semua Pengguna</h4>
                <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Saldo</th>
                                <th>Level</th>
                                <th>No WhatsApp</th>
                                <th>Created At</th>
                                <th>Hapus</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $users as $user )
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->username }}</td>
                                <td>Rp. {{ number_format($user->balance, 0, ',', '.') }}</td>
                                <td>{{ $user->role }}</td>
                                <td>{{ $user->whatsapp }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td><a class="btn btn-danger" href="{{ route('member.delete',[$user->id]) }}">Hapus</a></td>
                                <td><a href="javascript:;" onclick="modal('{{ $user->username }}', '{{ route('member.detail', [$user->id]) }}')" class="btn btn-info"><i class="fa fa-qrcode"></i>Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                {{ $users->links('vendor.pagination.simple-tailwind') }}
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