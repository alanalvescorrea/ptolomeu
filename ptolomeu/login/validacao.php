<?php 
require '../alertas/alertas.php';
require '../interface/html.class.php';
?>

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <!-- Título -->
        <?php
        $titulo = new html();
        $titulo->titulo();
        ?>

        <!-- Descrição, Palavras-chave e  créditos -->
        <meta name="description" content="Repositorio digital de trabalhos acadêmicos">
        <meta name="keywords" content="educação,mestrado,doutorado, monografia, biblioteca digital">
        <meta name="author" content="projeto polosap">

        <!-- Viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic' rel='stylesheet' type='text/css'>

        <!-- Bootstrap CSS -->
        <link href="../bibliotecas/css/bootstrap.min.css" rel="stylesheet">
        <!-- DropDownPlugin -->
        <link href="../bibliotecas/css/ddlevelsmenu-base.css" rel="stylesheet">
        <link href="../bibliotecas/css/ddlevelsmenu-topbar.css" rel="stylesheet">
        <!-- Font awesome CSS -->
        <link href="../bibliotecas/css/font-awesome.min.css" rel="stylesheet">		
        <!-- Custom CSS -->
        <link href="../bibliotecas/css/style.css" rel="stylesheet">
        <!-- Color CSS -->
        <link href="../bibliotecas/css/color.css" rel="stylesheet">
        <!-- Favicon -->
        <link rel="shortcut icon" href="#">

    </head>

    <body>
        <!-- Cabeçalho -->
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

        <!-- Rodapé -->
        <?php
        $rodape = new html();
        $rodape->rodape();
        ?>

        <!-- Javascript arquivos -->

        <!-- jQuery -->
        <script src="../bibliotecas/js/jquery.js"></script>

        <!-- Bootstrap JS -->
        <script src="../bibliotecas/js/bootstrap.min.js"></script>

        <!-- Isotope -->
        <script src="../bibliotecas/js/isotope.js"></script>

        <!-- Respond JS for IE8 -->
        <script src="../bibliotecas/js/respond.min.js"></script>

        <!-- HTML5 Support for IE -->
        <script src="../bibliotecas/js/html5shiv.js"></script>

        <!-- Modernizer -->
        <script src="../bibliotecas/js/modernizr.custom.28468.js"></script>

        <!-- Custom JS -->
        <script src="../bibliotecas/js/custom.js"></script>
    </body>	
</html>