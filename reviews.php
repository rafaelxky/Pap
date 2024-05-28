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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div id="externo"></div>
<script src="externo.js"></script>
<div id="head"></div>
<div class="container rev">
<h1>Deixe a sua opinião</h1>
<div class="gray">
        <br>


        <?php session_start(); 

// se tiver logado avisar
if (isset ($_SESSION['idvendedor']) == null ){  

    ?> 
    <div class="container  container3 white">
        <div class="inner">

        <h2>Não está logado: faça <a href="login.php" style="color: blue;">login</a></h2>

        </div>
    </div>
    <?php

// se já estiver logado
} else {
?> 


<!-- formulario para criar uma discução
envia para disc.php -->
    <div class="container container3">
        <div class="">
            <h3 class="centertext wtext"> Avalie</h3>
            <form action="avaliar.php" method="post">
                <div class="form-group">
                    <input maxlength = "1500" type="text" class="form-control" id="text" name="text" required>
                </div>
                <label for="avaliacao">Avalie:</label><br>
        <input type="radio" id="1" name="avaliacao" value="1">
        <label for="avaliacao1">1</label>
        <input type="radio" id="2" name="avaliacao" value="2">
        <label for="avaliacao2">2</label>
        <input type="radio" id="3" name="avaliacao" value="3">
        <label for="avaliacao3">3</label>
        <input type="radio" id="4" name="avaliacao" value="4">
        <label for="avaliacao4">4</label>
        <input type="radio" id="5" name="avaliacao" value="5">
        <label for="avaliacao5">5</label><br><br>
                <div class="form-group">
                    <input type="submit" name="Entrar" value="Submeter">
                </div>
            </form>
        </div>
    </div>
    <?php }; ?>


        <br>
    </div><br>
    <br><br>

    <?php 

// query à bd
 include("conexao_bd.php");
 $query = "SELECT * FROM coment ORDER BY time DESC LIMIT 15";
$resposta = mysqli_query($link, $query);

if(mysqli_num_rows($resposta) == 0) {
    echo "<p class='wtext'>Não foram encontrados comentários.</p>";
}else {
// mostrar as discuções 
while($info = mysqli_fetch_assoc($resposta)){
    $id = $info['idcriador'];
    $text = $info['text'];
    $rate = $info['rate'];
    $time = $info['time'];
    $query = "SELECT * FROM users WHERE id = $id";
    $resposta2 = mysqli_query($link, $query);
    $info2 = mysqli_fetch_assoc($resposta2);
    $nome = $info2['nome'];
    ?>
    
    <br>
    <div class="lgray padding"><br>
        <table class="table white" >
                <tr>
                    <p class="align1"><?php echo substr($time, 0, 100); ?></p> 
                    <h3><?php echo substr($nome, 0, 100); ?></h3>
                    <p> <?php echo substr($text, 0, 100); ?> </p>
                    <?php echo substr($rate, 0, 200); 

                    for ($i = $rate; $i >= 1; $i--) {

                        $checked = ($i <= $rate) ? "checked" : "";
                        echo '<span class="fa fa-star ' . $checked . '"></span>';
                    } 
                    
                    ?>
            
        </table><br>
        </a>
    </div>
     
    <?php
}}
?>
</div>

<script src="mostrar.js"></script>
</body>
</html>
