<?

	include("includes/db.php");

	include("includes/functions.php");

	

	if($_REQUEST['command']=='delete' && $_REQUEST['pid']>0){

		remove_product($_REQUEST['pid']);

	}

	else if($_REQUEST['command']=='clear'){

		unset($_SESSION['cart']);

	}

	else if($_REQUEST['command']=='update'){

		$max=count($_SESSION['cart']);

		for($i=0;$i<$max;$i++){

			$pid=$_SESSION['cart'][$i]['productid'];

			$q=intval($_REQUEST['product'.$pid]);

			if($q>0 && $q<=999){

				$_SESSION['cart'][$i]['qty']=$q;

			}

			else{

				$msg='Some proudcts not updated!, quantity must be a number between 1 and 999';

			}

		}

	}



?>


<!DOCTYPE HTML>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Arabic Decorative</title>

<style type="text/css">

body {

	background-color: #323C3F;

}

.text {

	text-align: left;

	font-weight: bold;

	color: #FFF;

}

.text1 {

	color: #FFF;

}

.text1 {

	color: #333;

	font-size: 18px;

}

.text3 {

	color: #FFF;

}

</style>

</head>



<body>

<td width="767">&nbsp;</td>

<div align="center">

  <table width="878" height="508" border="0">

  <tr>

    <td height="140" colspan="6" bgcolor="#EEEEEE"><div align="left">

      <table width="200" border="0">

        <tr>

          <td><img src="images/logo2.png" width="160" height="32" alt="logo"></td>

          </tr>

      </table>

      <div align="center"><a href="index.php">Home</a> | <a href="login.php">Login</a> | <a href="about.php">About</a> | <a href="products.php">Shop</a> | <a href="contact.php">Contact us</a></div></div></td>

  </tr>

  <tr>

    <td height="272" colspan="6"><iframe src="carousel/carousel.html" height="270" width="840" scrolling="No" frameborder="0"></iframe></td>

  </tr>

  <tr>

    <td width="617" bgcolor="#141A1B"><div align="center">

      <table width="376" height="26" border="0">

        <tr>

          <td bgcolor="#425759"><div align="center">

            <table width="54%" border="0">

              <tr>

                <th width="2%" scope="col">&nbsp;</th>

                <th colspan="2" rowspan="4" scope="col"><div align="center">
                  
                  <form name="form1" method="post">
                    <input type="hidden" name="pid" />
                    <input type="hidden" name="command" />
                    <div style="margin:0px auto; width:600px;" >
                      <div style="padding-bottom:10px">
                        <h1 align="center">Your Shopping Cart</h1>
                        <input type="button" value="Continue Shopping" onClick="window.location='products.php'" />
                      </div>
                      <div style="color:#F00">
                        <?=$msg?>
                      </div>
                      <table border="0" cellpadding="5px" cellspacing="1px" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; background-color:#E1E1E1" width="100%">
                        <?

			if(is_array($_SESSION['cart'])){

            	echo '<tr bgcolor="#FFFFFF" style="font-weight:bold"><td>Serial</td><td>Name</td><td>Price</td><td>Qty</td><td>Amount</td><td>Options</td></tr>';

				$max=count($_SESSION['cart']);

				for($i=0;$i<$max;$i++){

					$pid=$_SESSION['cart'][$i]['productid'];

					$q=$_SESSION['cart'][$i]['qty'];

					$pname=get_product_name($pid);

					if($q==0) continue;

			?>
                        <tr bgcolor="#FFFFFF">
                          <td><?=$i+1?></td>
                          <td><?=$pname?></td>
                          <td>$
                            <?=get_price($pid)?></td>
                          <td><input type="text" name="product<?=$pid?>" value="<?=$q?>" maxlength="3" size="2" /></td>
                          <td>$
                            <?=get_price($pid)*$q?></td>
                          <td><a href="javascript:del(<?=$pid?>)">Remove</a></td>
                        </tr>
                        <?					

				}

			?>
                        <tr>
                          <td><b>Order Total: $
                            <?=get_order_total()?>
                          </b></td>
                          <td colspan="5" align="right"><input type="button" value="Clear Cart" onClick="clear_cart()" />
                            <input type="button" value="Update Cart" onClick="update_cart()" />
                            <input type="button" value="Place Order" onClick="window.location='billing.php'" /></td>
                        </tr>
                        <?

            }

			else{

				echo "<tr bgColor='#FFFFFF'><td>There are no items in your shopping cart!</td>";

			}

		?>
                      </table>
                    </div>
                  </form>
                  <h1 align="center">&nbsp;</h1>

                    <table border="0" cellpadding="2px" width="600px">

 
                        
                      </table>

                </div></th>

              </tr>

              <tr>

                <td>&nbsp;</td>

              </tr>

              <tr>

                <td>&nbsp;</td>

              </tr>

              <tr>

                <td height="137">&nbsp;</td>

              </tr>

            </table>

          </div></td>

          </tr>

        </table>

    

  <tr>

    <td colspan="6"><span class="text3">if you don't have login name you can join us</span> <a href="reg.php">here</a>      <div align="center"></div></td>

    </tr>

  <tr>

    <td colspan="2"><div align="left">

      <embed src="http://cdn.listenarabic.com/swf/player.swf" width="250" type="application/x-shockwave-flash" height="25" flashvars="backcolor=0x2694E8&amp;frontcolor=0xFF9900&amp;duration=10800&amp;file=http://listenarabic.1live.me:5210/;stream.mp3&amp;autostart=true" wmode="transparent" allowscriptaccess="always" allowfullscreen="true" quality="high" bgcolor="#ffffff" play="false"/>    

    </div></td>

    <td colspan="4">&nbsp;</td>

    </tr>

  <tr>

    <td colspan="2"><div id="google_translate_element">

      <form action="http://www.google.com/cse" id="cse-search-box">

        <div>

          <div align="left">

            <input type="hidden" name="cx" value="partner-pub-3744574135711352:1463638204" />

            <input type="hidden" name="ie" value="UTF-8" />

            <input type="text" name="q" size="16" />

            <input type="submit" name="sa" value="Search" />

          </div>

        </div>

      </form>

    </div></td>

    <td width="54"></td>

    <td width="54">&nbsp;</td>

    <td width="3">&nbsp;</td>

    <td width="134">&nbsp;</td>

  </tr>

  <tr>

    <td colspan="6" bgcolor="#EEEEEE"><p align="center" class="text1">Designed by Suliman @ 2012, All rights reserved  </p>

<p align="left" class="text1"><a href="index.php">home</a> | <a href="http://www.bbc.co.uk/" target="_new">news</a> | <a href="http://www.bbc.co.uk/sport/0/" target="_new">sport</a> | <a href="http://decoration.zahras.com/" target="_new">more decorate</a></p></td>

    </tr>

  </table>

</div>

<p align="center">&nbsp;</p>

</body>

</html>