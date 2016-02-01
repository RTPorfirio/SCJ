<?php /* Smarty version 3.1.24, created on 2016-02-01 04:41:28
         compiled from "F:/xampp/htdocs/SCJ/view/vendedor.html" */ ?>
<?php
/*%%SmartyHeaderCode:1477556aed3e8973b79_55390915%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0b34824e8dbb726884ede759a0d49dc554e662a' => 
    array (
      0 => 'F:/xampp/htdocs/SCJ/view/vendedor.html',
      1 => 1454297964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1477556aed3e8973b79_55390915',
  'variables' => 
  array (
    'nome' => 0,
    'vendedores' => 0,
    'vendedor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56aed3e89bcda6_50750584',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56aed3e89bcda6_50750584')) {
function content_56aed3e89bcda6_50750584 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1477556aed3e8973b79_55390915';
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
                    <li class="list-group-item-info"><a class="list-group-item"  href="../controller/controllerJoia.php">Cadastro de Jóia</a></li>
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
                        <h1>Controle de Vendedores</h1>
                        <table border="1">
                            <tr>
                                <td>Nome do Vendedor</td>
                                <td>Telefone</td>
                                <td>Celular</td>
                            </tr>
                            <?php
$_from = $_smarty_tpl->tpl_vars['vendedores']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vendedor'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vendedor']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vendedor']->value) {
$_smarty_tpl->tpl_vars['vendedor']->_loop = true;
$foreach_vendedor_Sav = $_smarty_tpl->tpl_vars['vendedor'];
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['vendedor']->value->getNome_vendedor();?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['vendedor']->value->getTelefone();?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['vendedor']->value->getCelular();?>
</td>
                                <td><a href="../controller/controllerManterVendedor.php?opc=Editar&cod=<?php echo $_smarty_tpl->tpl_vars['vendedor']->value->getId_vendedor();?>
">Editar</a> || <a href="../controller/controllerManterVendedor.php?opc=Remover&cod=<?php echo $_smarty_tpl->tpl_vars['vendedor']->value->getId_vendedor();?>
">Remover</a></td>
                            </tr>
                            <?php
$_smarty_tpl->tpl_vars['vendedor'] = $foreach_vendedor_Sav;
}
?>
                        </table>
                        <a href="../controller/controllerManterVendedor.php?opc=Incluir" class="affix">Cadastrar nova Loja</a>
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