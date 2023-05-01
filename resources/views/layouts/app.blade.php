
@extends("frontend.Layouts.main")
@section("main.container")

<!-- Slider Section -->
<Section class="slider-section">
   <div class="content">
    
      <div class="container-fluid">

         <div class="owl-carousel slide-one-item">

            <div class="d-md-flex testimony-29101 align-items-stretch">
               <div class="image" style="background-image: url('frontend/assets/logos/logo.png'); background-size: contain; background-repeat: no-repeat; background-position: center;"></div>
               <div class="text">
                  <blockquote>
                     <h1> About Blood </h1>
                     <p>
                        Blood is an online Blood Management System designed and developed to fasciliate the blood to the needy one and help
                        save lifes as more as possible. It is developed by the group of three students of B.Sc.CSIT at Godawari College as a 
                        final year Project of Seventh semester.
                     </p>
                  </blockquote>
                  <button class="btn btn-danger">See More </button>
               </div>
            </div>  <!-- .item -->

            <div class="d-md-flex testimony-29101 align-items-stretch">
               <div class="image" style="background-image: url('frontend/assets/images/bloodbank.png'); background-size: contain; background-repeat: no-repeat; background-position: center;"></div>
               <div class="text">
                  <blockquote>
                     <h1> Blood Banks</h1>
                     <p>Blood Banks Can Provide Blood to the users according to their need. 
                        Blood Banks can be added by the system admin and they can contact users through chat, comment or
                        Contact Infos provided by the users.
                     </p>
                  </blockquote>
                  <button class="btn btn-danger">See More </button>
               </div>
            </div>  <!-- .item -->


            <div class="d-md-flex testimony-29101 align-items-stretch">
               <div class="image" style="background-image: url('frontend/assets/images/hospital.png'); background-size: contain; background-repeat: no-repeat; background-position: center;"></div>
               <div class="text">
                  <blockquote>
                     <h1> Hospitals</h1>
                     <p>Hospitals provide users Blood requisition forms and they can provide Blood to the users according to their need. 
                        through hospital's blood bank. Hospitals can be added by system admin  and they can contact users through chat, comment or
                        Contact Infos provided by the users.
                     </p>
                     </blockquote>
               <button class="btn btn-danger">See More </button>
               </div>
            </div>  <!-- .item -->
         </div>
      </div>
   </div>
</Section>


<!-- Events Section -->

<section id="events" class="events-section pt-3">
   <div class="container-fluid">
            <h1 class="mb-5 heading-style">Events</h1>

            <div class="row">
               <div class="col-lg-4 col-md-6 mb-4">
                  <div class="event-card">
                     <div class="event-img">
                        <a href="{{route('blogs.index')}}">
                        <img class="img-fluid" src="{{url("frontend/assets/images/image.jpg")}}" alt="Click Me">
                        </a>
                     </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4">
                     <div class="event-card">
                     <div class="event-img">
                     <a href="{{route('blogs.index')}}">
                        <img class="img-fluid" src="{{url("frontend/assets/images/image.jpg")}}" alt="Click Me">
                        </a>
                     </div>
                     </div>
                  </div>

                  <div class="col-lg-4 col-md-6 mb-4">
                     <div class="event-card">
                     <div class="event-img">
                     <a href="{{route('blogs.index')}}">
                        <img class="img-fluid" src="{{url("frontend/assets/images/image.jpg")}}" alt="Click Me">
                        </a>
                     </div>
                     </div>
                  </div>
               </div>
         <div class="row">
               <div class="col-lg-4 col-md-6 mb-4">
                  <div class="event-card">
                     <div class="event-img">
                     <a href="{{route('blogs.index')}}">
                        <img class="img-fluid" src="{{url("frontend/assets/images/age.jpg")}}" alt="Click Me">
                        </a>
                     </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4">
                     <div class="event-card">
                     <div class="event-img">
                     <a href="{{route('blogs.index')}}">
                        <img class="img-fluid" src="{{url("frontend/assets/images/age.jpg")}}" alt="Click Me">
                        </a>
                     </div>
                     </div>
                  </div>

                  <div class="col-lg-4 col-md-6 mb-4">
                     <div class="event-card">
                     <div class="event-img">
                     <a href="{{route('blogs.index')}}">
                        <img class="img-fluid" src="{{url("frontend/assets/images/age.jpg")}}" alt="Click Me">
                        </a>
                     </div>
                     </div>
                  </div>
               </div>
         </div>

     
   </div>
