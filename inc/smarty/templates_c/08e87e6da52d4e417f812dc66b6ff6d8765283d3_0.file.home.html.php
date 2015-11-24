<?php /* Smarty version 3.1.24, created on 2015-10-24 21:09:32
         compiled from "view/home.html" */ ?>
<?php
/*%%SmartyHeaderCode:29651562bd76c065bf4_19841441%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08e87e6da52d4e417f812dc66b6ff6d8765283d3' => 
    array (
      0 => 'view/home.html',
      1 => 1445713770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29651562bd76c065bf4_19841441',
  'variables' => 
  array (
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_562bd76c127ea1_90412642',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562bd76c127ea1_90412642')) {
function content_562bd76c127ea1_90412642 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29651562bd76c065bf4_19841441';
?>
<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>Olá, <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
<br /><a href = "./controller/controllerLogout.php"> Sair </a></div>
    </body>
</html>
<?php }
}
?>