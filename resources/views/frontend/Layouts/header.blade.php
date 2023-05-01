

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    
                   

<head>
<link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
      

      <link rel="stylesheet" type="text/css" href="{{url("frontend/static/fontawesome/css/all.min.css")}}">
      <link rel="stylesheet" type="text/css" href="{{url("frontend/static/styles/home.css")}}">
      <link rel="shortcut icon" href="{{url("frontend/assets/logos/icon.png")}}" type="image/png"/>

      <script src="{{url("frontend/static/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
      <script src="{{url("frontend/static/fontawesome/js/all.min.js")}}"></script>

      <link rel="stylesheet" type="text/css" href="{{url("frontend/fonts/icomoon/style.css")}}">
      <link rel="stylesheet" type="text/css" href="{{url("frontend/static/styles/owl.carousel.min.css")}}">
      <link rel="stylesheet" type="text/css" href="{{url("frontend/static/bootstrap/css/bootstrap.min.css")}}"></link>
      <link rel="stylesheet" type="text/css" href="{{url("frontend/static/styles/style.css")}}">

    
      
</head>

<body>
    <!-- NAVBAR -->
    
      <div class="container-fluid d-flex align-items-center justify-content-center">
         <div class="col-12 col-md-12 col-sm-12">

            <div class="row">
                  <!-- logo and slogan -->
               <div class="d-flex align-items-center col-12 col-md-8 col-sm-12">

                  <div class="col-md-2 col-sm-2 mt-2 mb-2 px-4">
                     <a class="navbar-brand" href="{{route('dashboard')}}"><img src="{{url("frontend/assets/logos/logo.png")}}" height="80" width="90" alt="Logo"></a>
                  </div>

                  <div class="col-md-4 col-sm-4 d-flex align-items-start">
                     <h1>
                        <span class="slogan-word">Blood</span>
                        <span class="slogan-word">For</span>
                        <span class="slogan-word">Life</span>
                     </h1>  
                  </div>

               </div>

                  <!-- others -->
               <div class="d-flex align-items-center justify-content-center col-12 col-md-4 col-sm-12">
                             
                     <div class="col-md-6 col-sm-6 ">
                        <a role="button" class="btn btn-dark form-control" id="request-blood" href="{{route('request.create')}}">Request Blood</a>
                     </div>
                     <div class="col-md-6 col-sm-6 p-5">  
                     <ul class="navbar-nav ms-auto">
                     @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif    
                  
                        @else
                        <div class="container">
                            <div class="col-md-2 col-sm-4">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                     
                     </div>

                </div>

            </div>
         </div>
      </div>


      <nav class="navbar navbar-expand-md navbar-light sticky-top" id="navbar">
         <div class="container-fluid">
            <a class="navbar-brand" href="{{url('/')}}">
              <i class="fas fa-home" aria-hidden="true"></i>
            </a>

            <div class="navbar-brand  d-flex align-items-center logo-center-sm d-md-none d-lg-none">
               <a href="#">
                  <img src="{{url("frontend/assets/logos/logo.png")}}" alt="Logo" style="height:40px; width:40px;">
               </a>
            </div>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                     <a class="nav-link" href="{{route('request.index')}}">Blood Requests</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{route('hospital.index')}}">Hospitals</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{route('bloodbank.index')}}">Blood Banks</a>
                  </li>
                  <!-- Get Involved DROPDOWN -->
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="/workspace/blood.com" id="getInvolved" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Get Involved
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="getInvolved">
                        <li><a class="dropdown-item" href="{{route('request.index')}}">Donate Blood</a></li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{route('about.create')}}">About Us</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
