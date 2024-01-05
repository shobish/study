<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <title>Back Button and AJAX</title>
</head>
<body>

<script>
  // Function to perform AJAX call
  function performAjax() {
    // Perform your AJAX call here
    $.ajax({
      url: "your_api_endpoint",
      type: "GET",
      success: function(data) {
        // Handle the AJAX response
        console.log(data);
      },
      error: function(xhr, status, error) {
        // Handle errors
        console.error(xhr, status, error);
      }
    });
  }

  // Event listener for the pageshow event
  $(window).on('pageshow', function(event) {
    // Check if the page is loaded due to a back-forward navigation
    if (event.originalEvent.persisted || 
        (window.performance && window.performance.navigation.type === 2)) {
      // Perform the AJAX call after the back button is clicked
      performAjax();
    }
  });

  // Function to navigate to a new page
  function goToNewPage() {
    // Redirect to a new page
    window.location.href = "new_page.html";
  }

  // Example usage: Clicking a button to simulate navigating to a new page
  $(document).ready(function() {
    $('#navigateButton').on('click', function() {
      goToNewPage();
    });
  });
</script>

<!-- Button to simulate navigating to a new page -->
<button id="navigateButton">Go to New Page</button>

</body>
</html>