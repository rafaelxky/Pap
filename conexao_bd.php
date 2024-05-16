<?php  
            //efetua a ligação à Base de Dados localmente
            $link = mysqli_connect("localhost","root","","pap");

            if (mysqli_connect_error()) {
                exit("Falhou a conexão ao MySQL:" . mysqli_connect_error());
            }

            //Define o tipo de codificação utilizada na comunicação com a BD
            mysqli_query($link, "SET NAMES utf8");

