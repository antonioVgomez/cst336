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
	 // AS LONG AS THE VARIABLES ARE THE SAME DATA TYPE THIS FOREACH HELPS ITTEREATE THRU THE IMAGES LIKE A FOR LOOP DOES
	 foreach ($shoes as $shoes){
	  echo "<img src ='images/$shoes.jpg'><br>";
	 }
	?>	
 
 </body>
</html>