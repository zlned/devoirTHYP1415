		
<?php
echo '<link rel="stylesheet" href="galerie.css" type="text/css">';
$xml = simplexml_load_file('http://picasaweb.google.com/data/feed/base/user/107401320610499259896/albumid/6065229773950541889?alt=rss&kind=photo&authkey=Gv1sRgCNak7e60l-7VlgE&hl=fr');


echo '<ul id="photo-wall">';
foreach ($xml->channel->item as $tof) 
{
		echo "<tr>";
		echo "<td>";

		
	echo "<li><img src='".$tof->enclosure["url"]."' /></sli>";

	
	echo "</td>";
	echo "<td>";
	
		echo $tof->title;
		echo "</td>";
		echo "</tr>";
}
echo '</ul>';	
?>


