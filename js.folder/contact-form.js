const header = document.getElementById("contact_us"); // Get the header element
const originalHeaderText = header.innerHTML; // Store the original header text
let formOpenedWithCourseButton = false; // Flag to track if form opened with the second button

// Open the contact form (triggered by either of the buttons)
function openContactForm() {
    // Show the form
    document.getElementById("myOverlay").style.display = "block";
    document.body.style.overflow = "hidden";
    // Only add the select if the form is opened with the second button
    if (formOpenedWithCourseButton) {
        addSelectToContactForm(); // Add the select element if opened with the second button
    }
}

// Close the contact form overlay and remove the select element if it exists
function closeContactForm() {
    document.getElementById("myOverlay").style.display = "none";
    document.body.style.overflow = "auto";
    // Remove the select element if it exists (for the next time the form opens)
    const selectElement = document.getElementById('course-select');
    if (selectElement) {
        selectElement.remove();
    }

    // Revert the header text to its original value when the form is closed
    header.innerHTML = originalHeaderText;
    // Reset the flag when the form is closed
    formOpenedWithCourseButton = false;
    form.style.height = "510px";
}

// Enable the submit button (after reCAPTCHA is checked)
function enableSubmitBtn() {
    document.getElementById("contact_btn").disabled = false;
}

// Function to dynamically add the select element for the "Курс" button
function addSelectToContactForm() {
    const form = document.getElementById('form');

    // Check if the select already exists to prevent duplicates
    if (!document.getElementById('course-select')) {
        // Create the select element
        const select = document.createElement('select');
        select.id = 'course-select';
        select.name = 'course';
        select.className = 'contact_inputes';
        select.required = true;

        // Add options to the select element
        const option1 = document.createElement('option');
        option1.value = '';
        option1.text = 'Изберете курс*';
        option1.disabled = true;
        option1.selected = true;

        const option2 = document.createElement('option');
        option2.value = 'Английски-A1/1';
        option2.text = 'Английски-A1/1';

        const option3 = document.createElement('option');
        option3.value = 'Английски-A1/2';
        option3.text = 'Английски-A1/2';

        const option4 = document.createElement('option');
        option4.value = 'Английски-B1/1';
        option4.text = 'Английски-B1/1';

        const option5 = document.createElement('option');
        option5.value = 'Английски-B1/2';
        option5.text = 'Английски-B1/2';

        const option6 = document.createElement('option');
        option6.value = 'Английски-C1/1';
        option6.text = 'Английски-C1/1';

        const option7 = document.createElement('option');
        option7.value = 'Английски-C1/2';
        option7.text = 'Английски-C1/2';

        // Append options to select element
        select.appendChild(option1);
        select.appendChild(option2);
        select.appendChild(option3);
        select.appendChild(option4);
        select.appendChild(option5);
        select.appendChild(option6);
        select.appendChild(option7);

        // Append the select to the form before the textarea
        form.insertBefore(select, form.querySelector('textarea'));
    }

    // Change the header text to "ЗАЯВИ КУРС" when the second button is clicked
    header.innerHTML = "ЗАЯВИ КУРС";
    form.style.height = "580px";
    // Set the flag to true, indicating the form is opened with the second button
    formOpenedWithCourseButton = true;
}
