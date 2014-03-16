<?php include 'includes/header.php'; ?> 



<th colspan="2" rowspan="4" scope="col"><form method="post" action="loginAction.php">

 <div align="center">
    <table width="418" height="75"  border="0" cellpadding="1" cellspacing="0">
      
      <!--DWLayoutTable-->
      
      <tr>
        <td width="131"><span class="Maintext">Email</span></td>
        
        <td width="283"><span class="Maintext">
          
          <input type="text" size=40 maxlength=40 name="email">
          
          </span></td>
        
        </tr>
      
      <tr>
        
        <td><span class="Maintext">Password:</span></td>
        
        <td><span class="Maintext">
          
          <input type="password" size=40 maxlength=40 name="password">
          
          </span></td>
        
        </tr>
      
      <tr>
        
        <td ><!--DWLayoutEmptyCell-->&nbsp;</td>
        
        <td><p> <span class="Maintext">
          
          <input name="submit" type="submit" value="Log in">
          
          </span></td>
        
        </tr>
      
    </table>
    
  </div>
</form>

         <div align="center">
           <?php  

  //Output the error message - should really put the styling in a stylesheet 

   if (isset($_SESSION['message'])) 

    echo "<h3><font color=red>".$_SESSION['message']."</font></h3>"; 

  ?>
           
           
         </div>
</table>



<?php include 'includes/footer.php'; ?>