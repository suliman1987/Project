<?php include 'includes/header.php'; ?> 
<?php 
 session_start(); 
// Check if we have established an authenticated 
if (!isset($_SESSION["authenticatedUser"])) 
{ 
     $_SESSION["message"] = "Please Login"; 
     header("Location: login.php"); //Go back and login 
} 
//If this page hasn't been redirected (we are allowed in) then we can display 
?>

<?php  



// query to get records  

include 'connection.php'; 

$query = "SELECT * FROM customer WHERE customerId = " .$_SESSION['customerId'];  



$result = mysql_query($query); 

    

// see if any rows were returned  

if (mysql_num_rows($result) > 0) {  

  echo "<table cellpadding=10 border=1>";  

  while($row = mysql_fetch_array($result))  {  

    echo "<tr>";  

    echo "<td>".$row["customerId"]."</td>";  

    echo "<td>".$row["name"]."</td>";  

    echo "<td>".$row["email"]."</td>";  

    //Dynamically created link to amend animal 

    echo "<td><a href=amendMyDetails.php?customerId=".$_SESSION["customerId"].">Update</a></td>";  

    echo "</tr>";  

  } //End while 

  echo "</table>";  

} //End num rows 

?>
<p>Your Page <a href="index.php">Home</a> or <a href="shop.php">Shop</a></p> or <a href="logout.php">Logout</a></td>







<?php include 'includes/footer.php'; ?>