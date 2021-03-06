<?php
require '../interface/html.class.php';
?>

<!DOCTYPE html>
<html>
    <head>
         <?php
        $carregaClasseHtml = new html();

        $carregaClasseHtml->unicode();
        $carregaClasseHtml->titulo();
        $carregaClasseHtml->metaTag();
        $carregaClasseHtml->viewport();
        $carregaClasseHtml->includes();
        $carregaClasseHtml->carregarJavascrip();
        ?>

    </head>

    <body>
        
        <?php
        $cabecalho = new html();
        $cabecalho->cabecalho();
        ?>

        <!-- Conteúdo -->
        <div class="container">
            <div class="row">
                <div class="span4 offset4 well">
                    <legend>Acesso ao sistema</legend>

                    <form method="POST" action="validacao.php" accept-charset="UTF-8">

                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user"></i></span><input
                                type="text" id="txtUsuario" name="usuario"
                                placeholder="nome de usuário">
                        </div>
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-lock"></i></span><input
                                type="password" id="senhatxtSenha" name="senha"
                                placeholder="senha">
                        </div>
                        <label class="checkbox"> </label>
                        <button type="submit" name="submit" class="btn btn-info">Entrar</button>
                    </form>
                </div>
            </div>

        </div>
        <!-- Fim Conteúdo-->

        
        <?php
        $rodape = new html();
        $rodape->rodape();
        ?>

        
    </body>	
</html>