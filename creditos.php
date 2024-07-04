<!DOCTYPE html>
<html lang="en">
<head>
    <!-- creditos.php -->
    <title>Créditos</title>
    <?php include 'links.php'; ?>
</head>
<body class="color2">

<!-- Definir a página ativa -->
<script>
const activePage = 'creditos';
</script>

<!-- div branca que engloba a página-->
<div class="white-div">

    <!-- header -->
    <div id="externo"></div>
    <!-- script fetch para o head.php e externo.php -->
    <script src="externo.js"></script>
    <!-- imagem principal -->
    <div id="head"></div>

    <!-- div que apanha a página toda -->
    <div class="full">
        <!-- div container amarela que engloba o primeiro conjunto texto/imagem -->
        <div class="container full color3 shadow fadeinr">
        <br><br>

            <div class="container flex full">
                    <!-- imagem da nossa equipa -->
                    <div class="img cover  clickable" style="width: 40%; height: 60vh; position: relative; background-image: url('images/2.PNG');" data-image="images/2.png">
                        <!-- img mão -->
                    <img src="images/hand.png" alt="Clique" style="width: 5vh; height: 5vh; position: relative;">
                    </div>
                    <!-- div do texto 1-->
                    <div class="white padding scrollable" style="width: 60%; height: 60vh;"> 
                        <h1 class="nunito">A nossa equipa</h1><br>
                        <p class="fd">
                        "O menino Lucas" foi um projeto a solo criado por Rafael Penacho como projeto
                        final do Curso Profissional de Multimédia 2021/2024 da Escola Secundária Martinho Árias de Soure.
                        As minhas competências incluem edição de video e audio, modelagem e animação 3D,
                        programação em html, css, javascript, php e SQL, criação de conteudos e design gráfico.
                        Técnico de Multimédia.
                        </p>
                    </div>
            </div><br><br>
        </div>

        <br><br>
        <!-- div container amarela que engloba o segundo conjunto texto/imagem -->
        <div class="container full color3 shadow fadein"><br><br>
        <div class="container flex full">
                <!-- div do texto 2-->
                <div class="white padding scrollable" style="width: 60%; height: 60vh;"> 
                    <h1 class="nunito">Agradecimentos</h1><br>
                    <p class="fd">Gostaria de dar um agradecimento especial aos meus colegas de curso e aos professores que nos acompanharam ao longo dos três anos.

                    </p>
                </div>
                <div class="img cover  clickable" style="width: 40%; height: 60vh; position: relative; background-image: url('images/mm.PNG');" data-image="images/mm.png">
                    <!-- img mão -->
                    <img src="images/hand.png" alt="Clique" style="width: 5vh; height: 5vh; position: relative;">
                </div>
        </div><br><br>
    </div>
</div>
<script src="mostrar.js"></script>
<script src="fade.js"></script>
<script src="fadediv.js"></script>
<script> console.log("O creditos.php foi executado!");</script>
<br><br>
<div id="footer"></div>
<br>
</div>

<!-- div da modal -->
<?php include 'modal.php'; ?>

</body>
</html>
