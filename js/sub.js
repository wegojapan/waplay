const conVisual = document.querySelector(".con_visual");
const conSub = document.querySelector(".con_sub")
const pnav = document.querySelector(".pnav");


function fixNavWidth() {
  pnavWidth = conSub.clientWidth;
  pnav.style.width = pnavWidth + "px";
}
window.addEventListener("resize", fixNavWidth);
fixNavWidth();



//TAB 
function openCity(evt, tabName) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "flex";
    evt.currentTarget.className += " active";
  }