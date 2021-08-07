<?php
//this end point does not require authentication,so no need to pass on the token
$opts = array('http'=>array('method'=>"GET",'header'=>"Accept-language: en\r\n" ."Cookie: foo=bar\r\n")); 

$context = stream_context_create($opts);
$url ="https://stormy-cove-15358.herokuapp.com/api/auth/totalusers";

$data = file_get_contents($url,false,$context);

$b=json_decode($data);

$users = $b->{'total_users'};
?>
