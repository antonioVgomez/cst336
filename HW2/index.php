<html>
 <head>
  <title>Random Images</title
  <link rel ="stylesheet" type="text/css" href="style.css"/>
 </head>
 <body>
  
<div id = "kicks">  
   
   <h1>OFF-WHITE NIKES</h1>
	<?php
		$shoes = array(
	         '< img src= "images/airmax.jpg" title="kicks 1"/>',
	         '< img src= "images/hyperdunk.jpg" title="kicks 1"/>',
	         '< img src= "images/jordan1.jpg" title="kicks 1"/>',
	         '< img src= "images/vapormax.jpg" title="kicks 1"/>'
	         );
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