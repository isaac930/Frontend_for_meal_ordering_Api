<?php 
ob_start();
$email = $_GET['email'];
$token = $_GET['token'];
$id = $_GET['id'];
$usertype = $_GET['usertype'];
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

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard?token=<?php echo $_GET['token'];?>&usertype=<?php echo $usertype; ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Meals<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard?token=<?php echo $_GET['token'];?>&usertype=<?php echo $usertype; ?>&email=<?php echo $email;?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Navigation
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Meals</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Meal Management:</h6>
                        <a class="collapse-item" href="addmeal?token=<?php echo $token ;?>&usertype=<?php echo $usertype; ?>&email=<?php echo $_GET['email'] ;?>">Add New Meal</a>
                        <a class="collapse-item" href="get_all_meals?token=<?php echo $token ;?>&usertype=<?php echo $usertype; ?>&email=<?php echo $_GET['email'] ;?>">View Meals</a>
                       
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Menu</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Manage Menu:</h6>
                        <a class="collapse-item" href="addmenu?token=<?php echo $token ;?>&usertype=<?php echo $usertype; ?>&email=<?php echo $_GET['email'] ;?>">Add New Menu</a>
                        <a class="collapse-item" href="get_all_menu?token=<?php echo $token ;?>&usertype=<?php echo $usertype; ?>&email=<?php echo $_GET['email'] ;?>">View Menu</a>
                   
                       
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Orders
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Order Management</span>
                </a>
                <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Manage Orders:</h6>
                        <a class="collapse-item" href="add_order?token=<?php echo $token ;?>&usertype=<?php echo $usertype; ?>&email=<?php echo $_GET['email'] ;?>">Add Order</a>
                        <a class="collapse-item" href="get_orders?token=<?php echo $token ;?>&usertype=<?php echo $usertype; ?>&email=<?php echo $_GET['email'] ;?>">View Order(s)</a>
                        <a class="collapse-item" href="update_order_status?token=<?php echo $token ;?>&usertype=<?php echo $usertype; ?>&email=<?php echo $_GET['email'] ;?>">Update Order Status</a>
                    
                    
                </div>
            </li>

            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>This is a meal ordering challenge</strong> from Andela with which is consuming a backend in laravel,This front end just hits the end points</p>
                <a class="btn btn-success btn-sm" href=""></a>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                     <!-- Topbar Search -->
                   <marquee><h5 style="color:red;">This is a meal ordering challenge</strong> from Andela with which is consuming a backend in laravel,This front end just hits the end points</h5></marquee>

<!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">1</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">July 12, 2021</div>
                                        <span class="font-weight-bold">All Your Orders Are Received!</span>
                                    </div>
                                </a>
                           
                           
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">1</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Our Notification Emails.</div>
                                        <div class="small text-gray-500">You must receive and email every time you make an order</div>
                                    </div>
                                </a>
                             
           
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_GET['username']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Refresh Token
                                </a>
                              
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                
               
                <!-- Begin Page Content -->
                <div class="container-fluid">



                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <div class="alert alert-success" role="alert">  
                    <h4 style="color:red;">Edit MEAL DETAILS</h4>
        
                    </div> 
                                 

                        <hr>



</div>

<?php
if(isset($_POST['update'])){
$meal_name = $_POST['meal_name'];
$details = $_POST['details'];
$price = $_POST['price'];

$url = "https://stormy-cove-15358.herokuapp.com/api/auth/meal/$id";

$data = array(
'meal_name' => $meal_name, 
'details' => $details,
 'price' => $price);

// Data should be passed as json format
$data_json = json_encode($data);

//print_r($data_json);

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);

curl_setopt($curl, CURLOPT_HTTPHEADER, array(
   'Authorization: Bearer ' . $token,
   'Content-Type: application/json',
   'Content-Length: ' . strlen($data_json)
));

curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');

curl_setopt($curl, CURLOPT_POSTFIELDS, $data_json);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
if(!$response){
   die("Connection Failure");
}
curl_close($curl);

$outputArray = json_decode($response);

$message = $outputArray->{'message'};

}
?> 

</div>

<script type="text/javascript">
// close the div in 5 secs
window.setTimeout("closeHelpDiv();", 3000);

function closeHelpDiv(){
document.getElementById("helpdiv").style.display=" none";
}
</script> 
  <center style='color:red;'>
  <?php
   if($message){
 
   header("Location:get_all_meals?token=$token&usertype=$usertype&message=$message");
   }
   ?>
   </center>
   

<center>
<script>
    //this prevents form from submitting on page refresh
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>



<?php
// lets get a single meal we want to u
// Initiate curl session in a variable (resource)
$curl_handle = curl_init();

$authorization = "Authorization: Bearer ".$token; //authorization bearer token

$url = "https://stormy-cove-15358.herokuapp.com/api/auth/meal/$id"; //api meal get end point

curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array($authorization));

// Set the curl URL option
curl_setopt($curl_handle, CURLOPT_URL, $url);

// This option will return data as a string instead of direct output
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);

// Execute curl & store data in a variable
$curl_data = curl_exec($curl_handle);

curl_close($curl_handle);

// Decode JSON into PHP array
$response_data = json_decode($curl_data);

// Print all data if needed
// print_r($response_data);
// die();

// All meal data exists in 'data' object
$meal = $response_data->meal;

// Extract only first 5 meal data (or 5 array elements)
//$meal_data = array_slice($meal_data, 0, 4);

?>




                            <form class="user" name="edit_meal" id="form" action="edit_meal?token=<?php echo $token; ?>&id=<?php echo $id; ?>&usertype=<?php echo $usertype; ?>" method="post" role="form" enctype="multipart/form-data">
                                <div class="form-group row">
                               
                                    <div class="col-sm-12">
                                        <input type="text" name="meal_name" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Meal Name" value="<?php echo $meal->meal_name; ?>" required="">
                                    </div>
                                </div>
                                <div class="form-group">
<Textarea name="details" class="form-control form-control-user" id="exampleInputEmail" placeholder="Details" required=""> <?php echo $meal->details; ?> </Textarea>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" name="price" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Price"
                                            value="<?php echo $meal->price; ?>"
                                            required=""/>
                                    </div>
                                   <hr>
                                <div class="form-group">
                                    <div class="col-sm-12">
                               
</div></div>
                                <hr>
                                <input type="submit" name ="update" value="UPDATE MEAL" class="btn btn-primary btn-user btn-block"> 
                            
                            </form>
</center>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                    <!-- Content Row -->
                    <div class="row">


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Engineer Kirumira Isaac 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index">Logout</a>
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

    <!-- Page level plugins -->
    <script src="vendor_one/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/disable_back_button.js"></script>

</body>

</html>