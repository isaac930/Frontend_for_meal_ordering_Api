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

    <script src="js/disable_copy_paste.js"></script>

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
                                    <script type="text/javascript">
// close the div in 5 secs
window.setTimeout("closeHelpDiv();", 5000);

function closeHelpDiv(){
document.getElementById("helpdiv").style.display=" none";


window.location.replace("index");
}
</script>

<div class="alert alert-danger" id="helpdiv" role="alert">
<?php
if(isset($_POST['login']))

{
$email = $_POST['email'];
$password = $_POST['password'];
$usertype = $_GET['usertype'];


$url_path = 'https://stormy-cove-15358.herokuapp.com/api/auth/login';

$ch = curl_init();

$data = array(
 'email' => $email,
 'password' => $password);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_URL,$url_path);
curl_setopt($ch, CURLOPT_POST,true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
if (curl_errno($ch)) {
   $response = curl_error($ch);
}
curl_close ($ch);

$outputArray = json_decode($response);

$token = $outputArray->{'token'};

$usertype = $outputArray->{'usertype'};

$url_user = $usertype[0]->usertype;

if($token && $usertype){
    

    header("Location:dashboard?token=$token&usertype=$url_user&email=$email");

}

else{
    echo "Invalid Login Details, please provide correct user name and password";
}


exit;
}
?>


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



