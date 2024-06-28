@extends('main-admin')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Setelan Whatsapp</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">/whatsapp</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="text-center">
            <h4 class="page-title">Scan QR</h4>
            <img src="{{ $qr }}" style="height:300px">
        </div>
    </div>
</div>
@if($qr != '')
<script type="text/javascript">
    setTimeout(function() {
        window.location.reload(1);
    }, 15000)
</script>
@endif
@endsection