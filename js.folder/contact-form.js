const header = document.getElementById("contact_us"); 
const originalHeaderText = header.innerHTML;
let formOpenedWithCourseButton = false; 


function openContactForm() {
    const form = document.getElementById('form');
    
    document.getElementById("myOverlay").style.display = "block";
    document.body.style.overflow = "hidden";

    setFormHeight(); // Set the initial height

    if (formOpenedWithCourseButton) {
        addSelectToContactForm();
    }

    // Listen for window resize and update form height dynamically
    window.addEventListener("resize", setFormHeight);
}

function setFormHeight() {
    const form = document.getElementById('form');
    if (!form) return;

    let formHeight;

    if (formOpenedWithCourseButton) {
        // If opened with the first button
        if (window.innerWidth <= 600) {
            formHeight = "720px"; // Smaller screens
        } else {
            formHeight = "650px"; // Larger screens
        }
    } else {
        // If opened with the second button (Курс)
        if (window.innerWidth <= 600) {
            formHeight = "620px"; // Adjust as needed for smaller screens
        } else {
            formHeight = "590px"; // Adjust as needed for larger screens
        }
    }

    form.style.height = formHeight;
}

// Close the contact form overlay and remove the select element if it exists
function closeContactForm() {
     
    document.getElementById("myOverlay").style.display = "none";
    document.body.style.overflow = "auto";
    // Remove the select element if it exists (for the next time the form opens)
    const selectElement = document.getElementById('level-select');
    const radioBtnElement = document.getElementById('course-type-group');
    if (selectElement) {
        selectElement.remove();
    }
    if(radioBtnElement){
        radioBtnElement.remove();
    }
    

    // Revert the header text to its original value when the form is closed
    header.innerHTML = originalHeaderText;
    // Reset the flag when the form is closed
    formOpenedWithCourseButton = false;

    window.removeEventListener("resize", setFormHeight);
   
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

    if (!document.getElementById('course-type-group')) {
        const radioDiv = document.createElement('div');
        radioDiv.id = 'course-type-group';
        radioDiv.style.marginTop = "15px";

        const radioOptions = [
            { id: 'group', value: 'Групово', label: 'Групово' },
            { id: 'individual', value: 'Индивидуално', label: 'Индивидуално' }
        ];

        radioOptions.forEach(option => {
            const radioContainer = document.createElement('div');
            radioContainer.style.display = "flex";
            radioContainer.style.alignItems = "center";
            radioContainer.style.gap = "3px";

            const radio = document.createElement('input');
            radio.type = 'radio';
            radio.id = option.id;
            radio.name = 'course-type';
            radio.value = option.value;

            const label = document.createElement('label');
            label.htmlFor = option.id;
            label.textContent = option.label;

            if (option.id === 'group') {
                radio.checked = true; // Ensure only "Групово" is checked by default
            }

            radioContainer.appendChild(radio);
            radioContainer.appendChild(label);
            radioDiv.appendChild(radioContainer);
        });

        const radioFormDiv = document.getElementById('form-radio-btn');
        if (radioFormDiv) {
            radioFormDiv.appendChild(radioDiv);
        }
    }

    // Change the header text and set form height
    header.innerHTML = "ЗАЯВИ КУРС";
    formOpenedWithCourseButton = true;
}
}

document.addEventListener("DOMContentLoaded", function() {
    if (window.location.pathname.includes("english-courses.php")) {
        formOpenedWithCourseButton = true; // Set flag to true
        addSelectToContactForm(); // Add the course dropdown automatically
    }
});
