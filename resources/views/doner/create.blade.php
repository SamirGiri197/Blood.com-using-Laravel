@extends('admin.layouts.app')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BloodBank</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form method="POST" action="{{route('donate.store')}}">
    @csrf
   
        
       
    <div class="col-12 col-md-8 col-sm-5 mx-auto mt-4">
                
        
                    <!-- Error message -->
            <div class="row text-danger">
                
            </div>

                    <div class="row">
                        <div class="col-12 text-center">
                            <h1>Add Doner</h1>
                        </div>
                    </div>
                    <div class="form-group row">
                     <!-- Full Name -->
                    <div class="col-12 col-md-6 col-sm-12">
                        <label for="fname">Full Name:</label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="Full Name"  pattern="[a-z A-Z]{6,15}">
                        <div class="text-danger"></div>
                        <span class="text-danger">
                            @error('fname')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <!-- contact number -->
                    <div class="col-12 col-md-6 col-sm-12">
                        <label for="contact">Contact Number:</label>
                        <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact Number"  min="10" max="13">
                        <div class="text-danger"></div>
                        <span class="text-danger">
                            @error('contact')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                   
            </div> 
            <div class="form-group row">
                    <div class="col-12 col-md-6 col-sm-12 mt-2" id="blood-group">
                        <label for="bgroup">Blood Group:</label><br>
                        <select class="form-control custom-select mr-sm-2" id="bgroup" name="bgroup" style: display:block>
                            <option value="-1" selected>Select...</option>
                            <option value="A+ve">A +ve</option>
                            <option value="A-ve">A -ve</option>
                            <option value="B+ve">B +ve</option>
                            <option value="B-ve">B -ve</option>
                            <option value="AB+ve">AB +ve</option>
                            <option value="AB-ve">AB -ve</option>
                            <option value="O+ve">O +ve</option>
                            <option value="O-ve">O -ve</option>
                        </select> 
                        <div class="text-danger"></div>
                        <span class="text-danger">
                            @error('bgroup')
                            {{$message}}
                            @enderror
                        </span>
                    </div>  

            
            <div class="form-group row">
                    <div class="col-12 col-md-6 col-sm-12 mt-2" id="blood-group">
                        <label for="gender">Gender</label><br>
                        <select class="form-control custom-select mr-sm-2" id="gender" name="gender" style: display:block>
                            <option value="-1" selected>Select...</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                           
                        </select> 
                        <div class="text-danger"></div>
                        <span class="text-danger">
                            @error('gender')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="col-12 col-md-6 col-sm-12 mt-2">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email"  placeholder="example@example.com" required min="10" max="15">
                        <div class="text-danger"></div>
                        <span class="text-danger">
                            @error('email')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                  
                </div>
              
                   
                        </div>
                
     
     
                <button type="submit">Create Blood</button>
      

            
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
@endsection