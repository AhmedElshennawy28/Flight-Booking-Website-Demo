function Validate() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;
  var errorMessageElement = document.getElementById("errorMessage");

  // Reset error messages
  errorMessageElement.innerHTML = "";

  if (message === "") {
    errorMessageElement.innerHTML = "Enter your message";
  } else {
    // All validation checks passed
    // Clear text boxes
    // document.getElementById("name").value = "";
    // document.getElementById("email").value = "";
    // document.getElementById("message").value = "";

    // Set success message
    errorMessageElement.innerHTML = "Sent!";
  }

  if (email === "") {
    errorMessageElement.innerHTML = "Enter your email";
  } else {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      errorMessageElement.innerHTML = "Invalid email address";
      return; // Stop further execution if email is invalid
    }
  }

  if (name === "") {
    errorMessageElement.innerHTML = "Enter your name";
  }
}
