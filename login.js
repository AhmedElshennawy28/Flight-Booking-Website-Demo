// Check if the user is logged in when the page loads
document.addEventListener("DOMContentLoaded", function () {
  checkLoginStatus();
});

function checkLoginStatus() {
  var loginButton = document.getElementById("loginButton");

  // Check if the user is logged in (use your own logic here)
  var isLoggedIn = localStorage.getItem("isLoggedIn") === "true";

  // If the user is logged in, remove the button
  if (isLoggedIn && loginButton) {
    loginButton.parentNode.removeChild(loginButton);
  }
}

function login() {
  // Perform login logic here

  // After successful login, remove the button
  var loginButton = document.getElementById("loginButton");
  if (loginButton) {
    loginButton.parentNode.removeChild(loginButton);
  }
  // After successful login, set the login status in localStorage
  localStorage.setItem("isLoggedIn", "true");

  // Check and remove the button
  checkLoginStatus();
}
