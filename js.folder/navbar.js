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
    dropdownContent.style.display = "none";
  }
}

// Collapse menu
function collapseMenu() {
  var x = document.getElementById("myTopnav");
  var dropdownContent = document.querySelector(".dropdown-content");

  if (x.className.includes("responsive")) {
    x.className = "topnav";
    dropdownContent.style.display = "none";
  }
}

// Collapse the menu if screen width is greater than 600px
window.addEventListener("resize", function () {
  var x = document.getElementById("myTopnav");
  var dropdownContent = document.querySelector(".dropdown-content");

  if (window.innerWidth > 600) {
    x.className = "topnav";
    dropdownContent.style.display = "none";
  } else if (x.className.includes("responsive")) {
    dropdownContent.style.display = "none"; // Keep it closed on smaller screens
  }
});

function toggleDropdown() {
  var dropdownContent = document.querySelector(".dropdown-content");
  if (dropdownContent) {
    dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
  }
}

// Check if dropdown element exists before adding event listeners
var dropdown = document.querySelector(".dropdown");
if (dropdown) {
  dropdown.addEventListener("mouseenter", function () {
    if (window.innerWidth > 650) {
      var dropdownContent = document.querySelector(".dropdown-content");
      dropdownContent.style.display = "block";
      dropdownContent.focus();
    }
  });

  dropdown.addEventListener("mouseleave", function () {
    if (window.innerWidth > 650) {
      var dropdownContent = document.querySelector(".dropdown-content");
      dropdownContent.style.display = "none";
    }
  });
}

// Combined click event listener to handle dropdown and menu
document.addEventListener("click", function (event) {
  var dropdown = document.querySelector(".dropdown");
  var dropdownContent = document.querySelector(".dropdown-content");
  var menu = document.getElementById("myTopnav");
  var menuToggle = document.querySelector(".menu-toggle");

  // Close dropdown if clicking outside
  if (dropdownContent && !dropdown.contains(event.target) && dropdownContent.style.display === "block") {
    dropdownContent.style.display = "none";
  }

  // Close menu if clicking outside
  var isClickInsideMenu = menu.contains(event.target);
  if (!isClickInsideMenu && menu.className.includes("responsive")) {
    menu.className = "topnav"; // Reset to original menu state
    var body = document.body;
    body.classList.remove("no-scroll"); // Enable scrolling
  }

  // Prevent closing the menu when clicking on the toggle button
  if (menuToggle && menuToggle.contains(event.target)) {
    event.stopPropagation(); // Prevent event from propagating to the document
  }
});
