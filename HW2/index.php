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
<<<<<<< HEAD
                         <img src=\"$pic[$i]\" width=\"940\" height=\"600\">
=======
                         <img src=\"$pic[$i]\" width=\"960\" height=\"600\">
>>>>>>> a51499977dd849c6b4d7d6b15013c06426202384
                       </li>";
 
	?>	
 </ul>
 
 </body>
</html>
