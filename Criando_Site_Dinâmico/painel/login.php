<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave,do,meu,site">
	<meta name="description" content="Descrição do meu website">
    <meta name="author" content="Cesar Henrique Ramos">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../images/logo.ico">
    <title>Login</title>
</head>
<body>
    <section class="login">
        <div class="container">
            <form action="" method="post">
                <h2>Login</h2>
                <hr>
                <input type="text" name="user" id="" placeholder="Login..." require>
                <input type="password" name="password" id="" placeholder="Senha..." require>
                <input type="submit" name="acao" value="Logar">
            </form>
        </div>
    </section>
</body>
</html>