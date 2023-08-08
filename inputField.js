// Function to create a new input field and append it to the container
function createNewInputField() {
    // Get the container div element
    const container = document.getElementById("inputFieldsContainer");

    // Create a new input element with Bootstrap styling
    const newInput = document.createElement("input");
    newInput.type = "text";
    newInput.name = "jobskill";
    newInput.placeholder = "Enter skill";
    newInput.className = "form-control mb-3 me-3";


    // Set a unique id for the new input field (you can use a counter or generate a random id)
    const newInputId = "inputField" + (container.childElementCount + 1);
    newInput.id = newInputId;

    // Append the new input field to the container
    container.appendChild(newInput);

}

// Add event listener to the button to call the createNewInputField function on click
const addInputFieldButton = document.getElementById("addInputFieldButton");
addInputFieldButton.addEventListener("click", createNewInputField);
