<html lang="en">
<head>
  <!-- externo.php -->
  <!-- Este é o ficheiro externo para o cabeçalho que se encontra em todas as páginas -->
  <title>Bootstrap Example</title>
  <?php include 'links.php'; ?>
</head>
<body>

<!-- Barra de navegação -->
<nav class="navbar navbar-default">
  <div class="container-fluid color1 shadow">
    <div class="navbar-header">
      <!-- elemento principal do header fica nesta linha -->
    </div>
    <ul class="nav navbar-nav ">
    <li><a href="index.php" class="wtext padding2 active">Home</a></li>
      <li><a href="des.php" class="wtext padding2 active">Desenvolvimento</a></li>
      <li><a href="creditos.php" class="wtext padding2">Creditos</a></li>
      <li><a href="galeria.php" class="wtext padding2">Galeria</a></li>
      <li><a href="reviews.php" class="wtext padding2">Avaliações</a></li>

      <?php 
      // Iniciar a sessão
      session_start(); 

      // Verificar se foi feito um pedido de logout
      if (isset($_GET['logout']) && $_GET['logout'] == true) {
        session_destroy();
      }

      // Obter o ID do vendedor da sessão, se existir
      $idvendedor = isset($_SESSION['idvendedor']) ? $_SESSION['idvendedor'] : null;
      ?>

      <?php
      // Verificar se o utilizador está logado
      if (!empty($idvendedor)) {
        include("conexao_bd.php");

        mysqli_query($link, "SET NAMES utf8");

        $query = "SELECT * FROM users WHERE ID = $idvendedor";

        // Executar a query
        $resposta = mysqli_query($link, $query);

        if ($resposta) {
          $row = mysqli_fetch_assoc($resposta);
          $coluna = $row['nome'];

          // Mostrar o nome do utilizador caso esteja logado
          echo "<li><a href='login.php' class='wtext'>$coluna</a></li>";
          ?><script> console.log("Está logado");</script><?php
        } else {
          echo "Erro ao executar a query: " . mysqli_error($link);
        }

        mysqli_close($link);
      } else {
        // Caso não esteja logado, mostrar a opção de login
        echo "<li><a href='login.php' class='wtext'>Login</a></li>";
        ?><script> console.log("Não está logado!");</script><?php
      }
      ?>
    </ul>
  </div>
</nav>

<script>console.log("O externo.php foi executado!");</script>
</body>
</html>
