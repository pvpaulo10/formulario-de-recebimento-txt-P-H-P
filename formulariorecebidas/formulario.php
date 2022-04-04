<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
</head>
<body>
    <form method="POST" action="cadastroformulario.php" name="texto">
        <label for="nome" >nome</label>
        <input type="text" name="nomecliente" placeholder="digite seu nome...">
        <br><br>
        <label for="email"> email </label>
        <input type="email" name="email" placeholder="digite seu email...">
        <br><br>
        <label for="assunto">assunto:</label>
            <select name="assunto">
               <option value="vendas"> VENDAS</option>
               <option value="comprar"> COMPRAR</option>
               <option value="notas"> NOTAS</option>
            </select>
            <br><br>
        <label for="mensagem">mensagem</label>
        <br>
        <textarea name="mensagem" id="mensagem" cols="30" rows="5"></textarea>
        <br><br>
        <input type="submit">
    </form>


   
</body>
</html