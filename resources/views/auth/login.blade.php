
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url("frontend/static/bootstrap/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{url("frontend/static/styles/login.css")}}">
    <link rel="stylesheet" href="{{url("frontend/static/fontawesome/css/all.min.css")}}">
    <link rel="shortcut icon" href="{{url("frontend/assets/logos/icon.png")}}" type="image/png"/>
   

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 mt-4 border-container p-3">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                        <div class="col-12 text-center">
                            <div class="image-container">
                                <img class="navbar-brand" src="frontend/assets/logos/logo.png" alt="">
                            </div>
                            <h3>Log Into blood.com</h3>
                        </div>
                    </div>

                        <div class="row mt-4 mb-3">
                            <div class="col--12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your Email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot  Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="row mt-0">
                            <div class="col-12 text-center">
                                <input type="submit" class="btn btn-primary form-group" id="login-btn" name="login-btn" value="Log In">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                Already registered? <a style="text-decoration: none" href="{{route('register')}}">Register now</a>
                            </div>
                        </div>
                    </form>
                </div>    
            </div>
        </div>
</div>
            
</div>
<script src="static/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="static/fontawesome/js/all.min.js"></script>



