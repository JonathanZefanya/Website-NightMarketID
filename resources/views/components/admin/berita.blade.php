@extends('main-admin')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Setelan Banner/logo/pop up</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">/konfigurasi</li>
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
        <h4 class="mb-3 header-title mt-0">Tambah Gambar</h4>
        <form action="{{ route('berita.post') }}" method="POST" enctype="multipart/form-data" id="berita">
            @csrf
            <div class="form-group">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">Pilih Gambar</label>
                    <div class="col-lg-10">
                        <input type="file" class="form-control" name="banner">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label">Deskripsi</label>
                    <div class="col-lg-10">
                        <textarea name="deskripsi" id="summernote"></textarea><br>
                        <small>*Wajib diisi</small>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label">Tipe</label>
                    <div class="col-lg-10">
                        <select class="form-control"name="tipe">
                            <option value="banner">Banner</option>
                            <option value="popup">Popup</option>
                            <option value="logoheader">Logo Header</option>
                            <option value="logofooter">Logo Footer</option>
                        </select>
                    </div>
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
                <h4 class="header-title mt-0 mb-1">Semua Gambar</h4>
                <div class="table-responsive-xxl">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Gambar</th>
                                <th>Tipe</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $berita as $data)
                            <tr>
                                <th scope="row">{{ $data->id }}</th>
                                <td><img  width="150"src="{{ asset($data->path) }}" alt="{{ $data->name }}"></td>
                                <td>{{ $data->tipe }}</td>
                                <td>{{ $data->created_at }}</td>
                                <td><a class="btn btn-danger" href="/berita/hapus/{{ $data->id }}">Hapus</a></td>
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
    $(document).ready(function() {
        $('#summernote').summernote();
        // var quill = new Quill('#snow-editor', {
        //     theme: 'snow',
        //     modules: {
        //         'toolbar': [[{ 'font': [] }, { 'size': [] }], ['bold', 'italic', 'underline', 'strike'], [{ 'color': [] }, { 'background': [] }], [{ 'script': 'super' }, { 'script': 'sub' }], [{ 'header': [false, 1, 2, 3, 4, 5, 6] }, 'blockquote', 'code-block'], [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'indent': '-1' }, { 'indent': '+1' }], ['direction', { 'align': [] }], ['link', 'image', 'video', 'formula'], ['clean']]
        //     },
        // })
        // $("#berita").on("submit",function() {
        //     $("#deskripsi").val(myEditor.children[0].innerHTML);
        // })
    });
</script>
@endsection