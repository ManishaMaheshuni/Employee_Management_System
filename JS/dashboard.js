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

  