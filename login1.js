function validateForm() {
  var username = document.getElementById("username").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var confirmpassword = document.getElementById("confirmpassword").value;

  /* // Basic username validation */
  if (username.trim() === "") {
    document.getElementById("errorMessage1").innerHTML =
      "Username cannot be empty";
    return;
  }

  /* // Basic email validation */
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
    document.getElementById("errorMessage1").innerHTML =
      "Invalid email address";
    return;
  }

  /* // Basic password length validation */
  if (password.length < 8) {
    document.getElementById("errorMessage1").innerHTML =
      "Password must be at least 8 characters long";
    return;
  }

  /* // Check if password and re-entered password match */
  if (password !== confirmpassword) {
    document.getElementById("errorMessage1").innerHTML =
      "Passwords do not match";
    return;
  }

  // If all validations pass, you can submit the form or perform other actions
  document.getElementById("errorMessage1").innerHTML =
    "Registration successful!";
  document.getElementById("username").value = "";
  document.getElementById("email").value = "";
  document.getElementById("password").value = "";
  document.getElementById("confirmpassword").value = "";
}

function LogIn() {
  var email = document.getElementById("loginemail").value;
  var password = document.getElementById("loginpassword").value;

  /* // Here, you would typically send the email and password to the server
    // for authentication. The following is a basic client-side check. */

  /* // Assuming the credentials are hardcoded for simplicity */
  var savedemail = "Ahmed@gmail.com";
  var savedpassword = "12345678";

  if (email === savedemail && password === savedpassword) {
    document.getElementById("errorMessage").innerHTML = "Log In successful!";
    /* // You can redirect the user to another page or perform other actions here */
  } else {
    document.getElementById("errorMessage").innerHTML =
      "Invalid email or password";
  }

  document.getElementById("loginemail").value = "";
  document.getElementById("loginpassword").value = "";
  document.getElementById("errorMessage1").innerHTML = "Login successful!";
}
