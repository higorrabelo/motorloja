<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Vitrine</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    
    <div id="container">
        <div id="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="contato.php">Contatos</a></li>
            </ul>
        </div>

        <div id="contato">
            <form action="" method="post">
                <fieldset>
                    <legend>Contato</legend>
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" placeholder="Nome do Contato">
                    <label for="email">email:</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu Email">
                </fieldset>
                <textarea name="mensagem" id="mensagem"></textarea>
            </form>
        </div>
 
    </div>

</body>
</html>