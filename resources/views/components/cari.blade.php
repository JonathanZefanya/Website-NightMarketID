@extends('main')



@section('css')
<style>
    .form-check-input:focus {
        border-color: #fe6c17;
        box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 25%);
        outline: 0;
    }

    .form-check-input:checked {
        background-color: #fe6c17;
        border-color: #fe6c17;
    }

    .btn-primary {
        background-color: #3571e2;
        border-color: #3571e2;
        cursor: pointer;
        color: #fff;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #3571e2;
        border-color: #3571e2;
    }

    .btn-primary:focus,
    .btn-primary.focus {
        color: #fff;
        background-color: #3571e2;
        border-color: #3571e2;
        box-shadow: 0 0 0 0.2rem rgba(255, 168, 38, 0.5);
    }

    #searchProds {
        width: 60px;
        transition: width .5s ease
    }

    #searchProds:focus {
        width: 240px
    }
</style>
@endsection

@section('content')

@if(session('error'))
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
toastr.error('{{ session('error') }}');
</script>
@elseif(session('success'))
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
toastr.success('{{ session('success') }}');
</script>
@endif
<div class="wrapper pt-4">
    <br>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mx-auto mb-2">
        <div class="card bg-dark shadow miliyan-rounded-sedang">
          <div class="card-header miliyan-rounded-sedang  bg-miliyan">
            <h5 class="card-title text-white mt-2">Check Transaction Status</h5>
          </div>
          <div class="card-body">
            <form action="{{ route('cari.post') }}" method="post">
              @csrf
              <div class="row">
                <div class="col-md-6">
                  <label for="id" class="form-label">Invoice Number :</label>
                </div>
                <div class="col-md-6">
                </div>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i class="fas fa-receipt"></i></span>
                <input type="text" name="id" id="id" class="form-control" placeholder="No Invoice" required>
              </div>
              <button class="btn btn-primary mt-1 float-end">Check</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-12 mx-auto mb-5">
        <div class="card bg-dark shadow miliyan-rounded-sedang">
          <div class="card-header miliyan-rounded-sedang  bg-miliyan">
            <h5 class="card-title text-white mt-2">10 Last Transaction</h5>
          </div>
          <div class="card-body table-responsive">
            <table id="tblBuyer" class="table table-striped table-dark  table-bordered table-responsive">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Invoice</th>
                  <th>Item</th>
                  <th>Price</th>
                  <th>Status</th>
                </tr>
              </thead>
    <!--patih ganteng-->
    <tbody>
    @foreach ($pembelians as $pembelian)
        @php
            $status = $pembelian->status;
            if ($status == 'Success') {
                $label = 'success';
            } elseif ($status == 'Pending') {
                $label = 'warning';
            } elseif ($status == 'Progress') {
                $label = 'primary';
            } else {
                $label = 'danger';
            }
        @endphp
        <tr class="text-center">
            <td>{{ $pembelian->created_at }}</td>
            <td>{{ substr($pembelian->order_id, 0, (strlen($pembelian->order_id) / 2) - 2) . '****' . substr($pembelian->order_id, (strlen($pembelian->order_id) / 2) + 2) }}</td>
            <td>{{ $pembelian->layanan }}</td>
            <td>Rp {{ number_format($pembelian->harga, 0, ',', '.') }}</td>
            <td><span class="badge btn-{{ $label }}">{{ $status }}</span></td>
        </tr>
    @endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
 </div>
  </div>




@endsection