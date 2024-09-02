// book.js
function bookTicket(
  flightCode,
  departure,
  destination,
  departureTime,
  arrivalTime
) {
  // Construct the URL with query parameters
  const ticketUrl = `ticket1.php?flightCode=${flightCode}&departure=${departure}&destination=${destination}&departureTime=${departureTime}&arrivalTime=${arrivalTime}`;

  // Redirect to the ticket page
  window.location.href = ticketUrl;
}
// Function to parse query parameters from the URL
function getQueryParameter(name) {
  const urlSearchParams = new URLSearchParams(window.location.search);
  return urlSearchParams.get(name);
}

// Function to display ticket information
function displayTicketInformation() {
  const flightCode = getQueryParameter("flightCode");
  const departure = getQueryParameter("departure");
  const destination = getQueryParameter("destination");
  const departureTime = getQueryParameter("departureTime");
  const arrivalTime = getQueryParameter("arrivalTime");

  // Display the information in the ticket page (modify as needed)
  document.getElementById("flightCode").innerText = flightCode || "";
  document.getElementById("departure").innerText = departure || "";
  document.getElementById("destination").innerText = destination || "";
  document.getElementById("departureTime").innerText = departureTime || "";
  document.getElementById("arrivalTime").innerText = arrivalTime || "";
}

// Call the function to display ticket information when the page loads
window.onload = displayTicketInformation;
