function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    var id_token = googleUser.getAuthResponse().id_token;
  
    // Send the ID token to your backend via AJAX or form submission
    $.ajax({
      type: 'POST',
      url: 'http://localhost/pap/validar.php',
      data: { id_token: id_token },
      success: function(response) {
        // Handle response from your backend
        console.log('Login successful');
      }
    });
  }
  