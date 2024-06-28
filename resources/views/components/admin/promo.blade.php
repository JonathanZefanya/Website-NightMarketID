@extends('main')

@section('title', 'Edit Promo')

@section('content')
    <h1>Edit Promo</h1>
    <form method="POST" action="{{ route('promo.update', ['id' => $promo->id]) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama Promo</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $promo->nama }}">
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="text" class="form-control" id="gambar" name="gambar" value="{{ $promo->gambar }}">
        </div>
        <div class="form-group">
            <label for="harga_promo">Harga Promo</label>
            <input type="text" class="form-control" id="harga_promo" name="harga_promo" value="{{ $promo->harga_promo }}">
        </div>
        <div class="form-group">
            <label for="harga_normal">Harga Normal</label>
            <input type="text" class="form-control" id="harga_normal" name="harga_normal" value="{{ $promo->harga_normal }}">
        </div>
        <div class="form-group">
            <label for="waktu_berakhir">Waktu Berakhir</label>
            <input type="date" class="form-control" id="waktu_berakhir" name="waktu_berakhir" value="{{ $promo->waktu_berakhir }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
