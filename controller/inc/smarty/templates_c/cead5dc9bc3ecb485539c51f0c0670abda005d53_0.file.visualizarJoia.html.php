<?php /* Smarty version 3.1.24, created on 2016-03-21 20:51:37
         compiled from "F:/xampp/htdocs/SCJ/view/visualizarJoia.html" */ ?>
<?php
/*%%SmartyHeaderCode:2664856f050c938d6c4_19318397%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cead5dc9bc3ecb485539c51f0c0670abda005d53' => 
    array (
      0 => 'F:/xampp/htdocs/SCJ/view/visualizarJoia.html',
      1 => 1458589884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2664856f050c938d6c4_19318397',
  'variables' => 
  array (
    'usuario' => 0,
    'joias' => 0,
    'joia' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56f050c93cda75_35959703',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f050c93cda75_35959703')) {
function content_56f050c93cda75_35959703 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2664856f050c938d6c4_19318397';
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
 type="text/javascript" src="../view/javascripts/ajax.js"><?php echo '</script'; ?>
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
                    <li class="list-group-item-info"><a class="list-group-item"  href="../controller/controllerListaJoias.php">Listar Jóias</a></li>
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
                        <?php echo '<script'; ?>
 language="javascript">
                            var win = null;
                            function NovaJanela(pagina, nome, w, h, scroll) {
                                LeftPosition = (screen.width) ? (screen.width - w) / 2 : 0;
                                TopPosition = (screen.height) ? (screen.height - h) / 2 : 0;
                                settings = 'height=' + h + ',width=' + w + ',top=' + TopPosition + ',left=' + LeftPosition + ',scrollbars=' + scroll + ',resizable'
                                win = window.open(pagina, nome, settings);
                            }
                        <?php echo '</script'; ?>
>
                        <h1>Visualizar as Jóias</h1>
                        <hr>
                        <?php
$_from = $_smarty_tpl->tpl_vars['joias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['joia'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['joia']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['joia']->value) {
$_smarty_tpl->tpl_vars['joia']->_loop = true;
$foreach_joia_Sav = $_smarty_tpl->tpl_vars['joia'];
?>
                        <a onclick="NovaJanela('controllerListaJoiaIndividual.php?loja=<?php echo $_smarty_tpl->tpl_vars['joia']->value->getLoja();?>
&cor=<?php echo $_smarty_tpl->tpl_vars['joia']->value->getCor();?>
&pedra=<?php echo $_smarty_tpl->tpl_vars['joia']->value->getPedra();?>
&tipo=<?php echo $_smarty_tpl->tpl_vars['joia']->value->getTipo();?>
&id=<?php echo $_smarty_tpl->tpl_vars['joia']->value->getId_joia();?>
','Exibição de Jóia','450','600','yes');return false"><img src="../joias/<?php echo $_smarty_tpl->tpl_vars['joia']->value->getImagem();?>
" class="img-thumbnail" width="200px" height="200px"></a>
                        <?php
$_smarty_tpl->tpl_vars['joia'] = $foreach_joia_Sav;
}
?>

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