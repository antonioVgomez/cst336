<?php
	$pic = array('airmax.jpg','hyperdunk.jpg','jordan1.jpg','vapormax.jpg');
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
                         <img src=\"$pic[$i]\" width=\"960\" height=\"600\">
                       </li>";
 
	?>	
 </ul>
 
 </body>
</html>
