@extends("frontend.Layouts.main")
@section("main.container")


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
        <div class="container-fluid d-flex align-items-center justify-content-center mb-5">
            <div class="col-12 col-md-8 col-sm-5 mx-auto mt-4 border-container">

        <form class="container-fluid" method="POST" action="{{route('request.store')}}" enctype="multipart/form-data">
            @csrf
        
                    <div class="row text-danger">
                        
                        <div class="row">
                            <div class="col-12 text-center">
                                <h1>Blood Request Form</h1>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                         <!-- Full Name -->
                        <div class="col-md-6 col-sm-12 text-danger">
                            <label for="fname">Full Name:</label>
                            <input type="text" class="form-control" id="fname" name="fname" placeholder="Full Name"  required pattern="[a-z A-Z]{6,20}">
                            <div class="text-danger"></div>
                            <span class="text-danger">
                                @error('fname')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                        <!-- contact number -->
                        <div class="col-md-6 col-sm-12 text-danger">
                            <label for="contact">Contact Number:</label>
                            <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact Number"pattern="[0-9]{10,15}" required min="10" max="13">
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
                            <label for="bgroup" class="text-danger">Blood Group:</label><br>
                            <select class="form-control form-select mr-sm-2" id="bgroup" name="bgroup" required style: display:block>
                                <option value="-1" selected>Select your blood group</option>
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
                        <div class="col-12 col-md-6 col-sm-12 mt-2 text-danger">
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
                    <div class="form-group row">
                        <div class="col-12 col-md-6 col-sm-12 mt-2 text-danger" id="blood-group">
                            <label for="note">Note:</label>
                            <textarea class="form-control" id="note" name="note" row="3" required ></textarea> 
                            <div class="text-danger"></div>
                            <span class="text-danger">
                                @error('note')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="col-12 col-md-6 col-sm-12 mt-2 text-danger">
                            <label for="photo"><i class="fab fa-wpforms"></i>Requisition Photo:</label>
                            <input type="file" class="custom-file-input" id="photo" name="photo" >
                        </div>
                            </div>
                            <div class="text-center mt-3 mb-3">
                                <button type="submit">Create Blood Request</button>
                            </div>
                        </div>    
</div>
    </div>
    


            
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
@endsection