<?php
	include 'control/router.class.php';
?>
    <!doctype html>
    <html lang="pt-br">

    <head>

        <!-- SEO -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="O Projeto Cidadão do Futuro, iniciativa a ser desenvolvida pela AML Consulting em parceria com as ETECs Basilides de Godoy, André Bogasian e Jaraguá, tem como objetivo desenvolver uma plataforma online para abrigar o concurso Cidadão do Futuro. A iniciativa busca a participação dos alunos e professores em ações para o exercício da cidadania, contribuindo na formação de cidadãos conscientes dos seus deveres e obrigações na sociedade.">
        <meta name="robots" content="index, follow">
        <meta name="keywords" content="Etec ,Etec Jaraguá, Etec basilides de godoy, Etec André Bogasian, AML, Cidadão, Cidadão do futuro">
        <meta name="author" content="Etec Jaraguá, Etec basilides de godoy e Etec André Bogasian">
        <meta name="og:title" property="og:title" content="Cidadão do futuro">
        <title>Cidadão do futuro</title>



        <link rel="shortcut icon" href="dist/img/favicon.png">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="dist/css/bootstrap.css">
        <link rel="stylesheet" href="dist/css/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.min.css">

        <!-- CSS -->
        <link rel="stylesheet" href="dist/css/style.css">

        <style>
            a {
                text-decoration: none;
            }

            a:link {
                text-decoration: none;
            }

            a:hover {
                text-decoration: none;
            }

        </style>
    </head>

    <body>
        <!--   <div id="teste"></div>-->
        <div id="topo" class="hide-on-init">
            <div class="container">
                <div class="col-md-12">
                    <nav class="menuTopo navbar navbar-expand-lg navbar-light  ">
                        <a class="navbar-brand logo" href="index.php"><img class=" img-fluid" src="dist/img/logo.png" alt=""></a>
                        <a class="navbar-brand logo1" href="index.php"><img class=" img-fluid" src="dist/img/logoBranco.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
                         <span class="navbar-toggler-icon" ></span>
                    </button>
                        <div class="collapse navbar-collapse float-right" id="menu">
                            <ul class="navbar-nav ">
                                <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
                                <li class="nav-item"><a class="nav-link" href="index.php?page=regulamento">REGULAMENTO</a></li>
                                <li class="nav-item caixaLogin"><a class="nav-link" href="" data-toggle="modal" data-target="#loginMoldal">LOGIN</a>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="modal fade " id="loginMoldal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                    <div class="modal-dialog modal-sm ">
                        <div class="modal-content px-3 py-3 roxo inputLilas">
                            <div class="modalTitulo">
                                <button type="button" class="text-branco close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h5 class="modal-title" id="login" class=" text-branco">LOGIN</h5>
                            </div>
                            <div class="modal-body">
                                <form class="formLogCli" action="#">
                                    <div class="form-group"> <input type="text" class="form-control emailLog" name="emailLog" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control senha" name="senha" placeholder="Senha">
                                    </div>
                                    <p class="text-center margin_btn">
                                        <input type="hidden" name="logaCli" value="Entrar">
                                        <button class="btn btn-primary logaCli" name="logaCli">
                                    <i class="fa fa-sign-in"></i>Entrar
                                    </button>
                                        <label class="returnFormLogCli"></label>
                                    </p>

                                    <p class="text-center pt-3"><a href="index.php?page=alterarCadastro" class="mr-2">Esqueci minha senha</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <main class="hide-on-init" style="overflow-x: hidden; max-width: 1400px;margin: auto;">
            <?php 
            new routers('index');
           ?>
        </main>



        <script src="dist/js/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#teste").fadeOut("show");
            });

        </script>

        <script src="dist/js/popper.min.js"></script>
        <script src="dist/js/bootstrap.min.js"></script>

        <script src="dist/js/revelaSenha.js"></script>
        <script src="dist/js/modalVideoDesafio.js"></script>
        <script src="dist/js/curtirDesafio.js"></script>
        <script src="dist/js/addIntegrante.js"></script>
        <script src="dist/js/msgAluno.js"></script>
        <script src="dist/js/inserirVideoFoto.js"></script>
        <script src="dist/js/animacao.js"></script>


        <footer class="hide-on-init">
            <div class="md-12 pt-4 pb-1 cinza">
                <div class="container">
                    <div class="row py-2">

                        <div class="footerMenu1 pb-2">
                            <img class="logoFooter" src="dist/img/logoBranco.png" alt="">
                        </div>
                        <div class="footerMenu1 pb-2">

                            <p><a href="index.php?page=contato" class="mr-2">CONTATO</a></p>

                        </div>

                        <div class="copyry copyry2 text-branco pb-2" style="background:">
                            <p class="" style="background:">© Copyright 2018 - AML Reputacional, todos os direitos reservados.</p>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
        <div class="pos-load-page active">
            <img src="dist/img/logo2.png" />
            <img class="load-image" src="dist/img/loading.gif">
        </div>





        <script src="dist/js/jquery.min.js"></script>
        <script src="dist/js/revelaSenha.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="dist/js/jquery.blockUI.js"></script>
        <script src="dist/js/ajaxLoading.js"></script>
        <script src="control/script/verificaLogin.js"></script>
        <script type="text/javascript">
            window.addEventListener('load', () => {
                setTimeout(() => {
                    document.querySelector('.pos-load-page').style.opacity = '0';
                }, 700)
                setTimeout(() => {
                    $('.hide-on-init').removeClass('hide-on-init');
                    document.querySelector('.pos-load-page').classList.remove('active');
                }, 1400);
            });

        </script>
    </body>

    </html>
