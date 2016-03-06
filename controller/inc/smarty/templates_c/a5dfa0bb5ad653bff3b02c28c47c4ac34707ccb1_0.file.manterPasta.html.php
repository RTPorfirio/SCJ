<?php /* Smarty version 3.1.24, created on 2016-03-06 20:31:07
         compiled from "F:/xampp/htdocs/SCJ/view/manterPasta.html" */ ?>
<?php
/*%%SmartyHeaderCode:1607956dc857b09da63_16535514%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5dfa0bb5ad653bff3b02c28c47c4ac34707ccb1' => 
    array (
      0 => 'F:/xampp/htdocs/SCJ/view/manterPasta.html',
      1 => 1457291603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1607956dc857b09da63_16535514',
  'variables' => 
  array (
    'nome' => 0,
    'cabecalho' => 0,
    'cod' => 0,
    'id' => 0,
    'arquivos' => 0,
    'arquivo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56dc857b0d53f9_13736450',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56dc857b0d53f9_13736450')) {
function content_56dc857b0d53f9_13736450 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1607956dc857b09da63_16535514';
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
                    <div id="controladores">
                        <br/>
                        <h1><?php echo $_smarty_tpl->tpl_vars['cabecalho']->value;?>
</h1>
                        <br/>
                        <form method="post" onclick="geraPasta()" action="../controller/manterNovaPagina.php?dir=<?php echo $_smarty_tpl->tpl_vars['cod']->value;?>
&cod=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
                        <input type="submit" value='Criar Nova Pasta'><br/>
                        
                        <?php echo '<script'; ?>
>
                            function geraPasta(){
                                var a = window.prompt("Entre com o nome da pasta");
                                document.getElementById('novaPasta').value=a;
                              //  window.location.assign( );
                                
                            }
                        <?php echo '</script'; ?>
>
                        <input type="hidden" name="novaPasta" id='novaPasta'>
                        </form>
                        <hr>
                        <?php echo '<script'; ?>
>var i=1;var txt="";var ress;<?php echo '</script'; ?>
>
                        <?php
$_from = $_smarty_tpl->tpl_vars['arquivos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['arquivo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['arquivo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['arquivo']->value) {
$_smarty_tpl->tpl_vars['arquivo']->_loop = true;
$foreach_arquivo_Sav = $_smarty_tpl->tpl_vars['arquivo'];
?>
                          <?php echo '<script'; ?>
>
                              if(i%2){
                                  txt="<?php echo $_smarty_tpl->tpl_vars['arquivo']->value;?>
";
                                  txt=txt.split("/");
                                  ress=txt[3];
                                  document.write("<a href='<?php echo $_smarty_tpl->tpl_vars['arquivo']->value;?>
'>"+ress+"</a> <br/>");
                              }
                              i++;
                         <?php echo '</script'; ?>
>
                        <?php
$_smarty_tpl->tpl_vars['arquivo'] = $foreach_arquivo_Sav;
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