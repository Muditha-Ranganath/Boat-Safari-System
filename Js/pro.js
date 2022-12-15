//profile setting 
var modal = document.getElementById('id02');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

//upload images
const actualBtn = document.getElementById('actual-btn');

const fileChosen = document.getElementById('file-chosen');

actualBtn.addEventListener('change', function(){
  fileChosen.textContent = this.files[0].name
}

//delet account
var modal2 = document.getElementById('id03');
window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}
