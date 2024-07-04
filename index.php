<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- index.php -->
    <title>Página Principal</title>
    <?php include 'links.php'; ?>
</head>
<body class="color2"> 

<!-- Definir a página ativa -->
<script>
const activePage = 'index';
</script>

    <!-- div branca que ocupa a página -->
    <div class="white-div">
        <!-- header e navbar-->
        <div id="externo"></div>
        <script src="externo.js"></script>

        <!-- Imagem principal do head, o ficheiro é head.php-->
        <div id="head"></div>
        <br><br>

        <!-- container amarelo -->
        <div class="container full color3 shadow fadein"> 
            <h1 class="nunito">O menino Lucas</h1><br>
            <!-- div para orientar os elementos na horizontal -->
            <div class="flex paddingd1">
                <!-- imagem principal do slide de imagens -->
                <!-- fazer em fez de clicar nas imagens em baixo, um slide automático ou manual de imagens -->
                <div class="full1 clickable" style="width: 60%; height: 60vh; position: relative; overflow-x: auto; background-image: url('images/cartaz.PNG');" data-image="images/Cartaz.png">
                <!-- img mão -->
                    <img src="images/hand.png" alt="Clique" style="width: 5vh; height: 5vh; position: relative;">
                    <p></p>
                    <!-- divs para as imagens pequenas do slider -->
                    <div class="bot center color4" style="width: 100%; height: 10vh;">
                        <div style="width: 10%; height: 50%;"></div>
                        <div style="width: 2%; height: 50%;"></div>
                        <div style="width: 10%; height: 50%;"></div>
                        <div style="width: 2%; height: 50%;"></div>
                        <div style="width: 10%; height: 50%;"></div>
                        <div style="width: 2%; height: 50%;"></div>
                        <div style="width: 10%; height: 50%;"></div>
                        <div style="width: 2%; height: 50%;"></div>
                        <div style="width: 10%; height: 50%;"></div>
                        <div style="width: 2%; height: 50%;"></div>
                        <div style="width: 10%; height: 50%;"></div>
                        <div style="width: 2%; height: 50%;"></div>
                        <div style="width: 10%; height: 50%;"></div>
                        <div style="width: 2%; height: 50%;"></div>
                        <div style="width: 10%; height: 50%;"></div>
                    </div>
                </div>
                <!-- div para dar espaço entre a imagem e o texto-->
                <div style="width: 1.5%" class=""> </div>
                <!-- div do texto -->
                <div class="col-md-5 padding scrollable white" style="width: 45%; height: 60vh;">
                <!-- texto à direita do slider de imagens -->
                    <br><p class="fd">O pequeno Lucas encontra um barril de maçãs e 
                    decide roubar uma, porém, é abordado por dois estranhos
                    que o avisam que as maçãs que rouba pertencem ao próprio 
                    João Cidrão. Lucas não reconhece o indivíduo e pergunta 
                    quem é. Nesse momento, João Cidrão aparece e intimida 
                    Lucas que desata a correr. Os bandidos correm atrás de 
                    Lucas, mas caem e são apreendidos pela polícia. Feito por 
                    Rafael Penacho esta curta animação é uma história para 
                    avisar os mais novos sobre os perigos do crime.</p>
                </div>
            </div>
        </div>
        <br>

        <!-- botão para ver a animação -->
        <div style="padding-left: 10px;">
            <button type="button" class="btn wtext color1" onclick="location.href='ver.php'" style="width: 15%;">Ver</button>
        </div>

        <br><br>

        <!-- descrição breve do objetivo do projeto -->
         <!-- div do 2º texto -->
        <div class="color3 padding shadow fadein"> 
            <br>
            <p class="fd">Esta animação foi feita para o projeto final de curso (PAP) do Curso Profissional de Multimédia de Soure 2021-2024
                do aluno Rafael Penacho e é o produto central do projeto ao qual foi feita uma campanha publicitária 
                ao redor.</p>
            <br>
        </div>
        <br>

        <div class="color3 shadow padding fadein"> 
            <br>

        <!-- scroll horizontal para as reviews e implementar a reviews 
        ou escrever manualmente as reviews de alguem-->
            <p class="fd">Veja algumas das avaliações e deixe a sua. <a href="reviews.php" style="color: blue;">Clique aqui!</a></p>
            <br>
        </div>
        <br>

        <!-- escrever quem fez a animação e outros para alem de agradecimentos especiais-->
        <div class="color3 shadow padding fadein"> 
            <br>
            <p class="fd">Especiais agradecimentos à minha familia, aos meus colegas e aos professores.</p>
            <br>
        </div>
        <br>

        <!-- div da modal -->
        <?php include 'modal.php'; ?>

        <!-- link para o mostrar.js para mostrar a modal com a imagem quando clicada -->
        <script src="mostrar.js"></script>
        <div id="footer"></div>
        <br>
    </div>
    <script src="fade.js"></script>
    <script src="fadediv.js"></script>
    <script> console.log("O index.php foi executado!");</script>
</body>
</html>
