<!DOCTYPE html>
<html lang="en">
<head>
    <!-- galeria.php -->
     <!-- Nesta página estarão imagens do projeto e elementos interativos
      estes incluem imagens 360 dos modelos e os próprios modelos 3D se possivel -->
      
    <title>Galeria</title>
    <?php include 'links.php'; ?>
</head>
<body class="color2">

<!-- Definir a página ativa -->
<script>
const activePage = 'galeria';
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
        <div class="container full color3 shadow">
        <br><br>

            <div class="container flex full">
                    <!-- imagem da nossa equipa -->
                    <div class="img cover" style="width: 40%; height: 60vh; position: relative; background-image: url('images/foto1.PNG');">
                    </div>
                    <!-- div do texto 1-->
                    <div class="white padding scrollable" style="width: 60%; height: 60vh;"> 
                        <h1></h1><br>
                        <p>
                        
                        </p>
                    </div>
            </div><br><br>
        </div>

        <br><br>
        <!-- div container amarela que engloba o segundo conjunto texto/imagem -->
        <div class="container full color3 shadow"><br><br>
        <div class="container flex full">
                <!-- div do texto 2-->
                <div class="white padding scrollable" style="width: 60%; height: 60vh;"> 
                    <h1></h1><br>
                    <p>
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
<br><br>
<!-- div footer -->
<div id="footer"></div>
<br>
</div>
</body>
</html>
