/* SignIn.js */
/* este código não funciona */

function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    var id_token = googleUser.getAuthResponse().id_token;
  
    /* manda o token */
    $.ajax({
      type: 'POST',
      url: 'http://localhost/pap/validar.php',
      data: { id_token: id_token },
      success: function(response) {
        // trada da resposta
        console.log('Login successful');
      }
    });
  }

  console.log("O SignIn.js foi executado!");
  