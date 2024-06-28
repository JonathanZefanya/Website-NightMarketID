@extends('../main')


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

<div class="wrapper pt-4">
    <br>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mx-auto mb-2">
        <div class="card bg-dark shadow miliyan-rounded-sedang">
          <div class="card-header miliyan-rounded-sedang  bg-miliyan">
            <h5 class="card-title text-white mt-2">Forgot Your Password</h5>
          </div>
          <div class="px-3 pt-3 mb-3">
			    <div class="px-3">
					<h2>Lupa Password?</h2>
					<p class="py-3">Anda Akan menerima Kode OTP melalui Whatsapp</p>
				</div>
			    @if(session('error'))
			    
			    <div class="alert alert-danger">
			       <ul>
			           <li>{{session('error')}}</li>
			       </ul>
			    </div>
			    
			    @endif
			    @if(session('success'))
			    
			    <div class="alert alert-success">
			       <ul>
			           <li>{{session('success')}}</li>
			       </ul>
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
				<form action="{{url('/forgot-password')}}" method="POST" class="my-form px-3">
				    @csrf
					<div class="mb-3">
						<input type="number" class="form-control" placeholder="628xxxxxxx" name="nomor" autocomplete="off" required>
					</div>
					<div class="mt-3">
						<button class="btn btn-primary w-100" type="submit" name="tombol" value="submit">Request Reset</button>
					</div>
				</form>
			</div>
		</div>
	
      <p &nbsp</p>
      
@push('custom_script')



@endpush

@endsection
