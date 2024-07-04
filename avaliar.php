<!DOCTYPE html>
<html lang="en">
<head>
    <!-- avaliar.php -->
    <!-- Esta página serve para enviar as informações da avaliação para a BD-->
    <title>Avaliação</title>
    <?php include 'links.php'; ?>
</head>
<body class="color2">
    <!-- div branca que ocupa a página -->
    <div class="white-div">

<div id="externo"></div>
<script src="externo.js"></script>

<!-- recebe a infomação do reviews.php 
e o id do criador do session-->
    <?php session_start(); 
    include("conexao_bd.php");
    /* ID para saber quem submeteu */
    $id = $_SESSION['idvendedor'];
    /* O texto */
    $text = $_POST["text"];
    /* A avaliação de 0 a 5 */
    $rate = $_POST["avaliacao"] ?? 1;

    // envia a informação para a BD
    $query = "INSERT INTO coment (text, rate, idcriador) VALUES ('$text', '$rate', '$id')";

    //executar a query
    mysqli_query($link, $query);


    // mostra as informações inseridas
    ?> 
    <!-- div container grande -->
    <div class="padding3" >
        <!-- div pequena -->
        <div class=" border">
            <div class="scrollable">
                <h3 class="title1"></h3> 
                    <!-- div branca -->
                    <table class="table white">
                        <tr>
                        <th></th>
                        <!-- mostrar o texto -->
                        <td> <?php echo $text ?> </td>
                        </tr>
                        <tr>
                        <th></th>
                        <!-- mostrar a avaliação de 1 a 5-->
                        <td> Avaliação: <?php echo $rate ?> </td>
                        </tr>
                    </table>
            </div>   
            <br>
            <button type="button" class="btn btn-primary" onclick="location.href='reviews.php'" > Continuar</button> <br> <br> 
        </div>
    </div>
        
    </div>
    </div>
    <?php

    ?>
    <script src="mostrar.js"></script>
    <script src="fade.js"></script>
    <script src="fadediv.js"></script>
    <script> console.log("O avaliar.php foi executado!");</script>
</body>
</html>
