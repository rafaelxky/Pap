<!DOCTYPE html>
<html lang="en">
<head>
    <!-- creditos.php -->
    <title>Créditos</title>
    <?php include 'links.php'; ?>
</head>
<body class="color2">
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
        <!-- container que engloba o primeiro conjunto texto/imagem -->
        <div class="container full ltgray">
        <br><br>

            <div class="container flex full">
                    <!-- imagem da nossa equipa -->
                    <div class="img cover" style="width: 40%; height: 60vh; position: relative; background-image: url('images/foto1.PNG');">
                    </div>
                    <!-- div do texto -->
                    <div class="img2 padding" style="width: 60%; height: 60vh;"> 
                        <h1>A nossa equipa</h1><br>
                        <p>
                        "O menino Lucas" foi um projeto a solo criado por Rafael Penacho como projeto
                        final do Curso Profissional de Multimédia 2021/2024 da Escola Secundária Martinho Árias de Soure.
                        As minhas competências incluem edição de video e audio, modelagem e animação 3D,
                        programação em html, css, javascript, php e SQL, criação de conteudos e design gráfico.
                        Técnico de Multimédia.
                        </p>
                    </div>
            </div><br><br>
        </div>
        
        <div class="container full"><br><br>
        <div class="container flex full">
                <div class="img2 padding" style="width: 60%; height: 60vh;"> 
                    <h1>text1</h1><br>
                    <p>text2
                    </p>
                </div>
                <div class="img" style="width: 40%; height: 60vh; position: relative;">
                    <p>imagem</p>
                </div>
        </div><br><br>
    </div>
</div>
<script src="mostrar.js"></script>
<script src="fade.js"></script>
<script> console.log("O creditos.php foi executado!");</script>
</body>
</html>
