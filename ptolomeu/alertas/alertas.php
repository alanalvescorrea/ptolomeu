<?php

/*
 * @author Alan
 */

//************* função mensagem erro ***************
class alertas {

    var $msg_erro = null;
    var $msg_sucesso = null;

    function erro() {
        echo '<link href="../css/alert.css" rel="stylesheet" type="text/css" />';
        echo '<div class="alerts">';
        echo '<div class="alert-message warning">
                <a class="close" href="#">x</a>
                <p><strong>Ops...</strong> Dados não foram gravados. TENTE NOVAMENTE. <a href="#"></a></p>
            </div>';
        echo '</div>';
    }

//************* função mensagem sucesso ***************
    function sucesso() {
        echo '<link href="../css/alert.css" rel="stylesheet" type="text/css" />';
        echo '<div class="alerts">';
        echo '<div class="alert-message success">
                <a class="close" href="#">x</a>
                <p><strong>Legal..</strong> Dados gravados com sucesso!!! <a href="#"></a></p>
            </div>';
        echo '</div>';
    }

    function erro_generico() {
        echo '<link href="../css/alert.css" rel="stylesheet" type="text/css" />
                <div class="alerts">
               
            

                <div class="alert-message warning">
                <a class="close" href="#"></a>
                <strong>
                <a href="../login/login.php" class="alert-link">Sabemos que isso é chato, mas os dados informados estão incorretos. Tente novamente :( </a>
                </strong>
                
                </div>
                </div>';
    }

    function erro_login() {
        echo '<link href="../css/alert.css" rel="stylesheet" type="text/css" />
                <div class="alerts">
                <div class="alert-message warning">
                <a class="close" href="#"></a>
                <strong>
                <a href="../login/login.php" class="alert-link">Sabemos que isso é chato, mas os dados de acesso estão incorretos. Tente novamente :( </a>
                </strong>
                </div>
                </div>';
    }

}

?>