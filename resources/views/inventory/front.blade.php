@extends("frontend.Layouts.main")
@section("main.container")
  <!-- Main Section -->
  <section>
  <div class="container-fluid">
    <div class="col-12 col-sm-12 col-md-12 align-items-center justify-content-center">
      <div class="row mt-2">
        <div class="cover-image-container text-canter">
          <img class="p-2" src="frontend/assets/images/hospital.png" alt="Cover image">
        </div>
        <div class="col-md-12 col-sm-12 mb-2 p-2 d-flex container-fluid" id="navbar" style="margin-right:10px;">
          <a class="nav-link" href="/workspace/blood.com/contact" style="margin-right:10px;">Contact Details</a>
          <a class="nav-link" href="/workspace/blood.com/blood-details">Available Bloods</a>
        </div>
      </div>
    </div>
  </div>
</section>



<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="card">
          <img src="frontend/assets/bloodgroup/Ap.png" class="card-img-top">
          <div class="card-body text-center">
              <h5 class="card-text"><span class="text-danger">Available quantity: 30 pints  </span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="card">
          <img src="frontend/assets/bloodgroup/A-.png" class="card-img-top">
          <div class="card-body text-center">
              <h5 class="card-text"><span class="text-danger">Available quantity: 30 pints  </span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="card">
          <img src="frontend/assets/bloodgroup/Bp.png" class="card-img-top">
          <div class="card-body text-center">
              <h5 class="card-text"><span class="text-danger">Available quantity: 30 pints  </span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="card">
          <img src="frontend/assets/bloodgroup/B-.png" class="card-img-top">
          <div class="card-body text-center">
              <h5 class="card-text"><span class="text-danger">Available quantity: 30 pints  </span>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="card">
          <img src="frontend/assets/bloodgroup/Op.png" class="card-img-top">
          <div class="card-body text-center">
              <h5 class="card-text"><span class="text-danger">Available quantity: 30 pints  </span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="card">
          <img src="frontend/assets/bloodgroup/O-.png" class="card-img-top">
          <div class="card-body text-center">
              <h5 class="card-text"><span class="text-danger">Available quantity: 30 pints  </span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="card">
          <img src="frontend/assets/bloodgroup/ABp.png" class="card-img-top">
          <div class="card-body text-center">
              <h5 class="card-text"><span class="text-danger">Available quantity: 30 pints  </span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="card">
          <img src="frontend/assets/bloodgroup/AB-.png" class="card-img-top">
          <div class="card-body text-center">
              <h5 class="card-text"><span class="text-danger">Available quantity: 30 pints  </span>          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection