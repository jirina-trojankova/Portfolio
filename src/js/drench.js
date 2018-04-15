/*var div = '<div class="square"></div>';*/
var rowOpen = '<div class="row">';
var rowClose = '</div>';
var chessboardSize = 5;
var idNumber = 0;

function getNumber() {
var number = Math.floor((Math.random() * 2) + 1);
return number;
}


for (j=1; j<=chessboardSize; j++) {
	document.write(rowOpen);
  for (i=1; i<=chessboardSize; i++) {
   idNumber++;
   document.write('<div class=\"square color' +getNumber()+ '\" id=\"' + idNumber +'\"></div>');
  };
        document.write(rowClose);
};

var id = 1;
var square = document.getElementById(id);
square = (square.classList);

var right = document.getElementById(id + 1);
right = (right.classList);


while (JSON.stringify(square) === JSON.stringify(right)) {
  square = document.getElementById(id);
  
  square.className += " drench";

  id=id+1;
  square = document.getElementById(id);
  right = document.getElementById(id + 1);


  square = (square.classList);
  right = (right.classList);
}
right = document.getElementById(id);
right.className += " drench";
console.log(right);





/*
  square = document.getElementById(id + 1);

var idString = id.toString();*/
/*
var bottom = document.getElementById('11');
right.setAttribute('drench');
document.getElementById("demo").innerHTML = text;
*/

/*var arr = ["#fcfaef", "#fffa05", "#f7c3cd", "#f4d442", "#e6b0f2", "#e5c76e"]
var arr = { "white" : "#fcfaef", "yellow" : "#fffa05", "pink": "#f7c3cd", "orange" : "#f4d442", "purple" : "#e6b0f2", "brown": "#e5c76e", }; 
*/

function getColor() {
  var number = Math.floor((Math.random() * 6) + 1);
  var square = document.getElementById('square');
  square.style.background = ('color' + number);
}




function changeColor(newColor) {
  var square = document.getElementById('1');

  if(square.classList.contains('color1')) {
    square.classList.remove('color1');
  }else if(square.classList.contains('color2')) {
    square.classList.remove('color2');
  }else if(square.classList.contains('color3')) {
    square.classList.remove('color3');
  }else if(square.classList.contains('color4')) {
    square.classList.remove('color4');
  }else if(square.classList.contains('color5')) {
    square.classList.remove('color5');
  }else if(square.classList.contains('color6')) {
    square.classList.remove('color6');
  }
  square.classList.add(newColor);
}

 
 
function makeDrench() {
  var square = document.getElementById('1');
 square = (square.classList);

var drench = document.getElementsByClassName('drench')[0];

  var right = document.getElementById('2');
  var bottom = document.getElementById('11');
  right = (right.classList);
}



/*if(square.classList.contains('drench') !=true) {
  square.className += " drench";*/




