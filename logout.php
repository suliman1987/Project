<?php 

  session_start(); 

  $appUsername = $_SESSION["authenticatedUser"]; 
  $_SESSION["message"] =  "User $appUsername has logged out"; 
  
  session_unregister("authenticatedUser"); 

  // Relocate back to the login page 
  header("Location: index.php"); 
  //session_destroy();    
?>   
