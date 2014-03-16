<?php include 'includes/header.php'; ?> 

<div align="center">
    <table width="418" height="75"  border="0" cellpadding="1" cellspacing="0">

<?php

// set server access variables 

include ("connection.php");




// create query 

$query = "SELECT * FROM customer"; 




// execute query 

$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error()); 




// see if any rows were returned 

if (mysql_num_rows($result) > 0) { 

    // yes 

   //Top of xml file

    $_xml = '<?xml version="1.0"?>'; 

    $_xml .="<customer>"; 

    




    while($row = mysql_fetch_array($result)) { 

        $_xml .="<customer>";

    	$_xml .="<br/>";

        $_xml .="<name>".$row['name']."</name>"; 

		$_xml .="<br/>";

        $_xml .="<email>".$row['email']."</email>";

		$_xml .="<br/>";

        $_xml .="</customer>"; 

		$_xml .="<br/>";




    } 

  

    $_xml .="</customer>"; 

    //Output the xml string

     print $_xml; 

     

    /* Could also write to a file at this point

        

            file_put_contents("somedir/some.xml", $_xml);

        

       Need to give 'somedir' write permissions

    

    */

    

} 

else {  // no 

    // print status message 

    echo "No rows found!"; 

} 




?>
<div id="myDiv"><h2>Let AJAX change this text</h2></div>
<button type="button" onclick="loadXMLDoc()">Change Content</button>
</div>
</table>
</div>





<?php include 'includes/footer.php'; ?>