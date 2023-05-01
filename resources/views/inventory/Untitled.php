<!-- 

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

                  <div class="col-md-2 col-sm-4">
                     <a class="navbar-brand" href="{{route('dashboard')}}"><img src="{{url("frontend/assets/logos/logo.png")}}" height="80" width="100" alt="Logo"></a>
                  </div>

                  <div class="col-md-6 col-sm-8 text-danger d-flex justify-content-center">
                     <h1> Blood For Life </h1>  
                  </div>

               </div>
<div class="container">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
    <title>BloodInventory</title>

</head>
<body>
<div class="mb-12">

</div>
    <div class="container">
        <section class="container px-5 py-12 mx-auto">
            <div class="mb-12">

                <table class="table table-blue" id="table" style="width:100%">
                  
            <thead>
                <tr>
                <th>photo</th>
                    <th>Blood Bank</th>
                    <th>Blood Group</th>
                    <th>Pints Available</th>

                    <th scole="col" class="text-center">Edit</th>
                   
                    <th scole="col" class="text-center">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bloodbanks as $bloodbank)
                @foreach ($bloodbank->bloodInventory as $bloodInventory)
                <tr>
                <td>  <img src="{{url("frontend/assets/images/bloodbank.png")}}"class="card-img" alt="Image" style="width: 5%; height: 5%;"></td>
                    <td>{{ $bloodbank->name }}</td>
                    <td>{{ $bloodInventory->blood_group }}</td>
                    <td>{{ $bloodInventory->pints_available }}</td>
                    <form method="get" action ="{{route('bloodInventory.edit',$bloodInventory->id)}}">

<td>
  <button type="submit" class="btn btn-danger">Edit</button>
</td>
</form>


<form method="POST" action ="{{route('bloodInventory.destroy',$bloodInventory->id)}}">
@csrf
@method('delete')
<td>
  <button type="submit" class="btn btn-danger">Delete</button>
</td>
</form>
                   
                </tr>
                @endforeach
                @endforeach
                </tbody>
                  </table>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>


<script>
    $(document).ready(function () {
$('#table').DataTable();
});
</script>

            </div>

        </div>


</body>
</html>
</div>





 -->
