function myFunction() {
  var x = document.getElementById("myTopnav");
  var body = document.body;
  if (x.className === "topnav") {
    x.className += " responsive";
    body.classList.add("no-scroll");
  } else {
    x.className = "topnav";
    body.classList.remove("no-scroll");
  }
}

// Collapse menu
function collapseMenu() {
  var x = document.getElementById("myTopnav");
  if (x.className.includes("responsive")) {
    x.className = "topnav";
  }
}

// Collapse the menu if screen width is greater than 600px
window.addEventListener("resize", function () {
  var x = document.getElementById("myTopnav");
  if (window.innerWidth > 600) {
    x.className = "topnav";
  }
});
