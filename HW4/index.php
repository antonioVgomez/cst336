

<!DOCTYPE html>

<html>
<head>
 
  <meta charset="utf-8">
  <title>Sneaker News</title>
  
  <link rel ="stylesheet" href="/cst336-github/HW4/style.css">
  <link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
  
  
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 <!--This the first form-->
 <script type="text/javascript">
     function write_name(){
         var welcome_pi = document.getElementById('Welcome');
         var name = document.getElementById('name');
         
         welcome_pi.innerHTML = "WELCOME TO MY FORMS SITE " + name.value;
     }
 </script>
 
<body>
    <h1 class ="top-header">LEARN ABOUT THE LATEST SNEAKERS</h1>
    
    <p id="Welcome"></p>
    <form id="greet"> 1.What Is Your Name?: <input type ="text" id="name"/><br/>
        <input id="greet" type ="button" value="done" onclick="write_name();"/>
    </form></br>
    
<!--end of first form-->


    <!--second form a button-->
    
    <button id="butt" type="button" onclick="alert('SELECT A SNEAKER ON THE LIST')">2.CLICK ME!</button><br/>
    
    <form name="Sneakers">
        <select name="Sneakers" id="sneakerMenu">
            <option value = "nothing" selected ="selected">3.Select a Kick</option>
            <option value = "https://sneakernews.com/tag/off-white-air-jordan-1/">Jordan 1(Off White)</option>
            <option value = "https://sneakernews.com/tag/adidas-yeezy/">Yeezys</option>
        
        </select>
    </form>
    
    <script type="text/javascript">
        var urlMenu = document.getElementById('sneakerMenu');
        urlMenu.onchange = function(){
            var userOption = this.options[this.selectedIndex];
            if(userOption.value !="nothing"){
                window.open(userOption.value, "Sneaker News Page", "");
            }
        }
        
    </script>
    
    
    
   
    
     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>