function bookticket(button) {

  // Get all buttons with class "extractBtn"
  var row = button.closest('tr');
      // Get the parent row of the clicked button
     
      var flightcode = row.cells[0].innerText;
      var price = row.cells[5].innerText;
      // var email = cells[2].innerText;

      // Update span in the form in the PHP file
      var userDataSpan = parent.document.getElementById("departure");
      userDataSpan.innerText = `Flight Code: ${flightcode}, Price: ${price}`;
      // Redirect to a PHP file
      window.location.href = "checkout.php";

      // Open a new window/tab with a PHP file
      window.open("checkout.php", "_blank");
    });
  });
});
