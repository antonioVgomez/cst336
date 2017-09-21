<html>
 <head>
  <title>Random Images</title
  <link rel ="stylesheet" type="text/css" href="style.css"/>
 </head>
 <body>

   <h1>OFF-WHITE NIKES</h1>
   
  
	<?php
		$shoes = array("airmax","hyperdunk","vapormax","jordan1"
	         );
	 shuffle($shoes);
	 foreach ($shoes as $shoes){
	  echo "<img src ='images/$shoes.jpg'><br>";
	 }
	?>	
 
 </body>
</html>