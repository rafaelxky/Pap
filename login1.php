<!DOCTYPE html>
<html lang="en">
<head>
    <!-- login1.php -->
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

 <!-- header e navbar-->
<div id="externo"></div>
<script src="externo.js"></script>

<!-- formulario para introduzir as credenciais de login
envia a informação para validar.php-->

<!-- div do formulario -->
<div class="container color2 rborder shadow">
        <div style="border-radius: 10px;" class="center1 inner border ">
            <h3 class="centertext text"> Log In</h3>
            <!-- form -->
            <form action="validar.php" method="post">
                <!-- email -->
                <div class="form-group">
                    <label for="nome" class="text">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <!-- pass -->
                <div class="form-group">
                    <label for="nome" class="text">Pass:</label>
                    <input type="password" class="form-control" id="pass" name="pass" required>
                </div> <br>
                <div>
                    <input type="submit" name="Entrar" value="Entrar">
                </div>
            </form>
        </div>
    </div>
    <br><br>
</div>  
    <script src="fade.js"></script>
<script> console.log("O login1.php foi executado!");</script>
</body>
</html>