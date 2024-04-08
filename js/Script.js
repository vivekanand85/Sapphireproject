var verticalText = "Unveiling Beauty at Sapphire Clinic";

var letterContainer=document.getElementById("letter-container");

function displayVerticalText(){
   for(var i =0;i<verticalText.length;i++){
    letterContainer.innerHTML+= verticalText[i];
   }
}

displayVerticalText();




AOS.init({
     delay: 200, // values from 0 to 3000, with step 50ms
     duration:1000,
     easeing:'ease-in-out',
     mirror:true

   });
