<?php /* Smarty version 3.1.24, created on 2016-03-15 00:39:32
         compiled from "F:/xampp/htdocs/SCJ/view/manterPedra.html" */ ?>
<?php
/*%%SmartyHeaderCode:114256e74bb4dc3ae4_08449984%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dcc5cb347975e341927f60620898fe387bcb684' => 
    array (
      0 => 'F:/xampp/htdocs/SCJ/view/manterPedra.html',
      1 => 1457998771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114256e74bb4dc3ae4_08449984',
  'variables' => 
  array (
    'usuario' => 0,
    'opc' => 0,
    'nomePedra' => 0,
    'cod' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56e74bb4e0aaf7_02800672',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e74bb4e0aaf7_02800672')) {
function content_56e74bb4e0aaf7_02800672 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '114256e74bb4dc3ae4_08449984';
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
                    <li class="list-group-item-info"><a class="list-group-item"  href="../controller/controllerEstoque.php">Controle de estoque</a></li>
                    <li class="list-group-item-info"><a class="list-group-item"  href="../controller/controllerDefeito.php">Controle de Defeito</a></li>
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
                    <div id="controladores">
                        <br/>
                        <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Editar') {?>
                        <h1>Editar a Pedra <?php echo $_smarty_tpl->tpl_vars['nomePedra']->value;?>
</h1>
                        <form action="../controller/manterPedra.php?cod=<?php echo $_smarty_tpl->tpl_vars['cod']->value;?>
&opc=<?php echo $_smarty_tpl->tpl_vars['opc']->value;?>
" method="post">
                            <?php } else { ?>
                            <h1>Registro de nova Pedra</h1>
                            <form action="../controller/manterPedra.php?opc=<?php echo $_smarty_tpl->tpl_vars['opc']->value;?>
" method="post">
                                <?php }?>
                                <table class="table">
                                    <tr>
                                        
                                        <td><label for='nome'>Nome</label></td>
                                        <td><input class="form-control" type='text' id='nome' name='nome' <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Editar') {?>value="<?php echo $_smarty_tpl->tpl_vars['nomePedra']->value;?>
"<?php }?>/></td>
                                    </tr><br>
                                    <tr>
                                        <td colspan="2"><input type="submit" value="Confirmar Operação" class="btn"/>
                                    </tr>
                                </table>
                            </form>
                    </div>

                </section>
            </article>
        </div>
        <footer>

        </footer>
    </body>
</html><?php }
}
?>