<?php
require '../interface/html.class.php';
?>

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
                            <?php
// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
                            if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
                                header("Location: ../login/login.php");
                                exit;
                            }

                            include ('../persistencia/conexao.php');
                            $novaConexao = new conexao();
                            $novaConexao->conecta();

                            $usuario = mysql_real_escape_string($_POST['usuario']);
                            $senha = mysql_real_escape_string($_POST['senha']);

// Validação do usuário/senha digitados
                            $sql = "SELECT `id`, `nome`,`nivel` FROM `usuarios` WHERE (`usuario` = '" . $usuario . "') AND (`senha` = '" . sha1($senha) . "') AND (`ativo` = 1) LIMIT 1";
                            $query = mysql_query($sql);
                            if (mysql_num_rows($query) != 1) {
                                // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
                                $mensagemFormularioLoginSemUsuarioEncontrado = new html();
                                $mensagemFormularioLoginSemUsuarioEncontrado->menssagemErroLogin();
                            } else {
                                // Salva os dados encontados na variável $resultado
                                $resultado = mysql_fetch_assoc($query);

                                // Se a sessão não existir, inicia uma
                                if (!isset($_SESSION))
                                    session_start();

                                // Salva os dados encontrados na sessão
                                $_SESSION['UsuarioID'] = $resultado['id'];
                                $_SESSION['UsuarioNome'] = $resultado['nome'];
                                $_SESSION['UsuarioNivel'] = $resultado['nivel'];

                                // Redireciona o visitante
                                header("Location: restrito.php");
                                exit;
                            }
                            ?>
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