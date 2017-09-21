<html>
 <head>
  <title>Random Images</title
  <link rel ="stylesheet" type="text/css" href="style.css"/>
 </head>
 <body>
  
<div id = "kicks">  
   
   
	<?php
		$shoes = array(
	         '< img src= "images/airmax.jpg" title="kicks 1"/>',
	         '< img src= "images/hyperdunk.jpg" title="kicks 2"/>',
	         '< img src= "images/jordan1.jpg" title="kicks 3"/>',
	         '< img src= "imagesv/vapormax.jpg" title="kicks 4"/>');
	 shuffle($shoes);
	 $rand = array_slice($shoes,0,4);
	 echo implode ('',$rand);
	
	   // for( $i = 0; $i < 4; $i++)
	   //    echo "<li style=\"display: inline;\">
    //                      <img src=\"$shoes[$i]\" width=\"940\" height=\"600\">
    //                    </li>";
 
	?>	
 
 </div>
 </body>
</html>