<?php
$con = new mysqli("localhost","root","","design_thinking_csd");
if($con->connect_error){
  die("Failed to connect : ".$con->connect_error);
}

?>