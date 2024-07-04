<!DOCTYPE html>
<html lang="en">
<head>
    <!-- reviews.php -->
    <title>Avaliações</title>
    <?php include 'links.php'; ?>
</head>
<body class="color2">
    

<!-- Definir a página ativa -->
<script>
const activePage = 'avaliacoes';
</script>

    <!-- div branca que engloba a página-->
<div class="white-div">

    <!-- header do externo.php-->
    <div id="externo"></div>
    <script src="externo.js"></script>

    <!-- imagem principal do head, o ficheiro é head.php-->
    <div id="head"></div>

    <!-- div container que controla o tamanho e engloba todos os elementos abaixo do head -->
    <div class="container rev">
        <h1 class="nunito">Deixe a sua opinião</h1>

        <!-- div do formulario -->
        <div class="color2 shadow fadein">
                <br>
                <?php session_start(); 

        // se tiver logado avisar
        if (isset ($_SESSION['idvendedor']) == null ){  

            ?> 
            <div class="container  container3 white">
                <div class="inner">

                <h2 class="fd">Não está logado: faça <a href="login.php" style="color: blue;">login</a></h2>

                </div>
            </div>
            <?php

        // se já estiver logado
        } else {
        ?> 


        <!-- formulario para criar uma avaliação -->
            <div class="container container3">
                <div class="">
                    <h3 class="centertext nunito"> Avalie</h3>
                    <form action="avaliar.php" method="post">
                        <div class="form-group">
                            <input maxlength = "1000" type="text" class="form-control" id="text" name="text" required>
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

        ?>
        <!-- div amarela que engloba os comentários-->
        <div class="color3 padding shadow ">
            <?php

            if(mysqli_num_rows($resposta) == 0) {
                echo "<p class='wtext'>Não foram encontrados comentários.</p>";
            }else {
            // mostrar as avaliações 
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
                <div class="white padding fadein"><br>
                    <table class="table white" >
                            <tr>
                                <!-- time stamp -->
                                <p class="align1 nunito"><?php echo substr($time, 0, 100); ?></p> 
                                <!-- nome do criador -->
                                <h3 class="nunito"><?php echo substr($nome, 0, 100); ?></h3>
                                <!-- texto do comentário -->
                                <p class="scrollable fd"> <?php echo substr($text, 0, 1000); ?> </p>
                                <!-- avaliação de 1 a 5 -->
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
            ?><br>
        </div>
    </div>

<script src="mostrar.js"></script>
<script src="fade.js"></script>
<script src="fadediv.js"></script>
<script> console.log("O reviews.php foi executado!");</script>

<br>
<!-- div footer -->
<div id="footer"></div><br>
</div>
</body>
</html>
