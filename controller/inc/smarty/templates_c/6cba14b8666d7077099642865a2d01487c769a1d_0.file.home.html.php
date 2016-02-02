<?php /* Smarty version 3.1.24, created on 2016-02-01 22:32:53
         compiled from "F:/xampp/htdocs/SCJ/view/home.html" */ ?>
<?php
/*%%SmartyHeaderCode:3184256afcf05bf23f6_04354277%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cba14b8666d7077099642865a2d01487c769a1d' => 
    array (
      0 => 'F:/xampp/htdocs/SCJ/view/home.html',
      1 => 1454362280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3184256afcf05bf23f6_04354277',
  'variables' => 
  array (
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56afcf05c26972_26026499',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56afcf05c26972_26026499')) {
function content_56afcf05c26972_26026499 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3184256afcf05bf23f6_04354277';
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>SCJ</title>
        <link rel="stylesheet" href="../view/css/bootstrap.css">
        <link rel="stylesheet" href="../view/css/style.css">

        <?php echo '<script'; ?>
 type="text/javascript" src="../view/javascripts/jquery-1.9.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="../view/javascripts/html5-qrcode.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="../view/javascripts/main.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="../view/javascripts/scripts.js"><?php echo '</script'; ?>
>


    </head>
    <body>
        <header>
            <div>
                <div id='logo'></div>
                <div id='right'>
                    <div id='curva'></div>
                    <nav id='infos'>Bem vindo <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
<br /> <a href="../controller/controllerLogout.php">Sair do Sistema</a></nav>
                </div>
            </div>
        </header>
        <div class="container-fluid all">

            <nav>   
                <ul >
                    <li class='list-group-item list-group-item-warning '>Principal</li>
                    <li class="list-group-item-info"><a class="list-group-item"  href="../controller/controllerHome.php">Página Inicial</a></li>
                    <li class="list-group-item-info"><a class="list-group-item"  href="../controller/controllerPerfil.php">Edital Perfíl</a></li>
                    <li class="list-group-item-info"><a class="list-group-item"  href="../controller/controllerLogout.php.php">Sair</a></li>
                </ul>
                
                <ul >
                    <li class='list-group-item list-group-item-warning '>Cadastro</li>
                    <li class="list-group-item-info"><a class="list-group-item"  href="../controller/controllerManterJoia.php">Cadastro de Jóia</a></li>
                    <li class="list-group-item-info"><a class="list-group-item"  href="../controller/controllerUsuario.php">Cadastro de Usuário</a></li>
                    <li class="list-group-item-info"><a class="list-group-item"  href="../controller/controllerVendedor.php">Cadastro de Vendedor</a></li>
                    <li class="list-group-item-info"><a class="list-group-item"  href="../controller/controllerEstoque.php">Controle de estoque</a></li>
                    <li class="list-group-item-info"><a class="list-group-item"  href="../controller/controllerEstojo.php">Gerar Estojo</a></li>
                </ul>


                <ul >
                    <li class='list-group-item list-group-item-warning '>Configurações</li>
                    <li class="list-group-item-info"><a class="list-group-item"  href="../controller/controllerTipo.php">Configurar Tipo</a></li>
                    <li class="list-group-item-info"><a class="list-group-item"  href="../controller/controllerCor.php">Configurar Cor</a></li>
                    <li class="list-group-item-info"><a class="list-group-item"  href="../controller/controllerLoja.php">Configurar Loja</a></li>
                    <li class="list-group-item-info"><a class="list-group-item"  href="../controller/controllerPedra.php">Configurar Pedra</a></li>
                    <li class="list-group-item-info"><a class="list-group-item"  href="../controller/controllerRelatorio.php">Emitir Relatórios</a></li>
                </ul>
            </nav>
            <article>
                <section>
                    <header id="busca">

                        <div id="formulario">
                            <div id="reahder"></div>
                            <form id="pesquisa" action="" method ="post" enctype="multipart/form-data">
                                <h6 class="center">Resultado</h6>
                                <textarea id="read" cols="30" rows="1" name ="s"> </textarea>
                            </form>
                        </div>
                        <div id="leitor">
                            <input type="button" value="Ligar Leitor" onclick="ativaLeitor()" class="btn-primary"/>                   
                            <div class="leitorQR" id="reader"> </div>
                            <form id="pesquisa" action="" method ="post" enctype="multipart/form-data">
                                <h6 class="center">Resultado</h6>
                                <textarea id="read" cols="30" rows="1" name ="s"> </textarea>
                            </form>
                            <div id = "results"></div>
                        </div>
                    </header>
                </section>
            </article>
        </div>
        <footer>

        </footer>
    </body>
</html><?php }
}
?>