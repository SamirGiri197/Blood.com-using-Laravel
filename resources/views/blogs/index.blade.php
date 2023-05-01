
                  
       
       
                       
                      
                    
    
@extends("frontend.Layouts.main")
@section("main.container")             
    <!--Section: News of the day-->
    @foreach ($blogs as $blog)
<div class="row gx-5">
  <div class="col-md-6 mb-4">
    <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
    <img class="img-fluid" src="{{url("frontend/assets/images/image.jpg")}}" alt="{{ $blog->photo->title }}" height="500"  width="400" class="img-fluid" />
    
        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
      </a>
    </div>
  </div>

  <div class="col-md-6 mb-4">
  <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">News of the day</span>
    <h4><strong>{{ $blog->title }}</strong></h4>
    <p class="text-muted">
    {{ $blog->description }}
    </p>
    <a href="{{ route('blogs.show', $blog->id) }}" type="button" class="btn btn-primary">Read more</a>
  </div>
  @endforeach
</div>

<!--Section: News of the day-->
      
@endsection
