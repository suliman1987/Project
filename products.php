<?php include 'includes/header.php'; ?> 
<?php

	include("includes/db.php");

	include("includes/functions.php");

	

	if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){

		$pid=$_REQUEST['productid'];

		addtocart($pid,1);

		header("location:shoppingcart.php");

		exit();

	}

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script language="javascript">



	function addtocart(pid){



		document.form1.productid.value=pid;



		document.form1.command.value='add';



		document.form1.submit();



	}



</script>

<style type="text/css">

body {

	background-image: url(images/background.jpg);

}

</style>

<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>

<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />

<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />

<style type="text/css">

#mbody {	color: #000;

}

</style>
 <div align="center">

              <table width="100" border="0" bgcolor="#b8b8b8">

                <tr>

                  <td colspan="3">&nbsp;</td>

                  </tr>

                <tr>

                  

                  <td width="550"></td>

                  <td width="125"></td>

                  </tr>

                <tr>

                  <td width="130" height="257"></td>

                  <td width="550"><div align="right">
<form name="form1">

                      <div align="left">

                        <p>&nbsp;</p>

                        <p>

                          <input type="hidden" name="productid" />

                          <input type="hidden" name="command" />

                          </p>

                        </div>

                      </form>

                    <h1 align="left">Arabic decorative</h1>

                    <div align="left">

                      <table border="0" cellpadding="2px" width="450px">

                        <?php



			$result=mysql_query("select * from products");



			while($row=mysql_fetch_array($result)){



		?>

                        <tr>

                          <td><img src="<?=$row['images']?>" /></td>

                          <td><b>

                            <?=$row['name']?>

                            </b><br />

                            <?=$row['description']?>

                            <br />

                            Price:<big style="color:green"> $

                              <?=$row['price']?>

                              </big><br />

                            <br />

                            <input type="button" value="Add to Cart" onClick="addtocart(<?=$row['serial']?>)" /></td>

                          </tr>

                        <tr>

                          <td colspan="2"><hr size="1" /></td>

                          <? } ?>
  </tr>

                        </table>

                      </div>
                      </tr>

                </table>

              </div></td>




<?php include 'includes/footer.php'; ?>