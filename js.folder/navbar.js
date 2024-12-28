function myFunction() {
  var x = document.getElementById("myTopnav");
  var body = document.body;
  var dropdownContent = document.querySelector(".dropdown-content");

  if (x.className === "topnav") {
    x.className += " responsive";
    body.classList.add("no-scroll");
  } else {
    x.className = "topnav";
    body.classList.remove("no-scroll");
    dropdownContent.style.display="none";
  }
}

// Collapse menu
function collapseMenu() {
  var x = document.getElementById("myTopnav");
  var dropdownContent = document.querySelector(".dropdown-content");

  if (x.className.includes("responsive")) {
    x.className = "topnav";
    dropdownContent.style.display="none";
  }
}

// Collapse the menu if screen width is greater than 600px
window.addEventListener("resize", function () {
  var x = document.getElementById("myTopnav");
  var dropdownContent = document.querySelector(".dropdown-content");

  if (window.innerWidth > 600) {
    x.className = "topnav";
    dropdownContent.style.display = "none";
  }else {
    if (x.className.includes("responsive")) {
      dropdownContent.style.display = "none"; // Keep it closed on smaller screens
    }
  }
});

function toggleDropdown() {
  var dropdownContent = document.querySelector(".dropdown-content");
  if (dropdownContent) {
      dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
  }
}

var dropdown = document.querySelector(".dropdown");
dropdown.addEventListener("mouseenter", function() {
  if (window.innerWidth > 650) {
    var dropdownContent = document.querySelector(".dropdown-content");
    dropdownContent.style.display = "block";
    dropdownContent.focus();
  }
});

dropdown.addEventListener("mouseleave", function() {
  if (window.innerWidth > 650) {
    var dropdownContent = document.querySelector(".dropdown-content");
    dropdownContent.style.display = "none";
  }
});

document.addEventListener("click", function (event) {
  var dropdown = document.querySelector(".dropdown");
  var dropdownContent = document.querySelector(".dropdown-content");

  // Check if the click target is outside the dropdown
  if (
    dropdownContent &&
    !dropdown.contains(event.target) &&
    dropdownContent.style.display === "block"
  ) {
    dropdownContent.style.display = "none";
  }
});


document.addEventListener("click", function (event) {
  var menu = document.getElementById("myTopnav");
  var isClickInsideMenu = menu.contains(event.target); // Check if the click is inside the menu

  // If the click is outside the menu and the menu is open, close the menu
  if (!isClickInsideMenu && menu.className.includes("responsive")) {
    menu.className = "topnav"; // Reset to original menu state
    var body = document.body;
    body.classList.remove("no-scroll"); // Enable scrolling
  }
});

// Prevent closing the menu when clicking on the toggle button
var menuToggle = document.querySelector(".menu-toggle");
menuToggle.addEventListener("click", function (event) {
  event.stopPropagation(); // Prevent event from propagating to the document
});
