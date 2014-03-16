<?php
//Start - so we can use session variables
session_start();
// Check if we have already created a authenticated session
if (isset($_SESSION["authenticatedUser"]))
{
 $_SESSION["message"] = "You are already logged in as ". $_SESSION['authenticatedUser'];
 
}
// No session established, no POST variables
//Display the login page 
?>
<?php include 'includes/header.php'; ?>
<td colspan="4" bgcolor="#999999"><div align="center">
<div id="content">
       <div class="box_middle">
<div class="boxtop"><div></div></div>
 <div class="boxcontent" style="min-height: 400px;">
 <h1>Admin Login</h1>
<div align="center">
 <table width="54%" border="0">
   <tr>
     <th scope="col"><form method="post" action="adminloginAction.php">
         <table width="418" height="75"  border="0" cellpadding="1" cellspacing="0">
           <!--DWLayoutTable-->
           <tr>
             <td width="131"><span class="Maintext">Email</span></td>
             <td width="283"><span class="Maintext">
                 <input type="text" size=40 maxlength=40 name="email" />
               </span></td>
             </tr>
           <tr>
             <td><span class="Maintext">Password:</span></td>
             <td><span class="Maintext">
                 <input type="password" size=40 maxlength=10 name="password" />
               </span></td>
             </tr>
           <tr>
             <td ><!--DWLayoutEmptyCell-->&nbsp;</td>
             <td><p> <span class="Maintext">
                   <input name="submit" type="submit" value="Log in" />
               </span></p></td>
             </tr>
           </table>
         </form>
       <?php  
 //Output the error message - should really put the styling in a stylesheet 
  if (isset($_SESSION['message'])) 
   echo "<h3><font color=red>".$_SESSION['message']."</font></h3>"; 
 ?>
       
     </tr>
   </table>
     </div>
     </div>
<div class="boxbottom"><div></div></div>
</div>
        </div>      
        </th>
        </th>   
        </th></table>
<?php include 'includes/footer.php'; ?>