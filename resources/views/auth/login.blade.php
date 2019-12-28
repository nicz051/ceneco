@extends('layouts.app')

@section('content')
<div class="modal-dialog text-center">
				<div class="col-sm-9 main-section">
					<div class="modal-content" style="margin-left: 50px">
						
						<div class="col-12 user-img">
							<img src="images\userr.png">
						</div>
						
						<div class="col-12 form-input">
							<form>
								<div class="form-group">
									<input type="email" class="form-control" placeholder="ID Number">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" placeholder="Password">
								</div>
								<button type="submit" class="btn btn-success">Log-in</button>
							</form>
						</div>
						<div class="col-12 forgot">
							<a href="#">Forgot Password</a>
						</div>
					</div>
				</div>
			</div>


            
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="employee_id" class="col-md-4 col-form-label text-md-right">{{ __('ID Number') }}</label>

                            <div class="col-md-6">
                                <input id="employee_id" type="number" class="form-control @error('employee_id') is-invalid @enderror" name="employee_id" value="{{ old('employee_id') }}" required autocomplete="employee_id" autofocus>

                                @error('employee_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
