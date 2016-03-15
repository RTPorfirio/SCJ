<?php /* Smarty version 3.1.24, created on 2016-03-15 01:09:20
         compiled from "F:/xampp/htdocs/SCJ/view/home.html" */ ?>
<?php
/*%%SmartyHeaderCode:3023256e752b0a255c5_98392448%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cba14b8666d7077099642865a2d01487c769a1d' => 
    array (
      0 => 'F:/xampp/htdocs/SCJ/view/home.html',
      1 => 1458000558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3023256e752b0a255c5_98392448',
  'variables' => 
  array (
    'usuario' => 0,
    'mural' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56e752b0a68594_97887674',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e752b0a68594_97887674')) {
function content_56e752b0a68594_97887674 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3023256e752b0a255c5_98392448';
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
                    <nav id='infos'>Bem vindo <?php echo $_smarty_tpl->tpl_vars['usuario']->value->getNome_usuario();?>
<br /> <a href="../controller/controllerLogout.php">Sair do Sistema</a></nav>
                </div>
            </div>
        </header>
        <div class="container-fluid all">

            <nav>   
                <ul >
                    <li class='list-group-item list-group-item-warning '>Principal</li>
                    <li class="list-group-item-info"><a class="list-group-item"  href="../controller/controllerHome.php">Página Inicial</a></li>
                    <li class="list-group-item-info"><a class="list-group-item"  href="../controller/controllerManterUsuario.php?opc=Editar&cod=<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getId_usuario();?>
">Edital Perfíl</a></li>
                    <li class="list-group-item-info"><a class="list-group-item"  href="../controller/controllerLogout.php">Sair</a></li>
                </ul>
                
                <ul >
                    <li class='list-group-item list-group-item-warning '>Cadastro</li>
                    <li class="list-group-item-info"><a class="list-group-item"  href="../controller/controllerManterJoia.php">Cadastro de Jóia</a></li>
                    <li class="list-group-item-info"><a class="list-group-item"  href="../controller/controllerUsuario.php">Cadastro de Usuário</a></li>
                    <li class="list-group-item-info"><a class="list-group-item"  href="../controller/controllerVendedor.php">Cadastro de Vendedor</a></li>
                    <li class="list-group-item-info"><s class="list-group-item">Controle de estoque</s></li>
                    <li class="list-group-item-info"><s class="list-group-item">Controle de Defeito</s></li>
                    <li class="list-group-item-info"><s class="list-group-item">Gerar Estojo</s></li>
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
                    <form method="post" action="../controller/controllerMural.php">
                    <center><h1>Mural de Recados</h1></center><br>
                    <textarea class="form-control" rows="15" id='mural' name='mural'><?php echo $_smarty_tpl->tpl_vars['mural']->value->getTexto();?>
</textarea>
                        
                    
                    
                        <center><input type="submit" value="Adicionar Mensagem ao Mural" class="btn"></center>
                    </form>
                </section>
            </article>
        </div>
        <footer>

        </footer>
    </body>
</html><?php }
}
?>