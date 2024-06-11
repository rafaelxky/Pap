<!DOCTYPE html>
<html lang="en">
<head>
    <!-- login.php -->
    <!-- esta é a página do menu de login não a do formulário nem de validação -->
    <title>Conta</title>
    <?php include 'links.php'; ?>
  <!-- <script src="SignIn.js"></script> -->
</head>
<body class="color2"> 
<div id="externo"></div>
<script src="externo.js"></script>

<div class="container center1 inner lgray rborder">
        <div class="center1 inner">
            
<?php
$idvendedor ="";

    session_start();

    // verifica se houve pedido de logout
    if (isset($_GET['logout']) && $_GET['logout'] == true) {
        session_destroy();
    
        /* este codigo pertence ao login do google e nao funciona */
        /* {?>
        <script>
        function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function () {
            });
        }
        </script>
        <?php} */

    }else

    // verifica se está logado 
        $idvendedor = isset($_SESSION['idvendedor']);
    // caso não esteja, aparece para fazerlogin ou criar conta 
    if (($idvendedor) == null) {
    
        ?> 
            <button type="button" class="btn" onclick="location.href='login1.php'" >Login</button> <br> <br>
            <button type="button" class="btn" onclick="location.href='conta.php'" >Criar Conta</button> <br> <br>
            <!-- <div class="g-signin2" data-onsuccess="onSignIn"></div>
            <div id="user-info"></div> -->
        <?php 
        
    // caso esteja logado,aparece para fazer logout, editar a conta ou criar uma conta
    // editar a conta não está funcional 
    /* nota: o editar conta já foi removido */
    } else { ?>

        <button type="button" class="btn" onclick="location.href='login.php?logout=true'" >Logout</button> <br> <br>
        <button type="button" class="btn" onclick="location.href='conta.php'" >Criar Conta</button>
    <?php } ?>
</div>
</div>
<script src="mostrar.js"></script>
<script src="fade.js"></script>
<script> console.log("O login.php foi executado!");</script>
</body>
</html>