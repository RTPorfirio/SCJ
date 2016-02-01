<?php /* Smarty version 3.1.24, created on 2016-01-28 22:34:03
         compiled from "view/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:967556aa894bcde078_11518753%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59b8933501b0ccd3e0f67ce59dd1698dd9150d3a' => 
    array (
      0 => 'view/index.html',
      1 => 1453251331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '967556aa894bcde078_11518753',
  'variables' => 
  array (
    'erro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56aa894be01ee2_25911305',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56aa894be01ee2_25911305')) {
function content_56aa894be01ee2_25911305 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '967556aa894bcde078_11518753';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cris Joias</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="controller/controllerLogin.php" method="post">
            <table>
                <tr>
                    <td><label for="usuario">Usuário</label></td>
                    <td><input type="text" id="usuario" name="usuario" placeholder="Nome de Usuário" maxlength="10"/></td>
                </tr>
                <tr>
                    <td><label for="senha">Senha</label></td>
                    <td><input type="password" id="senha" name="senha" placeholder="************" maxlength="10"/></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Login" /><br>
                        <span id="erro"><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</span>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
<?php }
}
?>