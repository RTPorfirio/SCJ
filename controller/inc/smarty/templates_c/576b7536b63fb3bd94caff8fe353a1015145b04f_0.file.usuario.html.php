<?php /* Smarty version 3.1.24, created on 2016-02-01 22:33:04
         compiled from "F:/xampp/htdocs/SCJ/view/usuario.html" */ ?>
<?php
/*%%SmartyHeaderCode:49956afcf10a99b28_30373956%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '576b7536b63fb3bd94caff8fe353a1015145b04f' => 
    array (
      0 => 'F:/xampp/htdocs/SCJ/view/usuario.html',
      1 => 1454362343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49956afcf10a99b28_30373956',
  'variables' => 
  array (
    'nome' => 0,
    'usuarios' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56afcf10acc839_81150416',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56afcf10acc839_81150416')) {
function content_56afcf10acc839_81150416 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '49956afcf10a99b28_30373956';
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
                        <h1>Controle de Usuários</h1>
                        <table border="1">
                            <tr>
                                <td>Nome do Usuário</td>
                                <td>Login</td>
                            </tr>
                            <?php
$_from = $_smarty_tpl->tpl_vars['usuarios']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['usuario']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->_loop = true;
$foreach_usuario_Sav = $_smarty_tpl->tpl_vars['usuario'];
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getNome_usuario();?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getLogin();?>
</td>
                                <td><a href="../controller/controllerManterUsuario.php?opc=Editar&cod=<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getId_usuario();?>
">Editar</a> || <a href="../controller/controllerManterUsuario.php?opc=Remover&cod=<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getId_usuario();?>
">Remover</a></td>
                            </tr>
                            <?php
$_smarty_tpl->tpl_vars['usuario'] = $foreach_usuario_Sav;
}
?>
                        </table>
                        <a href="../controller/controllerManterUsuario.php?opc=Incluir" class="affix">Cadastrar novo Usuário</a>
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