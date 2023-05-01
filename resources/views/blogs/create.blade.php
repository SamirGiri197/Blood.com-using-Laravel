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
    <div class="container">

<form method="POST" enctype="multipart/form-data" action="{{ route('blogs.store') }}" >
    @csrf
    <div class="card-body">
    <div class="mb-3">
    <label for="title">Title:</label>
    <input type="text" name="title" id="title">
</div>
        <div class="mb-3">
        <label for="discription">Description</label>
    <textarea name="description" id="description"></textarea>
        </div>
        <div class="mb-3">
        
        <label for="content">Content:</label>
    <textarea name="content" id="content"></textarea>
        </div>
              
        <div class="mb-3">
         
        <label for="image">Image:</label>
    <input type="file" name="image" id="image">
          

      </div>
    
        
    
     
    <button type="submit">Create</button>
     
 

</form>


    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
@endsection
@extends('admin.layouts.app')
@section('content')

