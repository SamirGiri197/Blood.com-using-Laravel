@extends("frontend.Layouts.main")
@section("main.container")
    <div class="container mt-4">
        <h3 class="heading-style">About Us</h3>
        <div class="row">
            <p>
                We are students of B.Sc CSIT (Bachelor of Science in Computer Science and Information Technology)
                studying in Godawari college, Sunsari Nepal, affiliated under Tribhuwan University (TU).<br>
                Batch: 2075
            </p>
            <p>
                Our team comprises of the following members:
            </p>
        </div>
        <div class="row">                                                    
            <div class="col-4 mx-auto">
                <div class="member-photo" style="background-image: url('/frontend/assets/team/amir.jpg')";>  </div>
               
             
                <div class="member-name">
                    <a href="https://www.facebook.com/amir.kc.7771">Amir KC</a>
                </div>
            </div>
            <div class="col-4 mx-auto">
                <div class="member-photo" style="background-image: url('/frontend/assets/team/Thamesh.jpg');"></div>
                <div class="member-name">
                    <a href="https://www.facebook.com/bibek.bhandari.5205">Thamesh Giri</a>
                </div>
            </div>
            <div class="col-4">
                <div class="member-photo" style="background-image: url('/frontend/assets/team/sagar.jpg')"></div>
                <div class="member-name">
                    <a href="https://www.facebook.com/dragon.warrior.clasher">Sagar Guragain</a>
                </div>
            </div>
            
        </div>
        <h3>About Project</h3>
        <div class="row">
            <p>This project is prepared by us as a final year project of B.Sc.CSIT seventh semester.
                <br>
                It was developed using:
            </p>
            <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>Bootstrap</li>
                <li>Fontawesome Icons</li>
                <li>Javascript</li>
                <li>PHP</li>
            </ul>
            <p>
                under the Supervision of  Mr. Pratik Gautam
            </p>
        </div>

        <h3>Features</h3>
        <div class="row mb-3">
            <ul>
                <li>
                    Users can directly request blood from othe users as well as from Hospitals and blood banks.
                </li>
                <li>
                  Users can communicate via. comment as well as chatting.
                </li>
                <li>
                  Blood banks and hospitals can also communicate with users and provide blood.
                </li>
            </ul>
        </div>

    </div>
@endsection
    
  