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
          <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Parágrafo -->
                        <div class="main-para">
                            <p>Conteúdo aqui</p>
                        </div>
                    </div>
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