@extends("frontend.Layouts.main")
@section("main.container")

<div class="container">
        @if(Session::has('success'))
          <div class="alert alert-success">
                {{ Session::get('success')}}
            </div>
        @endif
        <div class="card card-body shadow mb-3">
            <form action="{{ route('mail.send') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Subject</label>
                        <input type="text" name="subject" class="form-control" id="subject">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="body">Body</label>
                        <textarea class="form-control" name="body" id="body" cols="30" rows="10">

                        </textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <button class="btn btn-primary float-right" type="submit">Send</button>
                    </div>
                </div>
            </form>
        </div>
    
</div>


@endsection