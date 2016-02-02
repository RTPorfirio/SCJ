<?php /* Smarty version 3.1.24, created on 2016-02-02 04:54:15
         compiled from "F:/xampp/htdocs/SCJ/view/manterLoja.html" */ ?>
<?php
/*%%SmartyHeaderCode:883756b02867195a48_00320174%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17353ae05cb3d97d03d51a5d130cf167d8609fc0' => 
    array (
      0 => 'F:/xampp/htdocs/SCJ/view/manterLoja.html',
      1 => 1454362317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '883756b02867195a48_00320174',
  'variables' => 
  array (
    'nome' => 0,
    'opc' => 0,
    'nomeLoja' => 0,
    'cod' => 0,
    'telefone' => 0,
    'cep' => 0,
    'estado' => 0,
    'cidade' => 0,
    'bairro' => 0,
    'rua' => 0,
    'numero' => 0,
    'cmp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56b028671dcf80_29734440',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b028671dcf80_29734440')) {
function content_56b028671dcf80_29734440 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '883756b02867195a48_00320174';
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
                        <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Editar') {?>
                        <h1>Editar a Loja <?php echo $_smarty_tpl->tpl_vars['nomeLoja']->value;?>
</h1>
                        <form action="../controller/manterLoja.php?cod=<?php echo $_smarty_tpl->tpl_vars['cod']->value;?>
&opc=<?php echo $_smarty_tpl->tpl_vars['opc']->value;?>
" method="post">
                            <?php } else { ?>
                            <h1>Registro de nova Loja</h1>
                            <form action="../controller/manterLoja.php?opc=<?php echo $_smarty_tpl->tpl_vars['opc']->value;?>
" method="post">
                                <?php }?>
                                <table>
                                    <tr>
                                        
                                        <td><label for='nome'>Nome</label></td>
                                        <td><input type='text' id='nome' name='nome' <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Editar') {?>value="<?php echo $_smarty_tpl->tpl_vars['nomeLoja']->value;?>
"<?php }?>/></td>
                                    </tr>
                                    <tr>
                                        
                                        <td><label for='nome'>Telefone</label></td>
                                        <td><input type='text' id='tel' name='tel' <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Editar') {?>value="<?php echo $_smarty_tpl->tpl_vars['telefone']->value;?>
"<?php }?>/></td>
                                    </tr>
                                    <tr>
                                        
                                        <td><label for='cep'>Cep</label></td>
                                        <td><input type='text' id='cep' name='cep' <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Editar') {?>value="<?php echo $_smarty_tpl->tpl_vars['cep']->value;?>
"<?php }?>/></td>
                                    </tr>
                                    <tr>
                                        
                                        <td><label for='estado'>Estado</label></td>
                                        <td><input type='text' id='estado' name='estado' <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Editar') {?>value="<?php echo $_smarty_tpl->tpl_vars['estado']->value;?>
"<?php }?>/></td>
                                    </tr>
                                    <tr>
                                        
                                        <td><label for='cidade'>Cidade</label></td>
                                        <td><input type='text' id='cidade' name='cidade' <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Editar') {?>value="<?php echo $_smarty_tpl->tpl_vars['cidade']->value;?>
"<?php }?>/></td>
                                    </tr>
                                    <tr>
                                        
                                        <td><label for='bairro'>Bairro</label></td>
                                        <td><input type='text' id='bairro' name='bairro' <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Editar') {?>value="<?php echo $_smarty_tpl->tpl_vars['bairro']->value;?>
"<?php }?>/></td>
                                    </tr>
                                    <tr>
                                        
                                        <td><label for='rua'>Rua</label></td>
                                        <td><input type='text' id='rua' name='rua' <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Editar') {?>value="<?php echo $_smarty_tpl->tpl_vars['rua']->value;?>
"<?php }?>/></td>
                                    </tr>
                                    <tr>
                                        
                                        <td><label for='numero'>Numero</label></td>
                                        <td><input type='number' id='numero' name='numero' <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Editar') {?>value="<?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
"<?php }?>/></td>
                                    </tr>
                                    <tr>
                                        
                                        <td><label for='cmp'>Complemento</label></td>
                                        <td><input type='textarea' id='cmp' name='cmp' <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Editar') {?>value="<?php echo $_smarty_tpl->tpl_vars['cmp']->value;?>
"<?php }?>/></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><input type="submit" value="Confirmar Operação"/>
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