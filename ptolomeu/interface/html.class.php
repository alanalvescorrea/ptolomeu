<?php

/**
 * Esta classe contém funções para exibir fragmentos em html 
 * que compõem as páginas do sistemas.
 *
 * @author Alan Alves Correa
 */
class html {

    function metaTag() {
        ?>
        <meta name="description" content="Repositorio digital de trabalhos acadêmicos">
        <meta name="keywords" content="educação,mestrado,doutorado, monografia, biblioteca digital">
        <meta name="author" content="projeto polosap">

        <?php
    }

    function viewport() {
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic' rel='stylesheet' type='text/css'>

        <?php
    }

    function includes() {
        ?>
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

        <?php
    }

    function cabecalho() {
        ?>
        <div class="header">
            <div class="container">
                <div class="row">

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-text">
                            <!-- LOGO -->
                            <h3>Ptolomeu</h3>
                            <p>Repositório virtual de trabalhos acadêmicos</p>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Navegação -->
                        <div class="navi">
                            <div id="ddtopmenubar" class="mattblackmenu">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="service.html">Sobre o sistema</a></li>
                                    <li><a href="about.html">Buscar trabalhos</a></li>
                                    <li><a href="../login/login.php">Login</a>
                                    </li>
                                </ul>
                            </div>
                        </div>             
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    function rodape() {
        ?>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="fwidget">
                            <div class="contact">
                                <h4>Entre em contato</h4>
                                <hr>
                                <i class="icon-envelope"></i> <a href="#"> cristian.santos@nead.riogrande.ifrs.edu.br</a>
                                <hr>
                                <i class="icon-envelope"></i> <a href="#"> ana.lemke@nead.riogrande.ifrs.edu.br</a>
                                <hr>
                                <i class="icon-envelope"></i> <a href="#"> borbamelina@gmail.com</a>
                                <hr>
                                <i class="icon-envelope"></i> <a href="#"> alan.correa.sul@gmail.com</a>
                                <hr>
                            </div>
                            <div class="social">
                                <a href="#" class="facebook"><i class="icon-facebook"></i></a>
                                <a href="#" class="google-plus"><i class="icon-google-plus"></i></a>
                                <a href="#" class="twitter"><i class="icon-twitter"></i></a>
                                <a href="#" class="linkedin"><i class="icon-linkedin"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-4">
                        <div class="fwidget">
                            <div class="categories">
                                <h4>Apoio</h4>
                                <hr>
                                <a href="http://www.polosap.com.br/">Polo Universitário Santo Antônio</a><br>
                                <a href="http://etec.riogrande.ifrs.edu.br/">Etec</a><br>
                                <a href="http://www.riogrande.ifrs.edu.br/site/">IFRS</a><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="fwidget">
                            <div class="subscribe">
                                <h4>Desenvolvedores</h4>
                                <hr>
                                <p></p>                                
                            </div>
                        </div>
                    </div>	

                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copy">
                            Copyright &copy; 2013 <a href="Responsivewebinc">Projeto Polosap</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php
    }

    function titulo() {
        ?>
        <title>Ptolomeu</title>

        <?php
    }

    function menssagemErroLogin() {
        ?>
        <link href="../css/alert.css" rel="stylesheet" type="text/css" />
        <div class="alerts">
            <div class="alert-message warning">
                <a class="close" href="#"></a>
                <strong>
                    <a href="../login/login.php" class="alert-link">Sabemos que isso é chato, mas os dados informados estão incorretos. Tente novamente :( </a>
                </strong>

            </div>
        </div>

        <?php
    }

    function carregarJavascrip() {
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

        <?php
    }
    
      function unicode() {
        ?>
         <meta charset="UTF-8">
        <?php
    }

}
?>

