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
<td colspan="4" bgcolor="#999999"><div align="center">
      <p>
      <p>
 <?php  
include "connection.php"; 
// query to get records  
$id = $_GET['customerId'] ;  
// create query to delete record  
$query = "SELECT * FROM customer WHERE customerId = '$id' ";  
//Run the query 
$result = mysql_query($query); 
//see if any rows were returned  
if (mysql_num_rows($result) > 0) {  // yes - Display Form 
  $row = mysql_fetch_array($result); //Fetch the row 
  //Display the form with original values  
?>
      </p>
      <p></p>
      <p>
        <?php          
 } //End if rows returned 
   //No rows returned 
   else  print "No records were found"; 
?>
      </p>
      <p></p>
      <div align="center">
        <form action = 'amendMyDetailsAction.php' method="GET">
          <p>ID:
            <input  readonly="yes" name="id" type="text" value=<?php print $row["customerId"] ?> size="3" />
            This has been made 'readonly' as cannot amend key field </p>
          <p>Name:
            <input type="text" name="name" value=<?php print $row["name"] ?> />
          </p>
          <p>Email:
            <input type="text" name="email" value=<?php print $row["email"] ?> />
          </p>
          <p>Password:
            <input type="text" name="password" value=<?php print $row["password"] ?> />
          </p>
          <p>
            <input type="submit" value="Update customer" name="Update" />
          </p>
        </form>
      </div>
<p><strong>&nbsp;</strong></p>
</div></td>
</table>


<?php include 'includes/footer.php'; ?>