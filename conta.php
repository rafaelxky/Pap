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
</body>
</html>