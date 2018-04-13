var div = '<div class="square"></div>';
var rowOpen = '<div class="row">';
var rowClose = '</div>';
var chessboardSize = 10;

for (j=1; j<=chessboardSize; j++) {
	document.write(rowOpen);
  for (i=1; i<=chessboardSize; i++) {

   document.write(div);
  };
        document.write(rowClose);
};

/*
document.getElementById("demo").innerHTML = text;
*/

var arr = ["#fcfaef", "#fffa05", "#f7c3cd", "#f4d442", "#e6b0f2", "#e5c76e"]
/*var arr = { "white" : "#fcfaef", "yellow" : "#fffa05", "pink": "#f7c3cd", "orange" : "#f4d442", "purple" : "#e6b0f2", "brown": "#e5c76e", }; 
*/



function getColor() {
  var number = Math.floor((Math.random() * 6) + 1);
  var square = document.getElementById('square');
  square.style.background = ('color' + number);
console.log(number);
console.log(square);
console.log(square.style.background);
}


function changeColor(newColor) {
  var square = document.getElementById('square');
  square.style.background = newColor;
console.log(square);
console.log(square.style.background);
}


