<? 
if(isset($_POST['update'])) { 
 	 if(isset($_POST['serial'])) { $serial = $_POST['serial']; }
 	 if(isset($_POST['productimage'])) { $productimage = $_POST['productimage']; }
if(isset($_POST['productname'])) { $productname = $_POST['productname']; }
 	 if(isset($_POST['productdescription'])) { $productdescription = $_POST['productdescription']; }
 	 if(isset($_POST['productprice'])) { $productprice = $_POST['productprice']; }
 	
require_once("includes/db.php");
$updateproduct = "update products set images = '$productimage', name = '$productname', description = '$productdescription', price = '$productprice' where serial = '$serial'";
mysql_query($updateproduct) or die(mysql_error()); 
echo "<h4>Product Updated</h4>"; 
}
 
 if(isset($_POST['delete'])) { 
 	if(isset($_POST['serial'])) { $serial = $_POST['serial']; } 
 	$deleteproduct = "delete from products where serial = '$serial'"; 
 	
require_once("includes/db.php");
mysql_query($deleteproduct) or die(mysql_error()); 
echo "<h4>Product Deleted</h4>"; 
 }
 
 if(isset($_POST['addnew'])) { 
 	 if(isset($_POST['serial'])) { $serial = $_POST['serial']; }
 	 if(isset($_POST['productimage'])) { $productimage = $_POST['productimage']; }
 	 if(isset($_POST['productname'])) { $productname = $_POST['productname']; }
 	 if(isset($_POST['productdescription'])) { $productdescription = $_POST['productdescription']; }
 	 if(isset($_POST['productprice'])) { $productprice = $_POST['productprice']; }
 	 $insertproduct = "insert into products values (NULL, '$productname', '$productdescription', '$productprice', '$productimage')"; 

require_once("includes/db.php");
mysql_query($insertproduct) or die(mysql_error()); 
echo "<h4>Product Added</h4>"; 
}
?>