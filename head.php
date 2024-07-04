<!DOCTYPE html>
<html lang="en">
<head>
    <!-- head.php -->
    <!-- Este é o ficheiro externo onde se encontra o código para a imagem principal que se encontra no topo de algumas páginas abaixo do head -->
    <title>Head</title>
    <?php include 'links.php'; ?>
</head>
<body>
    <!-- div da imagem principal do head -->
    <div class="img full full1 prlx shadow" style="height: 50vh; position: relative; overflow: hidden;">
        <video autoplay muted loop style="position: absolute; width: 100%; height: 100%; top: 50%; left: 50%; transform: translate(-50%, -50%); object-fit: cover;">
            <source src="videos/head.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p style="position: relative; z-index: 1;"></p>
    </div>

    <br><br>
    <script>console.log("O head.php foi executado!");</script>
</body>
</html>
