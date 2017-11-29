
// Upon page loading page this function which displays random images will run
window.onload = choosePic;



// random image function in javascript
var myPix = new Array("/Assignment4/images/airmax.jpg","/Assignment4/images/hyperdunk.jpg","/Assignment4/images/jordan1.jpg","/Assignment4/images/vapormax.jpg");

function choosePic() {
     var randomNum = Math.floor(Math.random() * myPix.length);
     document.getElementById("myPicture").src = myPix[randomNum];
     
    
}

