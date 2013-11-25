<?php
include 'seguranca.php';
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
                            <div class="span10">
                                <?php echo 'Olá ' . $_SESSION['UsuarioNome'] . '! (seu nível acesso: ' . $_SESSION['UsuarioNivel'] . '). '; ?> 

                                <?php echo " <a href='logout.php'>Agora quero sair do sistema.</a>"; ?>

                                <hr />
                                <h4>Gerência de Trabalhos Acadêmicos</h4>
                                <div class="span1">
                                    <a href="../trabalhoAcadêmico/trabalho_cadastrar.php" class="btn btn-primary">
                                        <i class="icon-pencil icon-white"></i> <span><strong>Cadastrar</strong></span>
                                    </a>
                                    <a href="../trabalhoAcadêmico/trabalho_listar.php" class="btn btn-primary"> <i
                                            class="icon-eye-open icon-white"></i> <span><strong>Consultar</strong></span>
                                    </a>
                                    <a href="../trabalhoAcadêmico/listar_trabalho.php" class="btn btn-primary"> <i
                                            class="icon-edit icon-white"></i> <span><strong>Editar</strong></span>
                                    </a>
                                    <a href="../trabalhoAcadêmico/" class="btn btn-primary">
                                        <i class="icon-trash icon-white"></i>
                                        <span><strong>Excluir</strong></span>        	
                                    </a>
                                </div><br>
                                <?php
                                if ($_SESSION ['UsuarioNivel'] == 2) {
                                    $menuRestrito =
                                            '<h4>Gerência de Usuários</h4>
                                              <div class="span1">
                                               <a href="../negocio/trabalho_cadastrar.php" class="btn btn-primary">
                                                 <i class="icon-pencil icon-white"></i> <span><strong>Cadastrar</strong></span>
                                               </a>
                                               <a href="trabalho_listar.php" class="btn btn-primary"> <i
                                                 class="icon-eye-open icon-white"></i> <span><strong>Consultar</strong></span>
                                               </a>
                                               <a href="listar_trabalho.php" class="btn btn-primary"> <i
                                                 class="icon-edit icon-white"></i> <span><strong>Editar</strong></span>
                                               </a>
                                               <a href="#" class="btn btn-primary">
                                                 <i class="icon-trash icon-white"></i>
                                                 <span><strong>Excluir</strong></span>        	
                                               </a>
                                             </div>';
                                }
                                echo $menuRestrito;
                                ?>

                                <br>
                            </div>
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