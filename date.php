<?php

 



print "<br/>";

 



$hour = date("H");

if ($hour >= 12) {

print "Good Afternoon";

}

else { 

print "Good Morning";

}

print "<br/>";

print date("l jS \of F Y");

print "<br/>";

print date ("H:i:s A");



?>

