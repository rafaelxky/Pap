<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- barra de navegação -->
<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Home</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="des.php" >Desenvolvimento</a></li>
      <li><a href="creditos.php" >Creditos</a></li>
      <li><a href="galeria.php" >Galeria</a></li>
      <li><a href="reviews.php" >Avaliações</a></li>



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
            echo "<li><a href='login.php' class=''>$coluna</a></li>";
        } else {

            echo "Error executing query: " . mysqli_error($link);
        }

     
        mysqli_close($link);
    } else {
      // caso não esteja logado mostra para fazer login
      echo "<li><a href='login.php' class=''>Login</a></li>";
    }
      ?>
    </ul>
  </div>
</nav>

</body>
</html>
