//images grid
var elements = document.getElementsByClassName("column14");

var i;

function one() {
    for (i = 0; i < elements.length; i++) {
    elements[i].style.flex = "100%";
  }
}
function two() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.flex = "50%";
  }
}
function four() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.flex = "25%";
  }
}
var header5 = document.getElementById("myHeader5");
var btns = header5.getElementsByClassName("btn1");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
