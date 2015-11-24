<?php /* Smarty version 3.1.24, created on 2015-10-24 22:41:44
         compiled from "E:/xampp/htdocs/scj/view/home.html" */ ?>
<?php
/*%%SmartyHeaderCode:1545562bed08a130d6_52618533%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7250d5886b7859894862128a6451d9a123577e3a' => 
    array (
      0 => 'E:/xampp/htdocs/scj/view/home.html',
      1 => 1445719265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1545562bed08a130d6_52618533',
  'variables' => 
  array (
    'conecta' => 0,
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_562bed08b55c60_98257852',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562bed08b55c60_98257852')) {
function content_562bed08b55c60_98257852 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1545562bed08a130d6_52618533';
?>
<!DOCTYPE html>


<html>
<?php if ($_smarty_tpl->tpl_vars['conecta']->value == "logado") {?>    
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
<?php } else { ?>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>Falha ao realizar o login.</div>
    </body>
</html>
<?php }
}
}
?>