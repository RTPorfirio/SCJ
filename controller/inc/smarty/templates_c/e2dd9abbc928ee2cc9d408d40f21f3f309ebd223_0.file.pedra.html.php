<?php /* Smarty version 3.1.24, created on 2016-02-01 22:33:15
         compiled from "F:/xampp/htdocs/SCJ/view/pedra.html" */ ?>
<?php
/*%%SmartyHeaderCode:1902356afcf1b65b5a8_52530089%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2dd9abbc928ee2cc9d408d40f21f3f309ebd223' => 
    array (
      0 => 'F:/xampp/htdocs/SCJ/view/pedra.html',
      1 => 1454362334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1902356afcf1b65b5a8_52530089',
  'variables' => 
  array (
    'nome' => 0,
    'pedras' => 0,
    'pedra' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56afcf1b6921a1_48834702',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56afcf1b6921a1_48834702')) {
function content_56afcf1b6921a1_48834702 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1902356afcf1b65b5a8_52530089';
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
                    <div id="controladores">
                        <br/>
                        <h1>Controle de Pedras</h1>
                        <table border="1">
                            <tr>
                                <td>Nome da Pedra</td>
                                <td>Opção</td>
                            </tr>
                            <?php
$_from = $_smarty_tpl->tpl_vars['pedras']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['pedra'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['pedra']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pedra']->value) {
$_smarty_tpl->tpl_vars['pedra']->_loop = true;
$foreach_pedra_Sav = $_smarty_tpl->tpl_vars['pedra'];
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['pedra']->value->getNome_pedra();?>
</td>
                                <td><a href="../controller/controllerManterPedra.php?opc=Editar&cod=<?php echo $_smarty_tpl->tpl_vars['pedra']->value->getId_Pedra();?>
">Editar</a> || <a href="../controller/controllerManterPedra.php?opc=Remover&cod=<?php echo $_smarty_tpl->tpl_vars['pedra']->value->getId_Pedra();?>
">Remover</a></td>
                            </tr>
                            <?php
$_smarty_tpl->tpl_vars['pedra'] = $foreach_pedra_Sav;
}
?>
                        </table>
                        <a href="../controller/controllerManterPedra.php?opc=Incluir" class="affix">Cadastrar nova pedra</a>
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