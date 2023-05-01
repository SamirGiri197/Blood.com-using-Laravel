<?php require_once('actions/helper.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/styles/login.css">
    <link rel="stylesheet" href="static/fontawesome/css/all.min.css">
    <link rel="shortcut icon" href="assets/logos/icon.png" type="image/png"/>
    <title>Log In</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-10 col-md-5 mx-auto mt-4">
                <div class="text-dark mb-2">
                    <?php echo MessagePop() ?>
                </div>
                <form action="/workspace/blood.com/user-login" method="post">
                    <div class="row">
                        <div class="col-12 text-center" id="top">
                            <h3>Log Into blood.com</h3>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <!-- <i class="fas fa-user"></i>&nbsp; -->
                        <input type="email" class="input-field" id="email" name="email" placeholder="email" required>
                    </div>

                    <div class="row mt-3">
                        <!-- <i class="fas fa-key"></i>&nbsp; -->
                        <input type="password" class="input-field" id="password" name="password" placeholder="password" required>
                    </div>

                    <div class="row mt-3">
                        <input type="submit" class="btn btn-primary" id="login-btn" name="login-btn" value="Log In">
                    </div>

             
                   

                    <div class="row mt-5">
                        <div class="col-12 text-center">
                            Already Register? <br>
                             <a style="text-decoration: none" href="/workspace/blood.com/user-registration">Register Now</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>


    <script src="static/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="static/fontawesome/js/all.min.js"></script>
</body>

</html>