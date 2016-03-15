<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Cris Jóias - Acesso</title>
        <link rel="stylesheet" href="./view/css/bootstrap.min.css">
        <link rel="stylesheet" href="./view/css/style-login.css">
    </head>
    <body>
        <div class="container-fluid login">

            <div>
                <form class ="form" action="../SCJ/controller/controllerLogin.php" method="post">
                    <label><h3>Login</h3></label><br>
                    <input type="text" class="form-control loginInput" required id="usuario" name="usuario"/>
                    <label><h3>Senha</h3></label><br>
                    <input type="password" class="form-control loginInput" required id="senha" name="senha"/>
                    <br>    
                    <input type="submit" class=" btn-lg btn-primary btn-block" value="Efetuar Login"><br/>
                    <span class="erro"> 
                        <?php if(isset($_GET['erro']) && $_GET['erro']="Falha")
                                echo "Usuário ou senha inexistente!!";
                        else{
                            if(isset($_GET['erro']) && $_GET['erro']="Login")
                                echo "É necessário estar logado para usar o sistema";
                        }
                                ?>
                    </span>
                    
                </form>
            </div>

        </div>
    </body>
</html> 