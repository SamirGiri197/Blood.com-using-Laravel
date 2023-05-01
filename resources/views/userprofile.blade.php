@extends('admin.layouts.app')
@section('content')
<section class="vh-100" style="background-color: rgb(121, 174, 203);">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-md-9 col-lg-7 col-xl-5">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-4">
            <div class="d-flex text-black">
              <div class="flex-shrink-0">
                <img src="data:image/jpeg;base64,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"
                  alt="Generic placeholder image" class="img-fluid"
                  style="width: 180px; border-radius: 10px;">
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="mb-1">{{Auth::admin()->name}}</h5>
                <p class="mb-2 pb-1" style="color: #2b2a2a;">Student</p>
                <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                  style="background-color: #efefef;">
                  <div>
                    <p class="small text-muted mb-1">Mobile Number :</p>
                    <p class="mb-0">{{Auth::admin()->mobile_number}}</p>

                    <p class="small text-muted mb-1">Email :</p>
                    <p class="mb-0">{{Auth::user()->email}}</p>
                    <p class="small text-muted mb-1">Password :</p>
                    <p class="mb-0">********</p>
                    <p class="small text-muted mb-1">Role :</p>
                    <p class="mb-0">{{Auth::user()->is_admin?"admin":"user"}}</p>


                  </div>

                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection