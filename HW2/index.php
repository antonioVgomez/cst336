<html>
 <head>
  <title>Random Images</title>
  <style>
        @import url("css/styles.css");
   </style>
 </head>
 <body>
<div class = "ow">
   <h1>OFF-WHITE NIKES</h1>
</div>   
  
	<?php
		$shoes = array("airmax","hyperdunk","vapormax","jordan1");
	 shuffle($shoes);
	 foreach ($shoes as $shoes){
	  echo "<img src ='images/$shoes.jpg'><br>";
	 }
	?>	
 
 </body>
</html>