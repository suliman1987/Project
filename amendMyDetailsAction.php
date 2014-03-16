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
<tr>

    <td colspan="4" bgcolor="#999999"><div align="center">
      <?php  
//Get the key field to be amended 
$customerId = $_SESSION['customerId'] ;   
 // Initialise a string to report back any errors 
$errorString = ""; 
//See if any info was submitted 
$name = $_GET['name'];  
//Clean data - trim space 
$name = trim ( $name);  
$password = $_GET['password'];  
//Clean data - trim space 
$password= trim ( $password); 
//Check its ok - if not then add an error message to the error string 
if (empty($name))  
    $errorString = $errorString."<br>Please supply a name.";        
$email = $_GET['email'];    
//Clean data - trim space 
$email = trim ( $email); 
//Check its ok - if not then add an error message to the error string 
if (empty($email))  
      $errorString = $errorString."<br>Please supply an email name.";   
 // check if there were any errors 
if (!empty($errorString)) 
{ 
 print "<b>There were errors</b.<br>".$errorString; 
 exit; 
} 
else  //No errors. Insert the data 
{ 
  include "connection.php"; 
 //Create the update query 
  $query = "UPDATE customer SET name = '$name', email = '$email', password = '$password' WHERE customerId = '$customerId'"; 
// execute query  
 $result = mysql_query($query) ; 
 //if there was a problem - get the error message and go back  
 if (!$result) 
  { 
     echo "There were errors :<br>". mysql_error(); 
  }  
  else //OK, then the insertion was successful 
  { 
    echo "Record  with customerId = $customerId was amended OK"; 
    //Create a new query to display the new row in a table 
    $query = "Select * from customer where customerId = '$customerId'"; 
    $result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());  
    echo "<table cellpadding=10 border=1>";   
    while($row = mysql_fetch_array($result)) {  
        echo "<tr>";  
        echo "<td>".$row['customerId']."</td>";  
        echo "<td>".$row['name']."</td>";  
        echo "<td>".$row['email']."</td>"; 
		echo "<td>".$row['password']."</td>";     
        echo "</tr>";  
    } //End while 
    echo "</table>";  
   } //End Else insertion successful 
}//End else successful Amendment      

?>
      <p></p>
      <p><a href="index.php">Back Home</a>      
    </div></td>
    

  </tr>

  <tr>

    <td colspan="4">&nbsp;</td>

    </tr>

  <tr>

    <td width="499">

    </form>
    </table>



<?php include 'includes/footer.php'; ?>