</section>

    
                 
                    

                    

                
       
                

            

     
   </div>
</section>

<!-- Blood requests Section -->
<section class="blood-request mt-3">

   <div class="container-fluid">
         <h1 class="heading-style"> Blood Requests </h1>


         <div class="row justify-content-center align-items-center mt-3">

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">

                     <div class="row">
                        <!-- First Card -->
                           <div class="col-md-6 col-sm-12">
                              <div class="card  bg-light" style="border: 1px solid;">
                                 <div class="card-header text-center bg-danger text-white">
                                 Emergency Blood Needed 1
                                 </div>
                                 <div class="card-body row">
                                    <div class="col-md-4 d-flex align-items-center" style="border-right: 1px solid;">
                                       <img src="{{url("frontend/assets/images/blood-request-form.jpg")}}" class="card-img" alt="Image" style="width: 100%; height: 100%;">
                                    </div>
                                    <div class="col-md-8">
                                       <label> Blood Group : <span>A+</span> </label><br>
                                       <label> Name : <span>Samir Giri</span> </label><br>
                                       <label> Conatct Number : <span>9800966705</span> </label><br>
                                       <label> Address : <span>Nobel Medical Hospital</span> </label><br>
                                       <label> Email : <span>samirgiri197@gmail.com</span> </label><br>
                                       <label> Note : <span>Help Save life please</span> </label>
                                       <div class="row mt-3">
                                          <div class="col-md-6  col-sm-6">
                                             <button class="btn btn-primary form-control comment-btn"><i class="fa fa-comment"></i> Comment</button>
                                          </div>
                                          <div class="col-md-6  col-sm-6">
                                             <button class="btn btn-danger form-control" id="chat-icon"><i class="fa-solid fa-message"></i> Chat</button>
                                          </div>
                                          <div  class="comment-section" style="display:none;">
                                             <div class="row mt-2">
                                                   <div class="form-group col-md-10 col-sm-10">
                                                      <textarea class="form-control " rows="1" id="comment"></textarea>
                                                   </div>
                                                   <div class="col-md-2 col-sm-2">
                                                      <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
                                                   </div>
                                             </div>
                                          </div>
                                       </div>
                                       </div>
                                 </div>
                           </div>
                        </div>
                              <!-- second Card -->
                        <div class="col-md-6 col-sm-12">
                              <div class="card  bg-light" style="border: 1px solid;">
                                 <div class="card-header text-center bg-danger text-white">
                                 Emergency Blood Needed 2
                                 </div>
                                 <div class="card-body row">
                                    <div class="col-md-4 d-flex align-items-center" style="border-right: 1px solid;">
                                       <img src="{{url("frontend/assets/images/blood-request-form.jpg")}}" class="card-img" alt="Image" style="width: 100%; height: 100%;">
                                    </div>
                                    <div class="col-md-8">
                                       <label> Blood Group : <span>A+</span> </label><br>
                                       <label> Name : <span>Samir Giri</span> </label><br>
                                       <label> Conatct Number : <span>9800966705</span> </label><br>
                                       <label> Address : <span>Nobel Medical Hospital</span> </label><br>
                                       <label> Email : <span>samirgiri197@gmail.com</span> </label><br>
                                       <label> Note : <span>Help Save life please</span> </label>
                                       <div class="row mt-3">
                                          <div class="col-md-6  col-sm-6">
                                             <button class="btn btn-primary form-control comment-btn"><i class="fa fa-comment"></i> Comment</button>
                                          </div>
                                          <div class="col-md-6  col-sm-6">
                                             <button class="btn btn-danger form-control" id="chat-icon"><i class="fa-solid fa-message"></i> Chat</button>
                                          </div>
                                          <div  class="comment-section" style="display:none;">
                                             <div class="row mt-2">
                                                   <div class="form-group col-md-10 col-sm-10">
                                                      <textarea class="form-control " rows="1" id="comment"></textarea>
                                                   </div>
                                                   <div class="col-md-2 col-sm-2">
                                                      <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
                                                   </div>
                                             </div>
                                          </div>
                                       </div>
                                       </div>
                                 </div>
                           </div>
                        </div>
                     </div>

                  </div>
                  <div class="carousel-item">
                     <div class="row">
                           <!-- First Card -->
                           <div class="col-md-6 col-sm-12">
                              <div class="card  bg-light" style="border: 1px solid;">
                                 <div class="card-header text-center bg-danger text-white">
                                 Emergency Blood Needed 3
                                 </div>
                                 <div class="card-body row">
                                    <div class="col-md-4 d-flex align-items-center" style="border-right: 1px solid;">
                                       <img src="assets/images/blood-request-form.jpg" class="card-img" alt="Image" style="width: 100%; height: 100%;">
                                    </div>
                                    <div class="col-md-8">
                                       <label> Blood Group : <span>A+</span> </label><br>
                                       <label> Name : <span>Samir Giri</span> </label><br>
                                       <label> Conatct Number : <span>9800966705</span> </label><br>
                                       <label> Address : <span>Nobel Medical Hospital</span> </label><br>
                                       <label> Email : <span>samirgiri197@gmail.com</span> </label><br>
                                       <label> Note : <span>Help Save life please</span> </label>
                                       <div class="row mt-3">
                                          <div class="col-md-6  col-sm-6">
                                             <button class="btn btn-primary form-control comment-btn"><i class="fa fa-comment"></i> Comment</button>
                                          </div>
                                          <div class="col-md-6  col-sm-6">
                                             <button class="btn btn-danger form-control" id="chat-icon"><i class="fa-solid fa-message"></i> Chat</button>
                                          </div>
                                          <div  class="comment-section" style="display:none;">
                                             <div class="row mt-2">
                                                   <div class="form-group col-md-10 col-sm-10">
                                                      <textarea class="form-control " rows="1" id="comment"></textarea>
                                                   </div>
                                                   <div class="col-md-2 col-sm-2">
                                                      <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
                                                   </div>
                                             </div>
                                          </div>
                                       </div>
                                       </div>
                                 </div>
                           </div>
                        </div>
                              <!-- second Card -->
                        <div class="col-md-6 col-sm-12">
                              <div class="card  bg-light" style="border: 1px solid;">
                                 <div class="card-header text-center bg-danger text-white">
                                 Emergency Blood Needed 4
                                 </div>
                                 <div class="card-body row">
                                    <div class="col-md-4 d-flex align-items-center" style="border-right: 1px solid;">
                                       <img src="assets/images/blood-request-form.jpg" class="card-img" alt="Image" style="width: 100%; height: 100%;">
                                    </div>
                                    <div class="col-md-8">
                                       <label> Blood Group : <span>A+</span> </label><br>
                                       <label> Name : <span>Samir Giri</span> </label><br>
                                       <label> Conatct Number : <span>9800966705</span> </label><br>
                                       <label> Address : <span>Nobel Medical Hospital</span> </label><br>
                                       <label> Email : <span>samirgiri197@gmail.com</span> </label><br>
                                       <label> Note : <span>Help Save life please</span> </label>
                                       <div class="row mt-3">
                                          <div class="col-md-6  col-sm-6">
                                             <button class="btn btn-primary form-control comment-btn"><i class="fa fa-comment"></i> Comment</button>
                                          </div>
                                          <div class="col-md-6  col-sm-6">
                                             <button class="btn btn-danger form-control" id="chat-icon"><i class="fa-solid fa-message"></i> Chat</button>
                                          </div>
                                          <div  class="comment-section" style="display:none;">
                                             <div class="row mt-2">
                                                   <div class="form-group col-md-10 col-sm-10">
                                                      <textarea class="form-control " rows="1" id="comment"></textarea>
                                                   </div>
                                                   <div class="col-md-2 col-sm-2">
                                                      <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
                                                   </div>
                                             </div>
                                          </div>
                                       </div>
                                       </div>
                                 </div>
                           </div>
                        </div>
                     </div>

                  </div>

                  <div class="carousel-item">
                     <div class="row">
                              <!-- First Card -->
                           <div class="col-md-6 col-sm-12">
                              <div class="card  bg-light" style="border: 1px solid;">
                                 <div class="card-header text-center bg-danger text-white">
                                 Emergency Blood Needed 5
                                 </div>
                                 <div class="card-body row">
                                    <div class="col-md-4 d-flex align-items-center" style="border-right: 1px solid;">
                                       <img src="assets/images/blood-request-form.jpg" class="card-img" alt="Image" style="width: 100%; height: 100%;">
                                    </div>
                                    <div class="col-md-8">
                                       <label> Blood Group : <span>A+</span> </label><br>
                                       <label> Name : <span>Samir Giri</span> </label><br>
                                       <label> Conatct Number : <span>9800966705</span> </label><br>
                                       <label> Address : <span>Nobel Medical Hospital</span> </label><br>
                                       <label> Email : <span>samirgiri197@gmail.com</span> </label><br>
                                       <label> Note : <span>Help Save life please</span> </label>
                                       <div class="row mt-3">
                                          <div class="col-md-6  col-sm-6">
                                             <button class="btn btn-primary form-control comment-btn"><i class="fa fa-comment"></i> Comment</button>
                                          </div>
                                          <div class="col-md-6  col-sm-6">
                                             <button class="btn btn-danger form-control" id="chat-icon"><i class="fa-solid fa-message"></i> Chat</button>
                                          </div>
                                          <div  class="comment-section" style="display:none;">
                                             <div class="row mt-2">
                                                   <div class="form-group col-md-10 col-sm-10">
                                                      <textarea class="form-control " rows="1" id="comment"></textarea>
                                                   </div>
                                                   <div class="col-md-2 col-sm-2">
                                                      <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
                                                   </div>
                                             </div>
                                          </div>
                                       </div>
                                       </div>
                                 </div>
                           </div>
                        </div>
                              <!-- second Card -->
                        <div class="col-md-6 col-sm-12">
                              <div class="card  bg-light" style="border: 1px solid;">
                                 <div class="card-header text-center bg-danger text-white">
                                 Emergency Blood Needed 6
                                 </div>
                                 <div class="card-body row">
                                    <div class="col-md-4 d-flex align-items-center" style="border-right: 1px solid;">
                                       <img src="assets/images/blood-request-form.jpg" class="card-img" alt="Image" style="width: 100%; height: 100%;">
                                    </div>
                                    <div class="col-md-8">
                                       <label> Blood Group : <span>A+</span> </label><br>
                                       <label> Name : <span>Samir Giri</span> </label><br>
                                       <label> Conatct Number : <span>9800966705</span> </label><br>
                                       <label> Address : <span>Nobel Medical Hospital</span> </label><br>
                                       <label> Email : <span>samirgiri197@gmail.com</span> </label><br>
                                       <label> Note : <span>Help Save life please</span> </label>
                                       <div class="row mt-3">
                                          <div class="col-md-6  col-sm-6">
                                             <button class="btn btn-primary form-control comment-btn"><i class="fa fa-comment"></i> Comment</button>
                                          </div>
                                          <div class="col-md-6  col-sm-6">
                                             <button class="btn btn-danger form-control" id="chat-icon"><i class="fa-solid fa-message"></i> Chat</button>
                                          </div>
                                          <div  class="comment-section" style="display:none;">
                                             <div class="row mt-2">
                                                   <div class="form-group col-md-10 col-sm-10">
                                                      <textarea class="form-control " rows="1" id="comment"></textarea>
                                                   </div>
                                                   <div class="col-md-2 col-sm-2">
                                                      <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
                                                   </div>
                                             </div>
                                          </div>
                                       </div>
                                       </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev bg-danger" style="height:50px; width:50px; border-radius:5px;" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next bg-danger" style="height:50px; width:50px; border-radius:5px;" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
               </a>
               </div>
                  
               
                
        </div>

         </div>
   </div>

</section>

@endsection