@extends("frontend.Layouts.main")
@section("main.container")

   <div class="container-fluid col-12 col-md-12 col-sm-12">
      <div class="row mt-3 mb-3">
                  
                           <!-- First Card -->
         @foreach ( $bloodrequests as   $bloodrequest)

            <div class="col-md-4 col-sm-12">
               <div class="card  bg-light" style="border: 1px solid;">
                  <div class="card-header text-center bg-danger text-white">
                  Emergency Blood Needed  
                  </div>
                  <div class="card-body row mb-3">
                     <div class="col-md-4 d-flex align-items-center" style="border-right: 1px solid;">
                     <img src="http://127.0.0.1:8000/frontend/assets/logos/logo.png" class="card-img" alt="Image" style="width: 100%; height: 100%;">
                     </div>
                     
                     <div class="col-md-8">
                        <label> Blood Group : <span> {{( $bloodrequest->bgroup)}}</span> </label><br>
                        <label> Name : <span>{{ucfirst( $bloodrequest->fname)}}</span> </label><br>
                        <label> Conatct Number : <span>{{ucfirst( $bloodrequest->contact)}}</span> </label><br>
                        <label> Address : <span>Nobel Medical Hospital</span> </label><br>
                        <label> Email : <span>{{( $bloodrequest->email)}}</span> </label><br>
                        <label> Note : <span>{{ucfirst( $bloodrequest->note)}}</span> </label>
                        <div class="row mt-3">
                           <div class="col-md-6  col-sm-6">
                              <button class="btn btn-primary form-control comment-btn"><i class="fa fa-comment"></i></button>
                           
                        
                              </div>
                           <div class="col-md-6  col-sm-6">
                              <a href="{{ route('mail.form') }}"> <button class="btn btn-danger form-control" id="chat-icon"><i class="fa-solid fa-message"></i></button>
                              </a> 
                           </div>

                           <div  class="comment-section" style="display:none;">
                           <form action="{{ route('comments.store') }}" method="POST">
                              @csrf
                              <div class="row mt-2">
                                 <input type="hidden" value="{{ $bloodrequest->id }}" name="id">
                                    <div class="form-group col-md-10 col-sm-10">
                                       <textarea class="form-control " rows="1" id="comment" name="comment"></textarea>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                 
                                       

                                       <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
                                      
                                    </div>
                              </div>
                           </div>
                           </form>
                        </div>
                        </div>
                  </div>
                  
            </div>
           <div class="card card-body mb-3">
           <div class="row">
                        <div class="col-md-12">
                        @foreach($bloodrequest->comments as $row)
                              <div class="alert alert-success">
                              {{ $row->body }} - <small>{{ $row->user->name }}</small>
                              </div>
                        @endforeach
                        </div>
                       </div>
         </div>
           </div>
         @endforeach
      </div>
   </div>
        
   @endsection
    