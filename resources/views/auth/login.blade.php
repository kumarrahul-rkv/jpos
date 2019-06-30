<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gentallela Alela! | </title>

  <!-- Bootstrap core CSS -->

  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/fonts/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/icheck/flat/green.css') }}" rel="stylesheet">


  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1>{{ __('Login') }}</h1>
            <div>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
			  @error('email')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			  @enderror
            </div>
            <div>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
			  @error('password')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			  @enderror
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
            <div>
              <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
              @if (Route::has('password.request'))
				<a class="btn btn-link" href="{{ route('password.request') }}">
					{{ __('Forgot Your Password?') }}
				</a>
			  @endif
            </div>
            <div class="clearfix"></div>
            <div class="separator">

              <p class="change_link">New to site?
                <a href="#toregister" class="to_register"> Create Account </a>
              </p>
              <div class="clearfix"></div>
              <br />
              <div>
                <h1> jPOS Jewellery</h1>

                <p>©2019 All Rights Reserved.</p>
              </div>
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
      <div id="register" class="animate form">
            <section class="login_content">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h1>{{ __('Register') }}</h1>
                    <div>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" />
                    </div>
                    <div>
                    <button type="submit" class="btn btn-default submit">{{ __('Register') }}</button>
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">

                    <p class="change_link">Already a member ?
                        <a href="#tologin" class="to_register"> Log in </a>
                    </p>
                    <div class="clearfix"></div>
                    <br />
                    <div>
                        <h1>jPOS Jewellery</h1>

                        <p>©2019 All Rights Reserved.</p>
                    </div>
                    </div>
                </form>
                <!-- form -->
            </section>
            <!-- content -->
      </div>
    </div>
  </div>

</body>

</html>
