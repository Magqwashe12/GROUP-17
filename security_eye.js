const togglePassword = document.getElementById("togglePassword");
const passwordInput = document.getElementById("password");
const toggleCPassword = document.getElementById("toggleCPassword"); // Corrected ID
const cpasswordInput = document.getElementById("cpassword"); // Corrected ID

togglePassword.addEventListener("click", function () {
  toggleVisibility(passwordInput, togglePassword);
});

toggleCPassword.addEventListener("click", function () { // Corrected event listener
  toggleVisibility(cpasswordInput, toggleCPassword);
});

function toggleVisibility(inputField, toggleIcon) {
  const type = inputField.getAttribute("type") === "password" ? "text" : "password";
  inputField.setAttribute("type", type);
  // Change the eye icon to show/hide based on the password visibility
  toggleIcon.textContent = type === "password" ? "👁️" : "👁️‍🗨️";
}




