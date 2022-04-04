<?php
    if($_POST){
        $nomecliente = $_POST['nomecliente'];
        $email = $_POST['email'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];

        $nome = 'Recebidas.txt';
        $arquivo = fopen($nome, 'a+');
        $texto = "nome: ".$nomecliente;
        $texto.= " \r\nemail: ".$email;
        $texto.= "\r\nassunto: ".$assunto;
        $texto.= "\r\nmensagem: ".$mensagem;
        $texto.="\r\n--------------------------------\r\n";
        fwrite($arquivo, $texto);
        fclose($arquivo);


    }
    ?>