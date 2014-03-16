<?php include 'includes/header.php'; ?>

 <div align="center"><span class="Maintext">
            <?php 
   $name = $_POST["txtName"]; 
   $email = $_POST["txtEmail"];
   $password = $_POST["txtPassword"];
   $find  = $_POST["radFind"];
   $rating = $_POST["selRate"];
   $contact = $_POST["value"];
   print "<h2> Acknowledgement </h2> ";
   print "Thank you $name for registering with us";
   print "<br>All correspondence will be sent to <a href=mailto:$email>$email</a>" ;
   
    include "connection.php"; 
 //Create the update query 
  $query = "INSERT INTO customer (name, email, password) VALUES ('$name','$email','$password' )"; 
  $result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());  
      
   // print message with ID of inserted record  
    print "<br />A new record inserted with an ID of ".mysql_insert_id();
?>
          </span></div>
        <p align="center">Thank you for registering with us. </p>
 
  
</div>



<?php include 'includes/footer.php'; ?>
