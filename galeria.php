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
        <div class="row color3 shadow margin">
    
                    <!-- video 1 -->
                    <div class="col-sm-6 padding6">
                        <div class="video-container clickable" onclick="toggleVideo('video1')">
                            <img src="images/hand.png" alt="Clique" class="hand-image">
                            <video id="video1" autoplay muted loop class="clickable cover gif">
                                <source src="videos/showcase1.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>

                    <!-- video 2 -->
                    <div class="col-sm-6 padding6">
                        <div class="video-container clickable" onclick="toggleVideo('video2')">
                            <img src="images/hand.png" alt="Clique" class="hand-image" >
                            <video id="video2"  autoplay muted loop class="clickable cover gif">
                                <source src="videos/showcase2.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>

                    <!-- video 3 -->
                    <div class="col-sm-6 padding6">
                        <div class="video-container clickable" onclick="toggleVideo('video3')">
                            <img src="images/hand.png" alt="Clique" class="hand-image">
                            <video id="video3" autoplay muted loop class="clickable cover gif">
                                <source src="videos/showcase3.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>

                    <!-- video 4 -->
                    <div class="col-sm-6 padding6">
                        <div class="video-container clickable" onclick="toggleVideo('video4')">
                            <img src="images/hand.png" alt="Clique" class="hand-image">
                            <video id="video4" autoplay muted loop class="clickable cover gif">
                                <source src="videos/showcase4.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>

        </div><br><br>
    </div>
</div>
<script src="mostrar.js"></script>
<script src="fade.js"></script>
<script src="fadediv.js"></script>
<script src="parar.js"></script>
<script> console.log("O creditos.php foi executado!");</script>
<br><br>
<!-- div footer -->
<div id="footer"></div>
<br>
</div>
</body>
</html>
