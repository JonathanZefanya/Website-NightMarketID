@extends('main')

@section('css')
<style>

</style>
@endsection

@section('content')
<div class="content">
    <div class="container">
    	<div class="row justify-content-center">
		    <div class="col-lg-4 mt-5">
		        <div class="pb-3">
		            <div class="section card bg-dark shadow-lg">
		                <div class="card-header bg-gradient">
                            <h3 class="card-title text-center">Login</h3>
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
		                    <form role="form" action="{{ route('post.login') }}" method="POST">
		                        @csrf
		                        <div class="form-group mb-2">
		                            <label class="form-label">Username</label>
		                            <div class="input-group">
		                                <span class="input-group-text">
		                                    <i class="far fa-user"></i></span>
    		                            <input type="text" name="username" class="form-control" required autocomplete="off" placeholder="Username">
		                            </div>
		                        </div>
		                        <div class="form-group mb-3">
		                            <label class="form-label">Password</label>
		                            <div class="input-group">
		                                <span class="input-group-text">
		                                    <i class="fas fa-lock"></i></span>
    		                            <input type="password" name="password" class="form-control" required placeholder="Password">
    		                            
		                            </div>
		                        </div>
                              <div class="g-recaptcha" id="g-recaptcha" name="grecaptcha" data-sitekey="{{ ENV('CAPTCHA_SITE_KEY') }}"></div>
							</div>
						    </div>
						<div class="col-6 text-end">
		                                <small class="text-muted">
		                                    <i>
		                                        Lupa Password? <a class="text-decoration-none color" href="{{url('/forgot-password')}}">reset?</a>
		                                    </i>
		                                </small>
						</div>
                                                 <div class="text-end mt-3">
		                                <button type="submit" name="tombol" value="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Login</button>
		                            </div>
		                            <div class="text-end">
		                                <small class="text-muted">
		                                    <i>
		                                        Belum Punya Akun?
        		                                <a href="{{ route('register') }}">Daftar disini</a>
		                                    </i>
		                                </small>
		                            </div>
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
    </div>
</div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection