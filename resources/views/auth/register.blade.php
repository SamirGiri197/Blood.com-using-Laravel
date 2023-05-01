

@section('content')
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url("frontend/static/bootstrap/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{url("frontend/static/styles/login.css")}}">
    <link rel="stylesheet" href="{{url("frontend/static/fontawesome/css/all.min.css")}}">
    <link rel="shortcut icon" href="{{url("frontend/assets/logos/icon.png")}}" type="image/png"/>

    <div class="container-fluid d-flex align-items-center justify-content-center">
            <div class="col-12 col-md-5 col-sm-5 mx-auto mt-4 border-container"> 
                    <form class="container-fluid" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-12 text-center">
                                <div class="image-container">
                                    <img class="navbar-brand" src="frontend/assets/logos/logo.png" alt="">
                                </div>
                                <h3>Create an Blood Account</h3>
                            </div>
                        </div>
                        <div class="form-group row"> 
                            <div class="col">
                                <label for="name">{{ __('Full Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter your Full Name"  required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-3 mb-3">
                            
                            <div class="col">
                                <label for="email">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Example@example.com" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            
                            <div class="col-md-6 col-sm-12">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary" id="register-btn">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                        <div class="row mt-2">
                    <div class="col-12 text-center">
                        Already Registered? <br>
                        <a id="login" href="{{ route('login') }}">Login</a>
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

