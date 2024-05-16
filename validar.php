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
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<div id="externo"></div>
<script src="externo.js"></script>

<div class="row">
    <div class="col-sm-2 text" onclick="location.href='index.php'">
    <i class="bi bi-arrow-right"></i>
    </div>
</div>

<?php 
    session_start(); // Start session at the beginning

    // Receive email and password from login form
    $email = $_POST["email"];
    $pass1 = $_POST["pass"];
    include("conexao_bd.php");

    // Retrieve the hashed password from the database based on the provided email
    $query = "SELECT id, nome, pass FROM users WHERE email = ?";
    $stmt = mysqli_prepare($link, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $resposta = mysqli_stmt_get_result($stmt);

    // Check if a row was returned
    if (mysqli_num_rows($resposta) == 1) {
        $row = mysqli_fetch_assoc($resposta);
        
        // Verify if the provided password matches the hashed password stored in the database
        if (password_verify($pass1, $row['pass'])) {
            // Password is correct
            // Proceed with login
            $nome = $row['nome'];
            ?>
            <div class="container center1 inner border lgray rborder">
                <div class="center1 inner border lgray" >
                    <P class="">Bem vindo <?php echo $nome ?> </P>
                    <button type="button" class="btn btn-primary" onclick="location.href='index.php'" > Continuar </button>
                </div>
            </div>
            <?php
            // Store user information in session variables
            $_SESSION['idvendedor'] = $row["id"];
            $_SESSION['NomeVendedor'] = $row["nome"];
        } else {
            // Password is incorrect
            ?>
            <div class="container">
                <div class="centertext inner border">
                    <h3 class="">O email ou a palavra passe estão errados</h3>
                    <button type="button" class="btn btn-primary" onclick="location.href='login1.php'" > Voltar </button>
                </div>
            </div>
            <?php
        }
    } else {
        // User not found (email does not exist in database)
        ?>
        <div class="container">
            <div class="centertext inner border">
                <h3 class="">O email ou a palavra passe estão errados</h3>
                <button type="button" class="btn btn-primary" onclick="location.href='login1.php'" > Voltar </button>
            </div>
        </div>
        <?php
    }

    // Close database connection
    mysqli_close($link);
?>

<script src="externo.js"></script>
<script src="mostrar.js"></script>
</body>
</html>
