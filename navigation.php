<?php
$sites=array(
  "HOME"=>"index.php",
  "BAND"=>"band.php",
 "GALERIE"=>"galerie.php",
  "KONTAKT"=>"kontakt.php",
);


?>

<div class ="navLine">
  <div class="navContent">
	 <ul id="Navigation">
	    <?php
	      $currentpage=basename($_SERVER['PHP_SELF']);
	      while(list($text,$page)=each($sites)){
		$id="";
		if ($page==$currentpage){
		  $id="id=\"aktuell\"";
		}
		
		echo "<li><a $id href=\"$page\">$text</a></li>\n";
	      }
	    ?>
	</ul>
  </div>
</div>
