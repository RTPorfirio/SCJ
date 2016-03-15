<?php /* Smarty version 3.1.24, created on 2016-03-14 23:44:55
         compiled from "F:/xampp/htdocs/SCJ/view/manterJoia.html" */ ?>
<?php
/*%%SmartyHeaderCode:365956e73ee7e3c0c5_23753129%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6449b5aa0f2f48e3ca0d0f6e98acba906b3abc71' => 
    array (
      0 => 'F:/xampp/htdocs/SCJ/view/manterJoia.html',
      1 => 1457995494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '365956e73ee7e3c0c5_23753129',
  'variables' => 
  array (
    'usuario' => 0,
    'tipos' => 0,
    'tipo' => 0,
    'lojas' => 0,
    'loja' => 0,
    'cores' => 0,
    'cor' => 0,
    'pedras' => 0,
    'pedra' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56e73ee7e83094_83302013',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e73ee7e83094_83302013')) {
function content_56e73ee7e83094_83302013 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '365956e73ee7e3c0c5_23753129';
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

                        <h1>Registro de nova Joia</h1>
                        <form enctype="multipart/form-data" action="../controller/manterJoia.php?opc=incluir" method="post" >
                            <table class="table">
                                <tr>

                                    <td><label for='pcusto' >Preço de Custo</label></td>
                                    <td><input class="form-control" type='text' id='pcusto' name='pcusto'/></td>
                                </tr>
                                <tr>

                                    <td><label for='pvenda'>Preço de Venda</label></td>
                                    <td><input class="form-control" type='text' id='pvenda' name='pvenda'/></td>
                                </tr>
                                <tr>

                                    <td><label for='consignado'>Consignado</label></td>
                                    <td>
                                        Sim <input class="radio-inline" type='radio' name ='consignado' id='consignado' value="1"> | Não <input class="radio-inline" type='radio' name ='consignado' id='consignado' value="0">
                                    </td>
                                </tr>
                                <tr>

                                    <td><label for='quantidade'>Quantidade</label></td>
                                    <td><input class="form-control" type='text' id='quantidade' name='quantidade' min ="1" max="85" maxlength="2" onblur="apenas85()" required="required" pattern="\d[0-9]+$"/></td>
                                <?php echo '<script'; ?>
>
                                    function apenas85(){
                                        if(document.getElementById('quantidade').value>85 || document.getElementById('quantidade').value<=0 || isNaN(document.getElementById('quantidade').value)){
                                            document.getElementById('quantidade').value="";
                                            alert('Use uma quantidade de 1 a 85 jóias por inserção');
                                            document.getElementById('quantidade').style.backgroundColor="#F5DEB3";
        }                               else{
            document.getElementById('quantidade').style.backgroundColor="#F0FFF0";
        }
                        
        }
                                    
                                <?php echo '</script'; ?>
>
                                </tr>
                                <tr>

                                    <td><label for='notaFiscal'>Nota Fiscal</label></td>
                                    <td><input class="form-control" type='text' id='notaFiscal' name='notaFiscal' /></td>
                                </tr>
                                <tr>

                                    <td><label for='tipo'>Tipo de Produto</label></td>
                                    <td>
                                        <select class="form-control" name="tipo" id="tipo">
                                            <?php
$_from = $_smarty_tpl->tpl_vars['tipos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tipo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tipo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->value) {
$_smarty_tpl->tpl_vars['tipo']->_loop = true;
$foreach_tipo_Sav = $_smarty_tpl->tpl_vars['tipo'];
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value->getId_tipo();?>
"><?php echo $_smarty_tpl->tpl_vars['tipo']->value->getNome_tipo();?>
</option>
                                            <?php
$_smarty_tpl->tpl_vars['tipo'] = $foreach_tipo_Sav;
}
?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>

                                    <td><label for='loja'>Fornecedor</label></td>
                                    <td>
                                        <select class="form-control" id="loja" name="loja">
                                            <?php
$_from = $_smarty_tpl->tpl_vars['lojas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['loja'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['loja']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['loja']->value) {
$_smarty_tpl->tpl_vars['loja']->_loop = true;
$foreach_loja_Sav = $_smarty_tpl->tpl_vars['loja'];
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['loja']->value->getId_loja();?>
"><?php echo $_smarty_tpl->tpl_vars['loja']->value->getNome_loja();?>
</option>
                                            <?php
$_smarty_tpl->tpl_vars['loja'] = $foreach_loja_Sav;
}
?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>

                                    <td><label for='numero'>Cor</label></td>
                                    <td>
                                        <select class="form-control" id='cor' name="cor">
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
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['cor']->value->getId_cor();?>
"><?php echo $_smarty_tpl->tpl_vars['cor']->value->getNome_cor();?>
</option>
                                            <?php
$_smarty_tpl->tpl_vars['cor'] = $foreach_cor_Sav;
}
?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>

                                    <td><label for='pedra'>Pedra</label></td>
                                    <td>
                                        <select class="form-control" id="pedra" name="pedra">
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
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['pedra']->value->getId_pedra();?>
"><?php echo $_smarty_tpl->tpl_vars['pedra']->value->getNome_pedra();?>
</option>
                                            <?php
$_smarty_tpl->tpl_vars['pedra'] = $foreach_pedra_Sav;
}
?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>

                                    <td><label for='tamanho'>Tamanho</label></td>
                                    <td><input class="form-control" type='number' id='tamanho' name='tamanho'/></td>
                                </tr>
                                <tr>

                                    <td><label for='imagem'>Imagem</label></td>
                                    <td><input class="form-control" type='file' name='imagem'/></td>
                                </tr>
                                <tr>

                                    <td><label for='obs'>Observação sobre o produto</label></td>
                                    <td><input class="form-control" type='textarea' id='obs' name='obs'/></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="submit" value="Confirmar Operação"/>
                                        <input type="hidden" name="gerar" value="s" />
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