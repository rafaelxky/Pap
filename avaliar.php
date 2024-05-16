<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div id="externo"></div>
<script src="externo.js"></script>

<!-- recebe a infomação do 2.php 
e o id do criador do session-->
    <?php session_start(); 
    include("conexao_bd.php");
    $id = $_SESSION['idvendedor'];
    $text = $_POST["text"];
    $rate = $_POST["avaliacao"] ?? 1;

    // envia a informação para a BD
    $query = "INSERT INTO coment (text, rate, idcriador) VALUES ('$text', '$rate', '$id')";

    //executar a query
    mysqli_query($link, $query);


    // mostra as informações inseridas
    ?> 
     <div class="container1 " >
    <div class="center1 inner border">
        <h3 class="title1"></h3> 
                <table class="table white">
                    <tr>
                    <th></th>
                    <td> <?php echo $text ?> </td>
                    </tr>
                    <tr>
                    <th></th>
                    <td> Avaliação: <?php echo $rate ?> </td>
                    </tr>
    
                </table>
            <div >
            <button type="button" class="btn btn-primary" onclick="location.href='reviews.php'" > Continuar</button> <br> <br>
            </div>
        </div>
    </div>
    <?php

    ?>
    <script src="mostrar.js"></script>
</body>
</html>
