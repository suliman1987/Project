<?
include("includes/db.php");

?>
<?php include 'includes/header.php'; ?>
<td colspan="4" bgcolor="#999999"><div align="center">

 <div id="content">
       <div class="box_middle">
<div class="boxtop"><div></div></div>
 <div class="boxcontent" style="min-height: 400px;">
 <h1>Products Mannager</h1>
<div align="center">
          <? include('pmfunctions.php'); ?>
        
           <?
$result=mysql_query("select * from products");
while($row=mysql_fetch_array($result))
{
?>
                     <form action="productmanager.php" method="post" enctype="multipart/form-data">
                       <table border="0" cellpadding="2px" width="450px">
                       <tr>
                           <td><h3>Product ID: <?=$row['serial']?></h3><input type="hidden" value="<?=$row['serial']?>" name="serial" /></td>
                         </tr>
                         
                           
                           <tr>
                           <td>Current Image URL: <input type="text" style="height:20px; width:200px;" value="<?=$row['images']?>" name="productimage" /><br /><br /><img src="<?=$row['images']?>"></td>
                           </tr>
                           
                           
                           <tr>
                           <td>Name: <input type="text" style="height:20px; width:200px;" value="<?=$row['name']?>" name="productname" />
                           </td>
                           </tr>
                           <tr>
                           <td>Description: 
                             <textarea style="height:50px; width:150px; overflow:visible;" name="productdescription"><?=$row['description']?></textarea>
                            </td>
                            </tr>
                            <tr>
                            <td>
                             Price:<big style="color:green"> <strong>&pound;</strong></big>
                             <input type="number" value="<?=$row['price']?>" style="height:20px; width:70px;" name="productprice" />
                               
                             </td>
                         </tr>
                         <tr>
                           <td colspan="2"><hr size="1"></td>
                         </tr>
                         <tr>
                         <td><input type="submit" name="update" value="Update Product" /> -or- <input type="submit" name="delete" value="Delete Product" /> -or- <input type="submit" name="addnew" value="Add New Product" />
                         
                         </td>
                         </tr>
                         <tr>
                           <td><hr size="1"></td>
                         </tr>
                         </table>
                       </form>
<? } ?>
           
        
         
       </div>
       <p align="center"><a href="logout.php">(Admin Logout) </a></p>
         


   </div>
     </div>
<div class="boxbottom"><div></div></div>
</div>
        </div>  </table>        
        
<?php include 'includes/footer.php'; ?>