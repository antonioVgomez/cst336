<html>
 <head>
  <title>Random Images</title>
 </head>
 <body>
  <ul>
	<?php
		$shoes = array(
	         '< img src= "images/airmax.jpg"/>',
	         '< img src= "images/hyperdunk.jpg"/>',
	         '< img src= "images/jordan1.jpg"/>',
	         '< img src= "imagesv/vapormax.jpg"/>');
	 shuffle($shoes);
	
	   for( $i = 0; $i < 4; $i++)
	      echo "<li style=\"display: inline;\">
                         <img src=\"$shoes[$i]\" width=\"940\" height=\"600\">
                       </li>";
 
	?>	
 </ul>
 
 </body>
</html>