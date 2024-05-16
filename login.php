<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <meta name="google-signin-client_id" content="858584799544-m9g2irgs2ht6v4vismuaka5c46u83j8s.apps.googleusercontent.com">
  <link rel="stylesheet" href="styles.css">
  <script src="SignIn.js"></script>
</head>
<body>
<div id="externo"></div>
<script src="externo.js"></script>

<div class="container center1 inner lgray rborder">
        <div class="center1 inner">
            
<?php
$idvendedor ="";
//Debug github parece funcionar

    session_start();

    // verifica se houve pedido de logout
    if (isset($_GET['logout']) && $_GET['logout'] == true) {
        session_destroy();
    
        ?>
        <script>
        function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function () {
                // Clear frontend authentication state
                // Redirect or update UI to reflect logout
            });
        }
        </script>
        <?php

    }else

    // verifica se está logado 
        $idvendedor = isset($_SESSION['idvendedor']);
    // caso não esteja, aparece para fazerlogin ou criar conta 
    if (($idvendedor) == null) {
    
        ?> 
            <button type="button" class="btn" onclick="location.href='login1.php'" >Login</button> <br> <br>
            <button type="button" class="btn" onclick="location.href='conta.php'" >Criar Conta</button> <br> <br>
            <div class="g-signin2" data-onsuccess="onSignIn"></div>
            <div id="user-info"></div>
        <?php 
        
    // caso esteja logado,aparece para fazer logout, editar a conta ou criar uma conta
    // editar a conta não está funcional
    } else { ?>

        <button type="button" class="btn" onclick="location.href='login.php?logout=true'" >Logout</button> <br> <br>
        <button type="button" class="btn" onclick="location.href='conta.php'" >Criar Conta</button>
    <?php } ?>
</div>
</div>
<script src="mostrar.js"></script>
</body>
</html>