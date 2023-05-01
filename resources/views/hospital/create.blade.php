@extends('admin.layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form method="POST" action="{{route('hospital.store')}}">
    @csrf
    <div class="card-body">
        <div class="mb-3">
            <label for="name" class="name">Name</label>
            <input  type="text" name="name" class="form-control" id="name"
                placeholder="Name" required>
                <span class="text-danger">
                            @error('name')
                            {{$message}}
                            @enderror
                        </span>
        </div>
       
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input name="address" type="text" class="form-control" id="address" placeholder="Address" required>
            <span class="text-danger">
                            @error('address')
                            {{$message}}
                            @enderror
                        </span>
        </div>
              
        <div class="mb-3">
          <label for="contact_number" class="contact_number">Contact Number</label>
          <input name="contact_number" type="text" class="form-control" id="contact_number"
          
          required placeholder="Contact_Number">
          <span class="text-danger">
                            @error('contact_number')
                            {{$message}}
                            @enderror
                        </span>

      </div>
    
        
    
     
     
 
      

     <button type="submit">Create  Hospital</button>
    </div>
  
  
       
   
      

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

@endsection