<?php /* Smarty version 3.1.24, created on 2016-03-15 00:30:18
         compiled from "F:/xampp/htdocs/SCJ/view/cor.html" */ ?>
<?php
/*%%SmartyHeaderCode:2885656e7498a239659_54756427%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dcae07e1f119d05359f767be369b5c758595974' => 
    array (
      0 => 'F:/xampp/htdocs/SCJ/view/cor.html',
      1 => 1457998215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2885656e7498a239659_54756427',
  'variables' => 
  array (
    'usuario' => 0,
    'cores' => 0,
    'cor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56e7498a26d7b8_45842385',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e7498a26d7b8_45842385')) {
function content_56e7498a26d7b8_45842385 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2885656e7498a239659_54756427';
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
                <div id='logo'></div><
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
                        <h1>Controle de Cores</h1>
                        <table class="table">
                            <tr>
                                <td class="all">Nome da Cor</td>
                                <td class="all">Opção</td>
                            </tr>
                            <?php
$_from = $_smarty_tpl->tpl_vars['cores']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cor'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cor']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cor']->value) {
$_smarty_tpl->tpl_vars['cor']->_loop = true;
$foreach_cor_Sav = $_smarty_tpl->tpl_vars['cor'];
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['cor']->value->getNome_cor();?>
</td>
                                <td><a href="../controller/controllerManterCor.php?opc=Editar&cod=<?php echo $_smarty_tpl->tpl_vars['cor']->value->getId_cor();?>
">Editar</a> || <a href="../controller/controllerManterCor.php?opc=Remover&cod=<?php echo $_smarty_tpl->tpl_vars['cor']->value->getId_cor();?>
">Remover</a></td>
                            </tr>
                            <?php
$_smarty_tpl->tpl_vars['cor'] = $foreach_cor_Sav;
}
?>
                        </table>
                        <a href="../controller/controllerManterCor.php?opc=Incluir" >Cadastrar nova pedra</a>
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