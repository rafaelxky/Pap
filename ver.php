<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ver.php -->
    <!-- esta é a página para ver o vídeo -->
    <title>Ver</title>
    <?php include 'links.php'; ?>
</head>
<body class="color2"> 

<!-- Definir a página ativa -->
<script>
const activePage = 'index';
</script>

<!-- div branca que ocupa a página -->
<div class="white-div paddingd">
    <div id="externo"></div>
    <script src="externo.js"></script>

    <div class="color3" style="width: 800px;"></div>
    <!-- div do vídeo -->
    <div class="center1 inner">
        <!-- Nova div para o vídeo -->
        <div class="video-container ">
            <video controls width="800" style="border-radius: 5px">
                <source src="videos/teste.mp4" type="video/mp4">
                O seu navegador não suporta a tag de vídeo.
            </video>
        </div>
        <br>
        <!-- div de texto -->
        <div class="clickable color1 padding4 wtext"><a href="reviews.php">
        <h3>Deixe a sua avaliação</h3>
        </a>
        </div>
    </div>
    
    </div>
    <br>
</div>

<br>
<script src="mostrar.js"></script>
<script src="fade.js"></script>
<script src="fadediv.js"></script>
<script> console.log("O ver.php foi executado!");</script>

<!-- div do footer -->
<div id="footer"></div>
</body>
</html>
