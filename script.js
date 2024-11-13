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
/*
function loadContent(url) {
    // Check if the new URL is the same as the current one to avoid duplicate entries
    if (window.location.pathname !== url) {
        // Push a new state to the browser's history stack
        history.pushState({ path: url }, '', url);
    }
    // Dynamically load content (using fetch)
    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(data => {
            document.getElementById("content").innerHTML = data;  // Update the content section
        })
        .catch(error => console.error('Error loading content:', error));
}*/


/*
// Handle back and forward navigation
window.onpopstate = function(event) {
    if (event.state && event.state.path) {
        // Load the content corresponding to the path in history
        loadContent(event.state.path);
    } else {
        // If no state is found, load the default content (index.php)
        loadContent('index.php');
    }
};
*/


