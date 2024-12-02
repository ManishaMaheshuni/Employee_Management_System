// Get the modal
var modal = document.getElementById('popupForm');

// Get the button that opens the modal
var btn = document.getElementById("openBtn");

// Get the <span> element that closes the modal
var span = document.getElementById("closeBtn");

// Get the element representing the background
var leaves_main = document.getElementById("leaves-main");

// When the user clicks the button, open the modal 
btn.onclick = function () {
    modal.style.display = "block";
    leaves_main.style.opacity = 0.6; // Adjust the opacity as desired
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
    leaves_main.style.opacity = 10; // Reset the opacity
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";// Reset the opacity
    }
}

   // JavaScript functions to show and hide the popup
 function showPopup() {
    document.getElementById('warningPopup').style.display = 'block';
    document.querySelector('.overlay').style.display = 'block';
  }

  function hidePopup() {
    document.getElementById('warningPopup').style.display = 'none';
    document.querySelector('.overlay').style.display = 'none';
  }

  // Function to display logout confirmation popup
  function showLogoutConfirmation() {
      document.querySelector('.logout-overlay').style.display = 'block';
      document.getElementById('logoutConfirmation').style.display = 'block';
  }

  // Function to hide logout confirmation popup
  function hideLogoutConfirmation() {
      document.querySelector('.logout-overlay').style.display = 'none';
      document.getElementById('logoutConfirmation').style.display = 'none';
  }

  // Function to open the edit popup
  function openEditPopup() {
      document.getElementById('editPopup').style.display = "block";
  }
  // Function to handle file upload
  function uploadFile() {
      // Add your upload logic here
      // For example, you can use AJAX to send the file to the server
      alert("File uploaded successfully!");
  }

  // Function to close the popup
  function closePopup() {
      // Assuming you want to close the popup when the close button is clicked
      document.getElementById('editPopup').style.display = "none";
  }

  