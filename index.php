<?php
error_reporting(0);
$invalid_login = $_GET['Login_info'];
if($invalid_login ==='Invalid Login Details Supplied, Try Again With Valid Login Data'){
	?>
<div class="alert alert-danger" role="alert">
Invalid Login Details Supplied, Try Again With Valid Login Data	
</div>
	<?php
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Meal Ordering Challenge</title>

    <!-- Custom fonts for this template-->
    <link href="vendor_one/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                           
                            <div class="col-lg-3 d-none d-lg-block">
        
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4" style="color:red;"><marquee>ANDELA MEAL ORDER SYSTEM</marquee></h1>
                                    </div>

<h4><ty sytle="color:green;">To test the admin part login with email admin@gmail.com and password 123admin</ty></h4>
                                    
                                    <form class="user" name="login" action="login" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="email"
                                                id="username" aria-describedby="usernameHelp"
                                                placeholder="Enter Email..." required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" name="password" placeholder="Password" required="">
                                        </div>
                                        <div class="form-group">
                                           
                                        </div>
                                        <input type="submit" name="login" class="btn btn-primary btn-user btn-block" value="Login"/>
                                        <hr>
                                    </form>
                             
                                    <div class="text-center">
                                        <a class="small" href="register">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor_one/jquery/jquery.min.js"></script>
    <script src="vendor_one/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor_one/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/disable_back_button.js"></script>

</body>

</html>