<?php include 'includes/header.php'; ?> 

<div align="center">
    <table width="418" height="75"  border="0" cellpadding="1" cellspacing="0">

<div style="height:220px;width:920px;border:1px solid #ccc;font:10px/26px Georgia, Garamond, Serif;overflow:auto;">

<?php

$html = "";

$url = "http://www.ikea.com/gb/en/rss/latest_news";

$xml = simplexml_load_file($url);

for($i = 0; $i < 7; $i++){

    

    $title = $xml->channel->item[$i]->title;

	$link = $xml->channel->item[$i]->link;

	$description = $xml->channel->item[$i]->description;

	$pubDate = $xml->channel->item[$i]->pubDate;

	

	$html .= "<a href='$link'><h3>$title</h3></a>";

	$html .= "$description";

	$html .= "<br />$pubDate<hr />";

}

echo $html;

?>

</div>
</div>
</div>
</table>
<?php include 'includes/footer.php'; ?>