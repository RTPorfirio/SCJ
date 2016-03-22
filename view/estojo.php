<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>SCJ</title>
        <link rel="stylesheet" href="../view/css/bootstrap.css">
        <link rel="stylesheet" href="../view/css/style.css">

        <script type="text/javascript" src="../view/javascripts/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="../view/javascripts/html5-qrcode.min.js"></script>
        <script type="text/javascript" src="../view/javascripts/main.js"></script>
        <script type="text/javascript" src="../view/javascripts/scripts.js"></script>
        <script type="text/javascript" src="../view/javascripts/ajax.js"></script>

    </head>
    <body>
        <header>
            <div>
                <div id='logo'></div>
                <div id='right'>
                    <div id='curva'></div>
                    <nav id='infos'>Bem vindo {$usuario->getNome_usuario()}<br /> <a href="../controller/controllerLogout.php">Sair do Sistema</a></nav>
                </div>
            </div>
        </header>
        <div class="container-fluid all">

                       <nav>   
                <ul >
                    <li class='list-group-item list-group-item-warning '>Principal</li>
                    <li class="list-group-item-info"><a class="list-group-item"  href="../controller/controllerHome.php">Página Inicial</a></li>
                    <li class="list-group-item-info"><a class="list-group-item"  href="../controller/controllerManterUsuario.php?opc=Editar&cod={$usuario->getId_usuario()}">Edital Perfíl</a></li>
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

                                <script>
                                    function executa() {
                                        var a = document.getElementById('vendedor').value;
                                        var eScript = document.createElement("script");
                                        eScript.setAttribute('src', '../controller/listagemPastas.php?cod=' + a);
                                        //alert(a);
                                    }
                                </script>

                                <select id="v1" name="v1">
                                    {foreach $vendedores as $vendedor}>
                                    <option value='{$vendedor->getId_vendedor()}'>{$vendedor->getNome_vendedor()}</option>
                                    {/foreach}

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
                                    <script>

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
                                    </script>

                                    <div id = "results"></div>


                                    <input type="text" id="textoAdicional" name="textoAdicional" >

                                </td>
                            </tr>
                            <tr>
                                <td>
                            <center><textarea id='listagem' name='listagem' rows="20" cols="80" readonly>                               
{foreach  $tipos as $tipo}{$tipo}
{/foreach}
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
    
                                                                   {foreach $estojo  as $item}

                                    <img src="../joias/{$item->getImagem()}" width='35px' height="35px" />

                                    {/foreach}
                                </td>
                            </tr>
                            <tr>
                                <td><center><h4>Preço Total do Estojo: {$venda}</h4><input type="hidden" id='total' name="total" value="{$venda}" /></center></td>

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
</html>