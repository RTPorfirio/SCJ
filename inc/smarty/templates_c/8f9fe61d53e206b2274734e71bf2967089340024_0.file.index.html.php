<?php /* Smarty version 3.1.24, created on 2015-10-24 22:48:33
         compiled from "view/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:14562beea15b2c70_04941414%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f9fe61d53e206b2274734e71bf2967089340024' => 
    array (
      0 => 'view/index.html',
      1 => 1445719619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14562beea15b2c70_04941414',
  'variables' => 
  array (
    'erro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_562beea169d2f9_26238298',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562beea169d2f9_26238298')) {
function content_562beea169d2f9_26238298 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14562beea15b2c70_04941414';
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