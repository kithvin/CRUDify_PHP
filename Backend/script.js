// Redirect user to update form
function redirectToUpdateForm(id) {
  // Go to update.php and pass user id in the URL
    window.location.href = "../frontend/update.php?id=" + encodeURIComponent(id);
  }
  