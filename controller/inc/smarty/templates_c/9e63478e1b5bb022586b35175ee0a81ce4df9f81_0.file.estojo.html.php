<?php /* Smarty version 3.1.24, created on 2016-03-07 14:00:29
         compiled from "F:/xampp/htdocs/SCJ/view/estojo.html" */ ?>
<?php
/*%%SmartyHeaderCode:969856dd7b6d7cc862_49229098%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e63478e1b5bb022586b35175ee0a81ce4df9f81' => 
    array (
      0 => 'F:/xampp/htdocs/SCJ/view/estojo.html',
      1 => 1457355622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '969856dd7b6d7cc862_49229098',
  'variables' => 
  array (
    'nome' => 0,
    'vendedores' => 0,
    'vendedor' => 0,
    'tipos' => 0,
    'tipo' => 0,
    'estojo' => 0,
    'item' => 0,
    'venda' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56dd7b6d8a2063_86632264',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56dd7b6d8a2063_86632264')) {
function content_56dd7b6d8a2063_86632264 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '969856dd7b6d7cc862_49229098';
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
                    <center>
                        <form action="../controller/fecharEstojo.php" method="post">
                        <table border='1' width='100%'>
                            <tr>
                                <th colspan="2">
                            <center><h2>Montagem de Estojo</h2></center>
                            </th>
                            </tr>
                            <tr>
                                <td>
                            <center><label for='vendedor'>Vendedor Associado</label>


                            </center>
                            </td>
                            <td>

                                <?php echo '<script'; ?>
>
                                    function executa() {
                                        var a = document.getElementById('vendedor').value;
                                        var eScript = document.createElement("script");
                                        eScript.setAttribute('src', '../controller/listagemPastas.php?cod=' + a);
                                        //alert(a);
                                    }
                                <?php echo '</script'; ?>
>

                                <select id="v1" name="v1">
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
?>>
                                    <option value='<?php echo $_smarty_tpl->tpl_vars['vendedor']->value->getId_vendedor();?>
'><?php echo $_smarty_tpl->tpl_vars['vendedor']->value->getNome_vendedor();?>
</option>
                                    <?php
$_smarty_tpl->tpl_vars['vendedor'] = $foreach_vendedor_Sav;
}
?>

                                </select>
                            </td>
                            </tr>
                            <tr>
                                <td><center><label for='pastas'>Relação das Pastas do Vendedor</label></center></td>
                            <td>

                                <select id="pastas" name="pastas">

                                    <option>Escolha o vendedor</option>

                                </select></td>

                            </tr>
                            <tr>
                                <td colspan='1'><h3><center>Listagem dos Produtos</center></h3></td>
                                <td width="20%">Usar Leitor: 
                                    <?php echo '<script'; ?>
>

                                        function usaAux() {
                                            document.getElementById('auxTroca').value = document.getElementById('pastas').value
                                        }

                                        var x = setInterval(scanLeitor, 1000);

                                        function scanLeitor() {

                                            var b = document.getElementById("read");
                                            if (b.value != "") {
                                                document.getElementById('textoAdicional').value = b.value;
                                                document.getElementById('formQRCODE').submit();

                                            }

                                        }
                                    <?php echo '</script'; ?>
>

                                    <div id = "results"></div>


                                    <input type="text" id="textoAdicional" name="textoAdicional" >

                                </td>
                            </tr>
                            <tr>
                                <td>
                            <center><textarea id='listagem' name='listagem' rows="20" cols="80" readonly>                               
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
echo $_smarty_tpl->tpl_vars['tipo']->value;?>

<?php
$_smarty_tpl->tpl_vars['tipo'] = $foreach_tipo_Sav;
}
?>
                                </textarea></center>
                            </td>
                            <td>
                                <div class="leitorQR" id="reader"> </div>

                            </td>
                            </tr>
                            <tr>
                                <td colspan="2">

                            <center></center>

                            </td>
                            <td>

                            </td>
                            </tr>

                            <tr>
                                <td colspan="2">
    
                                                                   <?php
$_from = $_smarty_tpl->tpl_vars['estojo']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>

                                    <img src="../joias/<?php echo $_smarty_tpl->tpl_vars['item']->value->getImagem();?>
" width='35px' height="35px" />

                                    <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                                </td>
                            </tr>
                            <tr>
                                <td><center><h4>Preço Total do Estojo: <?php echo $_smarty_tpl->tpl_vars['venda']->value;?>
</h4><input type="hidden" id='total' name="total" value="<?php echo $_smarty_tpl->tpl_vars['venda']->value;?>
" /></center></td>

                            <td colspan="2">
                            <center><input type="submit" value="Fechar Estojo"></center>
                            </td>
                            </tr>
                        
                        </table>
</form>

                        <form id="formQRCODE" method="post" action="../controller/manterEstojoController.php">
                            <div id="apaga"><textarea id="read" name ="s" /></textarea></div>
                        </form>
                    </center>   
            </article>

            <input type="hidden" id="auxTroca" name="auxTroca">


        </div>

    </body>
</html><?php }
}
?>