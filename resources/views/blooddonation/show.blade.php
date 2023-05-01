
@extends("frontend.Layouts.main")
@section("main.container")

<section id="banner">

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="frontend/assets/img/sl1.jpg" alt="First slide" style="height: 600px">
      <div class="carousel-caption text-left text-danger">
      	<h5>DONATE BLOOD SAVE LIFE.</h5>
      	<h1 class="display-4 font-weight-bold">DONATE BLOOD<br> AND INSPIRES OTHERS</h1>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="frontend/assets/img/sl4.jpg" alt="Second slide"style="height: 600px">
      <div class="carousel-caption text-left text-white">
      	<h5>DONATE BLOOD SAVE LIFE.</h5>
      	<h1 class="display-4 font-weight-bold">DONATE BLOOD<br> AND INSPIRES OTHERS</h1>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="frontend/assets/img/sl3.jpg" alt="Third slide"style="height: 600px">
      <div class="carousel-caption text-left text-danger">
      	<h5 class="">DONATE BLOOD SAVE LIFE.</h5>
      	<h1 class="display-4 font-weight-bold">DONATE BLOOD <br>AND INSPIRES OTHERS</h1>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	
</section>

<section id="donationprocess" class="bg-secondary">

	<div class="container-fluid">
		<div class="row text-center">
			<div class="col-lg-12">

				<h1 class="py-2 mt-4 text-white display-4 font-weight-bold">DONATION PROCESS</h1>
				<h3 class="font-weight-normal py-4 text-white">The donation process from the time you arrive center until the time you leave</h3>
				
			</div>
		</div>


		<div class="row text-center  text-white">
			<div class="col-lg-4">
				
				<div class="card bg-dark">
  				<img class="card-img-top" src="frontend/assets/img/rg.jpg" alt="Card image cap"style="height: 200px">
  				<div class="card-body">
    				<h5 class="card-title">REGISTRATION</h5>
    				<p class="card-text">You need to complete a very simple registration form. Which contains all required contact information to enter in the donation process.</p>

  				</div>
				</div>

			</div>

			<div class="col-lg-4">
				
				<div class="card bg-dark">
  				<img class="card-img-top" src="frontend/assets/img/scr.jpg" alt="Card image cap"style="height: 200px">
  				<div class="card-body">
    				<h5 class="card-title">SCREENING</h5>
    				<p class="card-text">A drop of blood from your finger will take for simple test to ensure that your blood iron levels are proper enough for donation process.</p>

  				</div>
				</div>

			</div>

			<div class="col-lg-4">
				
				<div class="card bg-dark" >
  				<img class="card-img-top" src="frontend/assets/img/bd.jpg" alt="Card image cap"style="height: 200px">
  				<div class="card-body">
    				<h5 class="card-title">DONATION</h5>
    				<p class="card-text">After ensuring and passed screening test successfully you will be directed to a donor bed for donation. It will take only 6-10 minutes.</p>

  				</div>
				</div>

			</div>
		</div>

	</div>
	
</section>

<section id="join">

	<div class="container-fluid bg-secondary text-white">
		<div class="row text-center">
			<div class="col-lg-12">
				<h1 class="display-4 mt-4 py-3 font-weight-bold">JOIN US</h1>
				<p class="font-weight-bold py-3">FEEL THE REAL PEACE</p>
				
			</div>
		</div>

<div class="card card-body bg-dark text-white">
	<div class="card-title text-center">
		<h3>REGISTRATION FORM</h3>
		<p class="font-weight-light"><small>Please fill the following information to register as voluntary blood donor and become part of our vision. Kindly update your date of donation once done, so that your name will be hidden automatically till next 4 Months. Also please update your profile/information if in case you relocate in future</p>
		</small>
	</div>
    <form class="">
		<div class="form-row">

			<div class="form-group col-md-6">
				<input type="name" name="name" id="name" placeholder="Name"class="form-control">	
			</div>

			<div class="form-group col-md-3">
				<input type="text" name="age" id="age" placeholder="Age"class="form-control" min="50" max="">	
			</div>

			<div class="form-group col-md-3">
				<input type="text" name="weight" id="weight" placeholder="Weight"class="form-control">	
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<input type="text" name="Address" id="address" placeholder="Address"class="form-control">	
			</div>

			<div class="form-group col-md-3">
				<input type="number" name="number" id="number" placeholder="Number"class="form-control" maxlength="11">	
			</div>	
			<div class="form-group col-md-3">
				<select class="form-control" id="bloodgroup">
					<option selected="">Choose Blood Group</option>
					<option>A+</option>
					<option>A-</option>
					<option>B+</option>
					<option>B-</option>
					<option>O+</option>
					<option>O-</option>
					<option>AB+</option>
					<option>AB-</option>
				</select>
			</div>
		</div>
		
		<input type="submit" name="submit" class="btn btn-outline-success btn-lg btn-block">
	</form>

</div>
	
	</div>
@endsection