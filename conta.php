<!DOCTYPE html>
<html lang="en">
<head>
    <!-- conta.php -->
    <title>Criar conta</title>
    <?php include 'links.php'; ?>
</head>
<body class="color2">
<div id="externo"></div>
<!-- formulario de criar conta
manda as informações para criar.php -->
<div class="container">
        <div class="center1 inner border">
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
                    <input type="submit" name="Entrar" value="Registar">
                </div>
            </form>
        </div>
    </div>

    <script src="externo.js"></script>
    <script src="mostrar.js"></script>
    <script src="fade.js"></script>
    <script> console.log("O conta.php foi executado!");</script>
</body>
</html>