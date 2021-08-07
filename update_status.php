<?php
$token = $_GET['token'];
$id = $_GET['id'];
$usertype = $_GET['usertype'];
$email = $_GET['email'];
$contact = $_GET['contact'];

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


                                    <?php
if(isset($_POST['update'])){

$email = $_POST['email'];
$contact = $_POST['contact'];

$editid = $_POST['edit_id'];

// User data to send using HTTP PUT method in curl
$data = array('email_for_order_owner'=> $email, 'contact' => $contact);

// Data should be passed as json format
$data_json = json_encode($data);

// API URL to update data with employee id

$url = "https://stormy-cove-15358.herokuapp.com/api/auth/updateorder/$editid";

$authorization = "Authorization: Bearer ".$token;
// curl initiate
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_HTTPHEADER, array($authorization,'Content-Type: application/json','Content-Length: ' . strlen($data_json)));

// SET Method as a PUT
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');

// Pass user data in POST command
curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


// Execute curl and assign returned data
$response  = curl_exec($ch);

// Close curl
curl_close($ch);

// See response if data is posted successfully or any error
//print_r ($response);

$message = "Order Status Updated To Received";
header("Location:update_order_status?token=$token&usertype=$usertype&message=$message");
}
?> 
                       </div>


                                <form class="user" name="updateorder" id="form" action="update_status?token=<?php echo $token; ?>&usertype=<?php echo $usertype;?>" method="post" role="form">
                               
                               <div class="form-group row">
                                                              
                                                              <div class="col-sm-12">
                               <input type="text" name="edit_id" class="form-control" value="<?php echo $id; ?>"
                               id="exampleLastName" required="" readonly="">
                               </div>
                               </div>
                               
                    
                               
                               <div class="form-group row">
                                                              
                                                              <div class="col-sm-12">
                               <input type="text" name="email" class="form-control" value="<?php echo $email; ?>"
                               id="exampleLastName" required="" readonly="">
                               </div>
                               </div>

                               <div class="form-group row">
                                                              
                                                              <div class="col-sm-12">
                               <input type="text" name="contact" class="form-control" value="<?php echo $contact; ?>"
                               id="exampleLastName" required="" readonly="">
                               </div>
                               </div>
                                
                                                               <input type="submit" name ="update" value="UPDATE ORDER STATUS AND NOTIFY OWNER" class="btn btn-danger btn-user btn-block"> 
                                                           
                                                           </form>

<br/>
<br/>
<br/>


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