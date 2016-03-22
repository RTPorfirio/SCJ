<?php /* Smarty version 3.1.24, created on 2016-03-21 20:43:28
         compiled from "F:/xampp/htdocs/SCJ/view/ListaJoiaIndividual.html" */ ?>
<?php
/*%%SmartyHeaderCode:2763756f04ee0191473_53998825%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5233c35f0aad2a08dfcc177777fa88370878c55d' => 
    array (
      0 => 'F:/xampp/htdocs/SCJ/view/ListaJoiaIndividual.html',
      1 => 1458589405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2763756f04ee0191473_53998825',
  'variables' => 
  array (
    'joia' => 0,
    'tipo' => 0,
    'loja' => 0,
    'pedra' => 0,
    'cor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56f04ee01d2b61_47202620',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f04ee01d2b61_47202620')) {
function content_56f04ee01d2b61_47202620 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2763756f04ee0191473_53998825';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['joia']->value->getQr_code();?>
</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../view/css/bootstrap.css">
    </head>
    <body>
    <center><img src="../joias/<?php echo $_smarty_tpl->tpl_vars['joia']->value->getImagem();?>
" width="300px" height="300px" class="img-rounded"></center>
    <br>
    <table class="table" border="1">
        <tr>
            <td>Qrcode</td>
            <td><?php echo $_smarty_tpl->tpl_vars['joia']->value->getQr_code();?>
</td>
        </tr>
        <tr>
            <td>Tipo</td>
            <td><?php echo $_smarty_tpl->tpl_vars['tipo']->value->getNome_tipo();?>
</td>
        </tr>
        <tr>
            <td>Fornecedor</td>
            <td><?php echo $_smarty_tpl->tpl_vars['loja']->value->getNome_loja();?>
</td>
        </tr>
        <tr>
            <td>Pedra</td>
            <td><?php echo $_smarty_tpl->tpl_vars['pedra']->value->getNome_pedra();?>
</td>
        </tr>
        <tr>
            <td>Cor</td>
            <td><?php echo $_smarty_tpl->tpl_vars['cor']->value->getNome_cor();?>
</td>
        </tr>
        <tr>
            <td colspan="2"><center><img src="../etiquetas/<?php echo $_smarty_tpl->tpl_vars['joia']->value->getQr_code();?>
.png"></center></td>
        </tr>
    </table>
</body>
</html>
<?php }
}
?>