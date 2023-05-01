 @extends("frontend.Layouts.main")
@section("main.container")

      <div class="container-fluid">
         <div class="row">
               <!-- Hospital Tittle -->
            <div class="bg-dark text-center">
               <h1 class=" text-danger ">
                  Hospitals
               </h1>
               <h6 class="text-light ">
                  Contact Informations of Hospitals.
               </h6>
            </div>
         </div>
         <div class="row mt-5 mb-5 justify-content-center">
            <div class="col-md-6 col-sm-12 mx-auto">
               <form action="">
               <div class="input-group">
                  <input type="text" class="form-control" placeholder="Type here to search" name="search">
                  <div class="input-group-append">
                  <button class="btn btn-danger" type="submit"><i class="fa fa-search"></i></button>
                  </div>
               </div>
               </form>
            </div>  
            </div>

         <a href="{{route('admin.index')}}">
         <div class="container-fluid">
            <div class="row mt-3 mb-3">
                     <!-- First Card -->
                     @foreach ($hospitals as $hospital)
                   
                    <div class="col-md-4 col-sm-12 mb-2">
                       <div class="card text-center bg-light" style="border: 1px solid;">
                           <div class="card-header bg-danger text-white">
                           {{ucfirst($hospital->name)}}
                           </div>
                           <div class="card-body d-flex">
                              <div class="col-md-4 col-sm-4 d-flex align-items-center" style="border-right: 1px solid; width: 120px;">
                                 <img src="{{url("frontend/assets/images/hospital.png")}}" class="card-img" alt="Image" style="width: 100%; height: 100%;">
                              </div>
                              <div class="col-md-8 col-sm-8 d-flex flex-column justify-content-center" style="padding-left: 5px;">
                              <div>
                                 <label>
                                    Contact Number :
                                    <span>
                                    {{ucfirst($hospital->contact_number)}}
                                    </span>
                                    </label>
                              </div>   
                              <div>

                                 <label>
                                 Location :
                                 <span>
                                 {{ucfirst($hospital->address)}}
                                 </span>
                                 </label>
                              </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     @endforeach  
                  </div>   
               </div>
            </div>
         </a>
  </div>
     @endsection