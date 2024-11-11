function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
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
window.addEventListener('resize', function() {
    var x = document.getElementById("myTopnav");
    if (window.innerWidth > 600) {
        x.className = "topnav"; 
    }
});

/*Load different content */
// Function to load content dynamically
function loadContent(url) {
    // Push a new state to the browser's history stack
    history.pushState({ path: url }, '', url);

    // Dynamically load content (e.g., using fetch)
    fetch(url)
        .then(response => response.text())
        .then(data => {
            document.getElementById("content").innerHTML = data;
        })
        .catch(error => console.error('Error loading content:', error));
}

// Handle the browser's back and forward buttons
window.onpopstate = function(event) {
    if (event.state) {
        loadContent(event.state.path);  // Reload the content when navigating back or forward
    }
};

