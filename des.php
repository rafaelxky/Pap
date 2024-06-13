<!DOCTYPE html>
<html lang="en">
<head>
    <!-- des.php -->
    <title>Desenvolvimento</title>
    <?php include 'links.php'; ?>
</head>
<body class="color2">
    <!-- Definir a página ativa -->
<script>
const activePage = 'des';
</script>

<!-- div branca que engloba a página-->
<div class="white-div">
    <div id="externo"></div>
    <script src="externo.js"></script>
    <div id="head"></div>
    <!-- div grande que engloba as caixas com texto e imagem -->
    <div class="full ">
        <!--  div que engloba o primeiro conjunto de imagem e texto-->
        <div class="container full color3 shadow">
            <br><br>
            <!-- div dentro da div para organizar os elementos na horizontal -->
            <div class="container flex full">
                <!-- imagem 1 -->
                    <div class="img cover  clickable" style="width: 40%; height: 60vh; position: relative; background-image: url('images/bot5.PNG');" data-image="images/bot5.png">
                    <!-- img mão -->
                    <img src="images/hand.png" alt="Clique" style="width: 5vh; height: 5vh; position: relative;">
                    </div>  
                    <!-- div do texto -->
                    <div class="padding white scrollable" style="width: 60%; height: 60vh;"> 
                        <h1>Ideia</h1><br>
                        <p>A ideia para a animação veio de um conjunto de outras ideias e limitações.
                            O estilo visual veio do facto de ser muito mais simples dando mais tempo para a animação em sí
                                mas mantendo o apelo visual. 
                            Os personagens são inspirados por alguns modelos 
                                que eu já tinha feito mas não cabiam bem nesta animação. 
                            A escolha de fazer robôs em vez de humanos
                                é tambem uma decisão deliberada para facilitar a animação. 
                            Os membros individuais em vez de uma malha 3D facilitam enormemente a animação e evitam alguns problemas com 
                                a pintura de peso. 
                            O estilo de animação é similar ao cartoon com exagero e curvas de movimento acentuadas tentando mantê-la
                                dinâmica. 
                            O projeto mudou várias vezes de ideias, guião, estilo e complexidade, mas no 
                                final decidi ficar por algo mais executável tendo em conta o tempo disponivel.
                            
                        </p>
                    </div>
            </div><br><br>
        </div><br>
        
        <!-- div que engloba o segundo conjunto de imagem e texto -->
        <div class="container full shadow paddingd color3"><br><br>
        <!-- div entro da div para organizar os elementos na horizontal -->
            <div class="container flex full">
                <div class="white padding scrollable" style="width: 60%; height: 60vh;"> 
                    <h1>Processo</h1><br>
                    <p>
                        Começei o projeto por preparar os manuais necessários como
                            o story-board para me orientar, fiz os modelos, as texturas
                            e as armações para preparar para a animação.
                        Depois de estár tudo pronto começei a animar seguindo o story-board.
                            O ultimo passo foi a gravação dos sons e das vozes. 
                        Por muito que pareça simples foi bastante trabalhoso, muito mais do que eu esperava e 
                        sendo a minha primeira vez a criar um projeto deste tamanho, a sua complexidade apanhou-me de surpresa.
                    </p>  
                </div>
                <!-- imagem 2 -->
                <div class="img clickable" style="width: 40%; height: 60vh; position: relative;" data-image="images/bot5.png">
                    <!-- img mão -->
                    <img src="images/hand.png" alt="Clique" style="width: 5vh; height: 5vh; position: relative;">
                    <p>imagem</p>
            </div><br><br>
        </div>
    </div><br><br>
</div>

<!-- div da modal -->
<?php include 'modal.php'; ?>

<script src="mostrar.js"></script>
<script src="fade.js"></script>
<script> console.log("O des.php foi executado!");</script>
<div id="footer"></div><br>
</div>
</body>
</html>
