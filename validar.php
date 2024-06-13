<!DOCTYPE html>
<html lang="en">
<head>
    <!-- validar.php -->
    <!-- Nesta páginas fáz-se a validação das credenciais vindas do login1.php para enviar para a base de dados
     e verificar correspondências permitindo o utilizador entrar na sua conta ou avisar que as credenciais estão erradas-->
    <title>Login</title>
    <?php include 'links.php'; ?>
</head>
<body class="color2">

<!-- Definir a página ativa -->
<script>
const activePage = 'login';
</script>

 <!-- div branca que ocupa a página -->
 <div class="white-div">

 
<div id="externo"></div>
<script src="externo.js"></script>


<div class="row">
    <div class="col-sm-2 text" onclick="location.href='index.php'">
    <i class="bi bi-arrow-right"></i>
    </div>
</div>

<?php 
    session_start();

    // Recebe o email e pass 
    $email = $_POST["email"];
    $pass1 = $_POST["pass"];
    include("conexao_bd.php");

    // Busca o email encriptado baseado no email enviado
    $query = "SELECT id, nome, pass FROM users WHERE email = ?";
    $stmt = mysqli_prepare($link, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $resposta = mysqli_stmt_get_result($stmt);

    // Verifica que existe correspondencia
    if (mysqli_num_rows($resposta) == 1) {
        $row = mysqli_fetch_assoc($resposta);
        
        // Verifica que a passe encriptada corresponde á da BD
        if (password_verify($pass1, $row['pass'])) {
            // Palavra passe correta 
            $nome = $row['nome'];
            ?>

            <!-- div container grande do texto e botão -->
            <div class="container center1 inner border color2 rborder shadow">

            <!-- div interior do texto e botão -->
                <div class="center1 inner border " >
                    <P class="bold">Bem vindo <?php echo $nome ?> </P>
                    <button type="button" class="btn btn-primary" onclick="location.href='index.php'" > Continuar </button>
                </div>
            </div>
            <?php
            // guarda a informação de utilizador no session
            $_SESSION['idvendedor'] = $row["id"];
            $_SESSION['NomeVendedor'] = $row["nome"];
        } else {
            // palavra passe incorreta
            ?>
            <div class="container">
                <div class="centertext inner border">
                    <h3 class="">Palavra passe incorreta</h3>
                    <button type="button" class="btn btn-primary" onclick="location.href='login1.php'" > Voltar </button>
                </div>
            </div>
            <?php
        }
    } else {
        // Email não existe 
        ?>
        <div class="container">
            <div class="centertext inner border">
                <h3 class="">Email incorreto</h3>
                <button type="button" class="btn btn-primary" onclick="location.href='login1.php'" > Voltar </button>
            </div>
        </div>
        <?php
    }

    // fecha a conexão á BD
    mysqli_close($link);
?>
<br><br>
</div>
<script src="fade.js"></script>
<script> console.log("O validar.php foi executado!");</script>
</body>
</html>
