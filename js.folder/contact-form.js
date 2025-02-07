const header = document.getElementById("contact_us"); 
const originalHeaderText = header.innerHTML;
let formOpenedWithCourseButton = false; 
function openContactForm() {
    const form = document.getElementById('form');
    
    document.getElementById("myOverlay").style.display = "block";
    document.body.style.overflow = "hidden";

    form.style.height = "610px";

    if (formOpenedWithCourseButton) {
        addSelectToContactForm(); // Add the select element if opened with the second button
    }
}

// Close the contact form overlay and remove the select element if it exists
function closeContactForm() {
     
    document.getElementById("myOverlay").style.display = "none";
    document.body.style.overflow = "auto";
    // Remove the select element if it exists (for the next time the form opens)
    const selectElement = document.getElementById('level-select');
    if (selectElement) {
        selectElement.remove();
    }

    // Revert the header text to its original value when the form is closed
    header.innerHTML = originalHeaderText;
    // Reset the flag when the form is closed
    formOpenedWithCourseButton = false;
   
}

// Enable the submit button (after reCAPTCHA is checked)
function enableSubmitBtn() {
    document.getElementById("contact_btn").disabled = false;
}

// Function to dynamically add the select element for the "Курс" button
function addSelectToContactForm() {
    const form = document.getElementById('form');

    // Check if the select already exists to prevent duplicates
    if (!document.getElementById('level-select')) {
        // Create the select element
        const select = document.createElement('select');
        select.id = 'level-select';
        select.name = 'course-level';
        select.className = 'contact_inputes';
        select.required = false;
    
        // Define an array of option data
        const options = [
            { value: '', text: 'Изберете ниво', disabled: true, selected: true },
            { value: 'A1', text: 'A1' },
            { value: 'A2', text: 'A2' },
            { value: 'B1', text: 'B1' },
            { value: 'B2', text: 'B2' },
            { value: 'C1', text: 'C1' },
            
        ];
    
        // Add options to the select element using a loop
        options.forEach(optionData => {
            const option = document.createElement('option');
            option.value = optionData.value;
            option.text = optionData.text;
            option.disabled = optionData.disabled || false;
            option.selected = optionData.selected || false;
            select.appendChild(option);
        });
    
        // Append the select to the form before the textarea
        const selectDiv = document.getElementById('form-select-el-div');
    if (selectDiv) {
        selectDiv.appendChild(select);
    }
    }
    

    // Change the header text to "ЗАЯВИ КУРС" when the second button is clicked
    header.innerHTML = "ЗАЯВИ КУРС";
    form.style.height = "590px";
    // Set the flag to true, indicating the form is opened with the second button
    formOpenedWithCourseButton = true;
}

document.addEventListener("DOMContentLoaded", function() {
    if (window.location.pathname.includes("english-courses.php")) {
        formOpenedWithCourseButton = true; // Set flag to true
        addSelectToContactForm(); // Add the course dropdown automatically
    }
});
