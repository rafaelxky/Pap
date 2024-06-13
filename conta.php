<!DOCTYPE html>
<html lang="en">
<head>
    <!-- esta página serve para criar a conta do utilizador -->
    <!-- conta.php -->
    <title>Criar conta</title>
    <?php include 'links.php'; ?>
</head>
<body class="color2">

 <!-- div branca que ocupa a página -->
 <div class="white-div">

<!-- Definir a página ativa -->
<script>
const activePage = 'login';
</script>

<div id="externo"></div>

<!-- formulario de criar conta
manda as informações para criar.php -->

<!-- div grande que engloba o formulario -->
<div class="container ">

    <!-- div pequena colorida que engloba o formulario e centra-o -->
        <div class="center1 inner border color2 wtext shadow">

        <!-- formulario -->
            <h3 class="centertext"> Criar Conta</h3>
            <form action="criar.php" method="post">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="nome">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="nome">Pass:</label>
                    <input type="password" class="form-control" id="pass" name="pass" required>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="Entrar" value="Registar" class="color4">
                </div>
            </form>
        </div>
    </div>
<br>
</div>

    <script src="externo.js"></script>
    <script src="mostrar.js"></script>
    <script src="fade.js"></script>
    <script> console.log("O conta.php foi executado!");</script>
</body>
</html>