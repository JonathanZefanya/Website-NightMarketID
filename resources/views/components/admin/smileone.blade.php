@extends('main-admin')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Smile One Configuration</h4>
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
@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
<div class="card">
    <div class="card-body">
        <h4 class="mb-3 header-title mt-0">Ubah Cookie</h4>
        <form action="{{ route('smileone.post') }}" method="POST">
            @csrf
            <div class="mb-3 row">
                <label class="col-lg-2 col-form-label" for="example-fileinput">PHPSESSION</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control @error('session') is-invalid @enderror" value="{{ $cookie }}" name="session">
                    @error('session')
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
@endsection