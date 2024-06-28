@extends('main')

@section('content')
<div class="content">
    <div class="container">
    	<div class="row justify-content-center">
		    <div class="col-lg-9 mt-5">
		        <div class="pb-3">
		            <div class="section card bg-dark shadow-lg">
		                <div class="card-header bg-gradient">
                            <h3 class="card-title text-center">Register</h3>
                        </div>
		                <div class="card-body">
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif

                            @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                            @endif
		                    <form role="form" action="{{ route('post.register') }}" method="POST">
		                        @csrf
		                        <div class="form-group mb-2">
		                            
		                            <div class="input-group">
		                                <span class="input-group-text">
		                                    <i class="far fa-user"></i></span>
        		                              <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" required autocomplete="off" value="{{ old('nama') }}" placeholder="Nama">
        		                    </div>
		                            @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
		                        </div>
		                        <div class="form-group mb-2">
		                            
		                            <div class="input-group">
		                                <span class="input-group-text">
		                                    <i class="far fa-user"></i></span>
		                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" required autocomplete="off" value="{{ old('username') }}" placeholder="Username">
		                            </div>
		                            @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
		                        </div>
		                        <div class="form-group mb-2">
		                            <div class="input-group">
		                                <span class="input-group-text">
		                                    <i class="fa fa-whatsapp"></i></span>
		                            <input type="text" name="whatsapp" class="form-control @error('whatsapp') is-invalid @enderror" required autocomplete="off" value="{{ old('whatsapp') }}" placeholder="WhatsApp number [08xxxxxxxx]">
		                            </div>
		                            @error('whatsapp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
		                        </div>
		                        <div class="form-group mb-2">
		                           
		                            <div class="input-group">
		                                <span class="input-group-text">
		                                    <i class="fas fa-lock"></i></span>
		                            <input type="password" name="password" class="form-control @error('nama') is-invalid @enderror" placeholder="Password" required>
		                            </div>
		                            @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
		                        </div>
		                        <div class="form-check mb-4">
                                    <input required="" type="checkbox" name="tac" id="tac" class="form-check-input">
                                    <label for="tac" class="form-check-label">
                                    <i>
                                    I agree to <a href="Terms-and-conditions" target="Terms-and-conditions">Terms
                                    and conditions</a>
                                    </i>
                                    </label>
                                </div>
                                <div class="card-footer">
                                    <div class="text-end">
        		                        <button type="submit" name="tombol" value="submit" class="btn btn-primary float-right"><i class="fas fa-sign-in-alt"></i> Daftar</button>
		                            </div>
		                        </div>
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
    </div>
</div>
@endsection