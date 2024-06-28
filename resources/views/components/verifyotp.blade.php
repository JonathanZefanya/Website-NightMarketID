@extends('./main')

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

    .accordion-button {
            box-shadow: none !important;
        }
    .product .box {
            margin-bottom: 50px;
        }
</style>
@endsection

@section('content')

<div class="wrapper pt-4">
    <br>
  <div class="container">
    
      <div class="col-lg-12 mx-auto mb-2">
        <div class="card bg-dark shadow miliyan-rounded-sedang">
          <div class="card-header miliyan-rounded-sedang  bg-miliyan">
            <h5 class="card-title text-white mt-2">Forgot Your Password</h5>
          </div>
          <div class="px-3 pt-3 mb-3">
				
					<h2>Check Your Whatsapp</h2>
					<p>Masukan kode OTP yang telah dikirim Ke Whatsapp.</p>
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
                
				<form action="{{url('/verify/otp')}}" method="POST" class="my-form px-3">
				    @csrf
					<div class="col-md-12 col-md-8 mb-3 row otp">
						<div class="col-2"><input type="nomor" autocomplete="off" class="form-control text-center" id="otp-1" name="otp[]" onkeyup="input_otp('1', this.value);" placeholder="" required></div>
						<div class="col-2"><input type="nomor" autocomplete="off" class="form-control text-center" id="otp-2" name="otp[]" onkeyup="input_otp('2', this.value);" placeholder="" required></div>
						<div class="col-2"><input type="nomor" autocomplete="off" class="form-control text-center" id="otp-3" name="otp[]" onkeyup="input_otp('3', this.value);" placeholder="" required></div>
						<div class="col-2"><input type="nomor" autocomplete="off" class="form-control text-center" id="otp-4" name="otp[]" onkeyup="input_otp('4', this.value);" placeholder="" required></div>
						<div class="col-2"><input type="nomor" autocomplete="off" class="form-control text-center" id="otp-5" name="otp[]" onkeyup="input_otp('5', this.value);" placeholder="" required></div>
						<div class="col-2"><input type="nomor" autocomplete="off" class="form-control text-center" id="otp-6" name="otp[]" onkeyup="input_otp('6', this.value);" placeholder="" required></div>
					</div>
					<div class="mt-3">
						<button class="btn btn-primary w-100" type="submit" name="tombol" value="otp">Confirm</button>
					</div>
				</form>
			</div>
		</div>
		<p>&nbsp</p>

@push('custom_script')


<script>
			function input_otp(ke, otp) {
				if (ke < 6) {
					if ($("#otp-" + ke).val().length == 1) {
						var next = parseInt(ke) + 1;

						$("#otp-" + next).focus();
					}
				} else {
					if ($("#otp-6").val().length > 1) {
						$("#otp-6").val(otp.slice(1, 2));
					}
				}
			}
		</script>
		
    


@endpush


@endsection