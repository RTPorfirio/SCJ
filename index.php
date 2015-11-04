<?php

require_once './configs/sm.php';

if (isset($_GET['erro'])) {
    if ($_GET['erro'] == 1) {
        $sm->assign("erro", "Usuário deve ser informado");
    } else {
        if ($_GET['erro'] == 2) {
            $sm->assign("erro", "Senha deve ser informada");
        } else {

            $sm->assign("erro", "Usuário ou senha inválidos");
        }
    }
} else {
    $sm->assign("erro", "");
   
}
 $sm->display("index.html");
?>
