<!-- footer.php -->
<!-- Este é um ficheiro externo onde está o footer que se encontra no fundo de todas as páginas -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Footer</title>
    <?php include 'links.php'; ?>
</head>
<div class="">
     
<!-- Barra de navegação -->
<!-- <nav class="navbar navbar-default"> -->
  <div class="container-fluid color5 shadow">
    <!-- <div class="navbar-header">  -->
      <!-- elemento principal do header fica nesta linha -->
   <!--  </div> -->

    <ul class="nav navbar-nav">
      <!-- div para orientar horizontalmente -->
      <div class="flex padding4">

           <!-- div para dar espaço entre a imagem e o texto-->
           <div class="spacediv"> </div>
           <div class="spacediv"> </div>
        <div><a href="https://www.instagram.com"><img src="images/instagram.jpeg" alt="instagram" class="foot "></a></div>
         <!-- div para dar espaço entre a imagem e o texto-->
         <div class="spacediv"> </div>
        <div><a href="https://twitter.com"><img src="images/twiter.jpeg" alt="twitter" class="foot "></a></div>
         <!-- div para dar espaço entre a imagem e o texto-->
         <div class="spacediv"> </div>
        <div><a href="https://www.youtube.com"><img src="images/youtube.jpg" alt="youtube" class="foot "></a></div>
      </div>
    </ul>
<!-- </nav> -->
  </div>
</div>
<script>console.log("O footer.php foi executado!");</script>
</body>
</html>