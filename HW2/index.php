<?php
	$pic = array('am.png','bs.png','Js.png','vm.png');
	shuffle($pic);
?>
<html>
 <head>
  <title>Random Images</title>
 </head>
 <body>
  <ul>
	<?php
	   for( $i = 0; $i < 4; $i++)
	      echo "<li style=\"display: inline;\">
                         <img src=\"$pic[$i]\" width=\"500\" height=\"500\">
                       </li>";
 
	?>	
 </ul>
 
 </body>
</html>