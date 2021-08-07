<?php
$token = $_GET['token'];
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

<div class="table-responsive">


<table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
    <thead>
<tr class="table-danger">
<td scope="col">AVATAR</td>
<td scope="col">NAME</td>
<td scope="col">EMAIL</td>
<td scope="col">CONTACT</td>


</tr>
</thead>
<tbody>
<?php
// Initiate curl session in a variable (resource)
$curl_handle = curl_init();

$authorization = "Authorization: Bearer ".$token; //authorization bearer token

$url = "https://stormy-cove-15358.herokuapp.com/api/auth/profile"; //api meal get end point

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
$profile = $response_data->profile;

// Extract only first 5 meal data (or 5 array elements)
//$meal_data = array_slice($meal_data, 0, 4);
$img = $profile->image_path;
echo "<tr>";
?>
<td>
<?php 
$imgUrl = 'https://stormy-cove-15358.herokuapp.com/public/uploads/users/'.$img;
$ig = 'https://stormy-cove-15358.herokuapp.com/public/upload/meals/1500879152.jpg';
?> 
<img src="<?php echo $imgUrl; ?>"/>
</td>
<?php
echo '<td>'.$profile->name.'</td>';
echo '<td>'.$profile->email.'</td>';
echo '<td>'.$profile->contact.'</td>';
?> 

</tr>
</tbody>

</table>
</center>


</div>



<br/>
<br/>
<br/>
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