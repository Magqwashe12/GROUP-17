// Get all the purchase buttons
var purchaseButtons = document.querySelectorAll("button[type='button']");

// Add a click event listener to each button
purchaseButtons.forEach(function(button) {
  button.addEventListener("click", function() {
    // Replace with your logic for handling the purchase action
    alert("Item purchased!");
  });
});

//change the text of the "About Us" link in the footer.
var aboutUsLink = document.querySelector(".about_us h2");
aboutUsLink.textContent = "Learn More About Us";


var header = document.querySelector(".header");
header.style.backgroundColor = "#f2f2f2";

//We'll change the default selected option in the size dropdowns
var sizeDropdowns = document.querySelectorAll("select[name='size']");
sizeDropdowns.forEach(function(dropdown) {
  // Change the selected option to 7 UK
  dropdown.value = "2";
});

// add a new paragraph to the footer.
var footer = document.querySelector(".footer");
var newParagraph = document.createElement("p");
newParagraph.textContent = "We offer the best selection of sneakers!";
footer.appendChild(newParagraph);

//about us java script
// Function to add background color change animation
function addBackgroundColorAnimation() {
    document.body.style.animation = 'changeBackgroundColor 10s infinite';
  }
  
  // Apply the animation when the page loads
  window.addEventListener('load', addBackgroundColorAnimation);
  function handleLogin() {
    // Get form elements by their IDs
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var remember = document.getElementById("remember").checked;

    // You can perform validation and further processing here
    // For this example, let's just display the input values in an alert
    alert("Username: " + username + "\nPassword: " + password + "\nRemember me: " + remember);
}

// Attach the event handler to the login button
document.getElementById("loginButton").addEventListener("click", handleLogin);

  
      // Display a confirmation alert
      var confirmation = confirm("Are you sure you want to log in?\nUsername: " + username + "\nPassword: " + password + "\nRemember me: " + remember);

      // Check if the user confirmed before proceeding
      if (confirmation) {
          // You can perform further actions like form submission here
          // For now, we'll display a success message
          alert("Login successful!");
      } else {
          alert("Login canceled.");
      }
  
  
  // Attach the event handler to the login button
  document.getElementById("loginButton").addEventListener("click", handleLogin);

  //signup form
  function handleSignup() {
    // Get form elements by their IDs
    var firstName = document.querySelector('input[placeholder="First Name"]').value;
    var lastName = document.querySelector('input[placeholder="Last Name"]').value;
    var email = document.querySelector('input[placeholder="Email"]').value;
    var password = document.querySelector('input[placeholder="Password"]').value;
    var confirmPassword = document.querySelector('input[placeholder="Confirm Password"]').value;

    // Validate if password and confirm password match
    if (password !== confirmPassword) {
        alert("Passwords do not match. Please re-enter your password.");
        return;
    }


    function handleLogin() {
      // Get form elements by their IDs
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;
      var remember = document.getElementById("remember").checked;
  
      // You can perform validation and further processing here
      // For this example, let's just display the input values in an alert
      alert("Username: " + username + "\nPassword: " + password + "\nRemember me: " + remember);
  }
  
  // Attach the event handler to the login button
  document.getElementById("loginButton").addEventListener("click", handleLogin);
  
  // Display a confirmation alert
  var confirmation = confirm("Are you sure you want to log in?\nUsername: " + username + "\nPassword: " + password + "\nRemember me: " + remember);
  
  // Check if the user confirmed before proceeding
  if (confirmation) {
      // You can perform further actions like form submission here
      // For now, we'll display a success message
      alert("Login successful!");
  } else {
      alert("Login canceled.");
  }
  
  // Attach the event handler to the login button
  document.getElementById("loginButton").addEventListener("click", handleLogin);

    // Display a confirmation alert
    var confirmationMessage =
        "Are you sure you want to sign up with the following details?\n" +
        "First Name: " + firstName + "\n" +
        "Last Name: " + lastName + "\n" +
        "Email: " + email;

    var confirmation = confirm(confirmationMessage);

    // Check if the user confirmed before proceeding
    if (confirmation) {
        // You can perform further actions like form submission here
        // For now, we'll display a success message
        alert("Sign up successful!");
    } else {
        alert("Sign up canceled.");
    }
}

// Attach the event handler to the signup form
document.querySelector('form[action="#"]').addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent the default form submission behavior
    handleSignup(); // Call the handleSignup function when the form is submitted
});


// Get a reference to the form and success message container
const form = document.getElementById('signup-form');
const successMessage = document.getElementById('success-message');

// Add a form submit event listener
form.addEventListener('submit', function (e) {
    // Prevent the default form submission behavior
    e.preventDefault();

    // Show the success message
    successMessage.style.display = 'block';

  
});





// Add the following code for the real-time password strength indicator
function checkPasswordStrength() {
  const password = passwordInput.value;
  // Implement your password strength checking logic and update the indicator here
  // Example: You can check the length, presence of numbers, special characters, etc.
  // Display a message indicating the password strength.
  // Update the content of strengthIndicator with the result.
  // strengthIndicator.textContent = "Your password strength message";
}

// Add the following code for file upload with preview
const fileInput = document.getElementById('file-input');
const filePreview = document.getElementById('file-preview');

fileInput.addEventListener('change', function () {
  previewFile();
});

function previewFile() {
  const file = fileInput.files[0];
  
  if (file) {
      const reader = new FileReader();
      reader.onload = function(e) {
          filePreview.src = e.target.result;
          filePreview.style.display = 'block';
      };
      reader.readAsDataURL(file);
  }
}

// Add the following code for form submission with success message
function submitForm() {
  // You can add validation and form submission logic here
  // For now, let's just display the success message
  successMessage.style.display = "block";
}

// Get all the purchase buttons
var purchaseButtons = document.querySelectorAll("button[type='button']");

// Add a click event listener to each button
purchaseButtons.forEach(function(button) {
  button.addEventListener("click", function() {
      // Replace with your logic for handling the purchase action
      alert("Item purchased!");
  });
});

// Change the text of the "About Us" link in the footer.
var aboutUsLink = document.querySelector(".about_us h2");
aboutUsLink.textContent = "Learn More About Us";

var header = document.querySelector(".header");
header.style.backgroundColor = "#f2f2f2";

// We'll change the default selected option in the size dropdowns
var sizeDropdowns = document.querySelectorAll("select[name='size']");
sizeDropdowns.forEach(function(dropdown) {
  // Change the selected option to 7 UK
  dropdown.value = "2";
});

// Add a new paragraph to the footer.
var footer = document.querySelector(".footer");
var newParagraph = document.createElement("p");
newParagraph.textContent = "We offer the best selection of sneakers!";
footer.appendChild(newParagraph);

// About Us JavaScript
// Function to add background color change animation
function addBackgroundColorAnimation() {
  document.body.style.animation = 'changeBackgroundColor 10s infinite';
}

// Apply the animation when the page loads
window.addEventListener('load', addBackgroundColorAnimation);


