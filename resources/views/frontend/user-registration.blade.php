<?php
require_once('actions/helper.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/styles/registration.css">
    <link rel="stylesheet" href="static/fontawesome/css/all.min.css">
    <link rel="shortcut icon" href="assets/logos/icon.png" type="image/png"/>
    <title>Create Account</title>
</head>

<body>
   
            <div class="col-12 col-md-5 col-sm-5 mx-auto mt-4">
                
                <form action="/workspace/blood.com/user-registration" method="post" enctype="multipart/form-data">
                    <!-- Error message -->
                    <div class="row text-danger">
                        <?php echo MessagePop() ?>
                    </div>

                    <div class="row">
                        <div class="col-12 text-center">
                            <h4>Registration Form</h4>
                        </div>
                    </div>
                     <!-- Full Name -->
                    <div class="form-group row">  
                    <div class="col-12 col-sm-12">
                        <label for="fname">Full Name:</label>
                        <input type="text" class="form-control" id="fname" name="fname" value="<?php echo MessagePop() ?>" placeholder="Full Name" required>
                        <div class="text-danger"><?php echo MessagePop() ?></div>
                    </div>
                    </div>
                <div class="form-group row">
                     <!--  blood Group -->
                    <div class="col-4 mt-2" id="blood-group">
                        <label for="bgroup">Blood Group:</label>
                        <select class="form-control custom-select mr-sm-2" id="bgroup" name="bgroup">
                            <option value="-1" selected>Select...</option>
                            <option value="A+ve">A +ve</option>
                            <option value="A-ve">A -ve</option>
                            <option value="B+ve">B +ve</option>
                            <option value="B-ve">B -ve</option>
                            <option value="AB+ve">AB +ve</option>
                            <option value="AB-ve">AB -ve</option>
                            <option value="O+ve">O +ve</option>
                            <option value="O-ve">O -ve</option>
                        </select> 
                       
                        <div class="text-danger"><?php echo MessagePop() ?></div>
                    </div>

                     <!-- Gender -->
                    <div class="col mt-2">
                        <div class="row text-center">
                            <label for="gender"> Gender: </label> 
                        </div>
                        
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male" >
                            <label class="form-check-label" for="male">
                                Male
                            </label>
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female" >
                            <label class="form-check-label" for="female">
                                Female
                            </label>
                            <input class="form-check-input" type="radio" name="gender" id="other" value="other" >
                            <label class="form-check-label" for="other">
                                Other
                            </label>
                     
                        <div class="text-danger"><?php echo MessagePop() ?></div>
                    </div>
                    
                </div>
                 <!-- Email -->
                 <div class="form-group row mt-2">
                    <div class="col">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo MessagePop() ?>" placeholder="example@example.com" required>
                        <div class="text-danger"><?php echo MessagePop() ?></div>
                    </div>
                 </div>
                  <!-- Password -->
                <div class="form-group row mt-2">
                    <div class="col">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" value="<?php echo MessagePop() ?>" placeholder="8 - 32 Chaaracters" required>
                        <div class="text-danger"><?php echo MessagePop() ?></div>
                    </div>
                 </div>

                 <!-- Confirm Password -->
                 <div class="form-group row mt-2">  
                    <div class="col">
                        <label for="cpassword">Confirm Password:</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword" value="<?php echo MessagePop() ?>" placeholder="8 - 32 Chaaracters" required>
                        <div class="text-danger"><?php echo MessagePop() ?></div>
                    </div>
                 </div>
                    
 
                    <div class="form-group row mt-4">
                        <input type="submit" class="btn btn-primary" id="register-btn" name="register-btn" value="Register">
                    </div>


                    <div class="row mt-2">
                        <div class="col-12 text-center">
                            Already Registered? <br>
                            <a id="login" href="/workspace/blood.com/user-login">Login</a>
                        </div>
                    </div>
                </form>
            </div>


    <script src="static/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="static/fontawesome/js/all.min.js"></script>
</body>

</html>