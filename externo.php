<html lang="en">
<head>
  <!-- externo.php -->
  <!-- este é o ficheiro externo para o head que se encontra em todas as páginas-->
  <title>Bootstrap Example</title>
  <?php include 'links.php'; ?>
</head>
<body>

<!-- barra de navegação -->
<nav class="navbar navbar-default ">
  <div class="container-fluid color1 shadow">
    <div class="navbar-header ">
      <a class="navbar-brand wtext" href="index.php">Home</a>
    </div>
    <ul class="nav navbar-nav ">
      <li><a href="des.php" class="wtext">Desenvolvimento</a></li>
      <li><a href="creditos.php" class="wtext" >Creditos</a></li>
      <li><a href="galeria.php" class="wtext" >Galeria</a></li>
      <li><a href="reviews.php" class="wtext" >Avaliações</a></li>



      <?php 
    session_start(); 

    // verifica se foi feito um pedido de logout
    if (isset($_GET['logout']) && $_GET['logout'] == true) {
    session_destroy();}

    $idvendedor = isset($_SESSION['idvendedor']) ? $_SESSION['idvendedor'] : null;
?>

      <?php
      // verifica se está logado
      if (!empty($idvendedor)) {
        include("conexao_bd.php");

        mysqli_query($link, "SET NAMES utf8");

        $query = "SELECT * FROM users WHERE ID = $idvendedor";

        //Executar a query
        $resposta = mysqli_query($link, $query);


        if ($resposta) {

            $row = mysqli_fetch_assoc($resposta);

            $coluna = $row['nome'];

            // mostra o nome do utilizador caso esteja logado
            echo "<li><a href='login.php' class='wtext'>$coluna</a></li>";
        } else {

            echo "Error executing query: " . mysqli_error($link);
        }

     
        mysqli_close($link);
    } else {
      // caso não esteja logado mostra para fazer login
      echo "<li><a href='login.php' class='wtext'>Login</a></li>";
    }
      ?>
    </ul>
  </div>
</nav>

<script>console.log("O externo.js foi executado!");</script>
</body>
</html>
