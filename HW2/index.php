<html>
 <head>
  <title>Random Images</title>
 </head>
 <body>
  <ul>
	<?php
		$pic = array('airmax.jpg','hyperdunk.jpg','jordan1.jpg','vapormax.jpg');
	 shuffle($pic);
	
	   for( $i = 0; $i < 4; $i++)
	      echo "<li style=\"display: inline;\">
                         <img src=\"$pic[$i]\" width=\"940\" height=\"600\">
                       </li>";
 
	?>	
 </ul>
 
 </body>
</html>