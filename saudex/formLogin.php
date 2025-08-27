<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
 <div id="geral">
    <div class="container">
        <form id="login" action="contrLogin.php" method="post">
            <div class="row">
                <div class="25">
                    <label for="Email">Email</label> 
                </div>
                <div class="75">
                    <input type="text" id="Email" name="Email" placeholder="Digite o seu Email.">
                </div>
            </div>

            <div class="row">
                <div class="25">
                    <label for="Senha">Senha</label> 
                </div>
                <div class="75">
                    <input type="password" id="Senha" name="Senha" placeholder="Digite a sua Senha.">
                </div>
            </div>
<br>
            <div class="row">
                <div class="75">
                    <button type="submit">Entrar</button>
                </div>
            </div>
        </form>
    </div>
 </div> 
</body>
</html>
