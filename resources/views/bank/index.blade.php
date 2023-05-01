@extends('admin.layouts.app')
@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
    <title>BloodBank</title>

</head>
<body>
<div class="mb-12">

</div>
    <div class="container">
        <section class="container px-5 py-12 mx-auto">
            <div class="mb-12">

                <table class="table table-dark" id="table" style="width:100%">
                    <thead>
                      
                  

    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Name</th>
      <th scope="col">Address>
      <th scope="col">Registration Number</th>
   
    
      <th scope="col">Contact Number</th>
      
      <th scole="col" class="text-center">Delete</th>
    </tr>
                    </thead>
                    <tbody>
                       



                        @php
                        $i = 0;
                    @endphp
                    @foreach($bloodbanks as $bloodbank)




                        <td>{{++$i}}</td>
                       
                        <td>{{$bloodbank->name}}</td>
                        <td>{{$bloodbank->address}}</td>
                       <td>{{($bloodbank->registration_number)}}</td> 
                        
                   
                        <td>{{$bloodbank->contact_number}}</td>
                      


                   

                        <form action="{{route('bloodbank.destroy',$bloodbank->id)}}" method="post">
                            @csrf
                            @method("delete")
                        <td>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </td>

                        </form>

                      </tr>

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

@endsection