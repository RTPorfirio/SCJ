<?php /* Smarty version 3.1.24, created on 2016-03-21 02:59:56
         compiled from "F:/xampp/htdocs/SCJ/view/manterVendedor.html" */ ?>
<?php
/*%%SmartyHeaderCode:2742856ef559c55fc62_14716326%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1f0b1235c3046954722ee90840b1f46ec6dd6e8' => 
    array (
      0 => 'F:/xampp/htdocs/SCJ/view/manterVendedor.html',
      1 => 1458525566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2742856ef559c55fc62_14716326',
  'variables' => 
  array (
    'usuario' => 0,
    'opc' => 0,
    'nomeVendedor' => 0,
    'cod' => 0,
    'telefone' => 0,
    'celular' => 0,
    'rg' => 0,
    'cpf' => 0,
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
  'unifunc' => 'content_56ef559c65bc81_30119299',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ef559c65bc81_30119299')) {
function content_56ef559c65bc81_30119299 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2742856ef559c55fc62_14716326';
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
        <?php echo '<script'; ?>
 type="text/javascript" src="../view/javascripts/cep.js"><?php echo '</script'; ?>
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
                    <div id="controladores">
                        <br/>
                        <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Editar') {?>
                        <h1>Editar o vendedor <?php echo $_smarty_tpl->tpl_vars['nomeVendedor']->value;?>
</h1>
                        <form action="../controller/manterVendedor.php?cod=<?php echo $_smarty_tpl->tpl_vars['cod']->value;?>
&opc=<?php echo $_smarty_tpl->tpl_vars['opc']->value;?>
" method="post">
                            <?php } else { ?>
                            <h1>Registro de novo Vendedor</h1>
                            <form action="../controller/manterVendedor.php?opc=<?php echo $_smarty_tpl->tpl_vars['opc']->value;?>
" method="post">
                                <?php }?>
                                <table class="table">
                                    <tr>

                                        <td><label for='nome'>Nome</label></td>
                                        <td><input class="form-control" type="text" type='text' id='nome' name='nome' <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Editar') {?>value="<?php echo $_smarty_tpl->tpl_vars['nomeVendedor']->value;?>
"<?php }?> /></td>
                                    </tr>
                                    <tr>

                                        <td><label for='nome'>Nome da Pasta</label></td>
                                        <td><input class="form-control" type="text" type='text' id='pasta' name='pasta' <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Editar') {?> readonly <?php }?> /></td>
                                    </tr>
                                    <tr>

                                        <td><label for='nome'>Telefone</label></td>
                                        <td><input class="form-control" type="text" id='tel' name='tel' <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Editar') {?>value="<?php echo $_smarty_tpl->tpl_vars['telefone']->value;?>
"<?php }?>/></td>
                                    </tr>
                                    <tr>

                                        <td><label for='celular'>Celular</label></td>
                                        <td><input class="form-control" type="text" id='celular' name='celular' <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Editar') {?>value="<?php echo $_smarty_tpl->tpl_vars['celular']->value;?>
"<?php }?>/></td>
                                    </tr>

                                    <tr>

                                        <td><label for='rg'>Rg</label></td>
                                        <td><input class="form-control" type="text" id='rg' name='rg' <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Editar') {?>value="<?php echo $_smarty_tpl->tpl_vars['rg']->value;?>
"<?php }?>/></td>
                                    </tr>
                                    <tr>

                                        <td><label for='cpf'>CPF</label></td>
                                        <td><input class="form-control" type="text" id='cpf' name='cpf' <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Editar') {?>value="<?php echo $_smarty_tpl->tpl_vars['cpf']->value;?>
"<?php }?>/></td>
                                    </tr>
                                    <tr>

                                        <td><label for='cep'>Cep</label></td>
                                        <td><input class="form-control" type="text" id='cep' name='cep' <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Editar') {?>value="<?php echo $_smarty_tpl->tpl_vars['cep']->value;?>
"<?php }?>/></td>
                                    </tr>
                                    <tr>

                                        <td><label for='estado'>Estado</label></td>
                                        <td><input class="form-control" type="text" id='estado' name='estado' <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Editar') {?>value="<?php echo $_smarty_tpl->tpl_vars['estado']->value;?>
"<?php }?>/></td>
                                    </tr>
                                    <tr>

                                        <td><label for='cidade'>Cidade</label></td>
                                        <td><input class="form-control" type="text" id='cidade' name='cidade' <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Editar') {?>value="<?php echo $_smarty_tpl->tpl_vars['cidade']->value;?>
"<?php }?>/></td>
                                    </tr>
                                    <tr>

                                        <td><label for='bairro'>Bairro</label></td>
                                        <td><input class="form-control" type="text" id='bairro' name='bairro' <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Editar') {?>value="<?php echo $_smarty_tpl->tpl_vars['bairro']->value;?>
"<?php }?>/></td>
                                    </tr>
                                    <tr>

                                        <td><label for='rua'>Rua</label></td>
                                        <td><input class="form-control" type="text" id='rua' name='rua' <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Editar') {?>value="<?php echo $_smarty_tpl->tpl_vars['rua']->value;?>
"<?php }?>/></td>
                                    </tr>
                                    <tr>

                                        <td><label for='numero'>Numero</label></td>
                                        <td><input class="form-control" type='number' id='numero' name='numero' <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Editar') {?>value="<?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
"<?php }?>/></td>
                                    </tr>
                                    <tr>

                                        <td><label for='cmp'>Complemento</label></td>
                                        <td><input class="form-control" type='textarea' id='cmp' name='cmp' <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Editar') {?>value="<?php echo $_smarty_tpl->tpl_vars['cmp']->value;?>
"<?php }?>/></td>
                                    </tr>
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