<!DOCTYPE html>
<html lang="en">
<head>
    <!-- criar.php -->
    <title>Conta criada</title>
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

    <?php 
    // busca a informação de conta.php
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $pass1 = $_POST["pass"];
        $text = "";

        $pass = password_hash($pass1, PASSWORD_DEFAULT);
        include("conexao_bd.php");

        // enviar a informação para a BD
        $query = "SELECT email from users where email = '$email'";

        $result = mysqli_query($link,$query);

        // verificar se o email está em uso
        
        if (mysqli_num_rows($result) != 0) {
            // email em  uso 
            $criarConta = false;
            ?>
                <div class="container1 " >
                    <div class="center1 inner border ">
                        <p>Já existe uma conta com este email</p>
                    <button type="button" class="btn btn-primary" onclick="location.href='conta.php'" > Continuar</button>
                    </div>
                </div>
            <?php
        } else {
            // email não está em uso

            $text = "Foi criado com sucesso uma conta com os seguintes dados.";
            //Constroi a query para inserir os dados na VD
            $query = "INSERT INTO users(nome, email, pass) VALUES('$nome','$email','$pass')";

            //Executar a query
            if (!mysqli_query($link, $query))
                exit("Erro na query INSERT: $query");

                ?>
                
<!-- mostra os dados inseridos -->
<div class="container1" >
    <div class="center1 inner border">
        <h3 class="title1"><?php echo $text ?></h3>
                <table class="table table-striped">
                    <tr>
                    <th>Nome</th>
                    <td> <?php echo $nome ?> </td>  
                    </tr>
                    <tr>
                    <th>Email</th>
                    <td> <?php echo $email ?> </td>
                    </tr>
                </table>
            <button type="button" class="btn btn-primary" onclick="location.href='index.php'" > Continuar</button> <br> <br>
            <div >
            </div>
        </div>
    </div>
</div>
                <?PHP
        }

        //Termina a ligação à Base de Dados
        mysqli_close($link);
    ?>

<script src="externo.js"></script>
<script src="mostrar.js"></script>
<script src="fade.js"></script>
<script src="fadediv.js"></script>
<script> console.log("O criar.php foi executado!");</script>
</body>
</html>