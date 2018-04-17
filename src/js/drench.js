//this creates grid
var rowOpen = '<div class="row">';
var rowClose = '</div>';
var chessboardSize = 4;
var idNumber = 0;
for (j = 1; j <= chessboardSize; j++) {
  document.write(rowOpen);
  for (i = 1; i <= chessboardSize; i++) {
    idNumber++;
    document.write('<div class=\"square color' + getNumber() + '\" id=\"' + idNumber + '\"></div>');
  };
  document.write(rowClose);
};

//adds class drench to the first same colors
addDrench();

//randomly chooses number
function getNumber() {
  var number = Math.floor((Math.random() * 3) + 1);
  return number;
}

//adds many classes
DOMTokenList.prototype.addMany = function (classes) {
  var array = classes.split(' ');
  for (var i = 0, length = array.length; i < length; i++) {
    this.add(array[i]);
  }
}

//removes many classes
DOMTokenList.prototype.removeMany = function (classes) {
  var array = classes.split(' ');
  for (var i = 0, length = array.length; i < length; i++) {
    this.remove(array[i]);
  }
}

function addDrench() {
  var id = 1;
  var square = document.getElementById(id);
  square = (square.classList);

  var right = document.getElementById(id + 1);
  right = (right.classList);

  while (JSON.stringify(square) === JSON.stringify(right)) {
    square = document.getElementById(id);
    square.className += " drench";
    id = id + 1;
    square = document.getElementById(id);
    right = document.getElementById(id + 1);

square = (square.classList);
    right = (right.classList);
  }
  right = document.getElementById(id);
  right.className += " drench";
}


/*var arr = ["#fcfaef", "#fffa05", "#f7c3cd", "#f4d442", "#e6b0f2", "#e5c76e"]
var arr = { "white" : "#fcfaef", "yellow" : "#fffa05", "pink": "#f7c3cd", "orange" : "#f4d442", "purple" : "#e6b0f2", "brown": "#e5c76e", }; 
*/

function changeColor(newColor) {
  var square = document.getElementById('1');
  square.classList.removeMany('color1 color2 color3 color4 color5 color6');
  square.classList.add(newColor);
}

//drenches colors together - works when ther's next color different
function makeDrench(y) {
  //catches square and right square
  var id = 1;
  var square = document.getElementById(id);
  square.classList.remove('drench');
  square = (square.classList);
  var right = document.getElementById(id + 1);
  right = (right.classList);

  //while square and right are equal, removes all classes, adds current class through parameter
  //moves to the right, does the same
  while (JSON.stringify(square) === JSON.stringify(right)) {
    square = document.getElementById(id);
    square.classList.removeMany('color1 color2 color3 color4 color5 color6');
    square.className += " drench ";
    square.className += y;

    id = id + 1;

    square = document.getElementById(id);
    right = document.getElementById(id + 1);

    square = (square.classList);
    right = (right.classList);
  }

  //marks the right square
  right = document.getElementById(id);
  right.classList.removeMany('color1 color2 color3 color4 color5 color6');
  right.className += " drench ";
  right.className += y;

  //catches and shows all in class drench
  //var drench = document.getElementsByClassName('drench')[0];
  // console.log(drench);
}

/*if(square.classList.contains('drench') !=true) {
  square.className += " drench";*/