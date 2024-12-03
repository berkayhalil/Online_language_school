// Select the heading inside the form
const heading = document.querySelector("#form-container #contact_us");

if (heading) {
  // Change only the "БЕЗПЛАТНА" part of the text
  const newText = heading.innerText.replace(
    "ЗАЯВИ БЕЗПЛАТНА КОНСУЛТАЦИЯ",
    "ИЗПРАТИ СЪОБЩЕНИЕ"
  );
  heading.innerText = newText;
}

// Check if the current page is contacts.php
if (window.location.pathname.endsWith("contacts.php")) {
  const contactDiv = document.getElementById("contact_span_div");
  if (contactDiv) {
    contactDiv.remove(); // Remove the entire div
  }
}
