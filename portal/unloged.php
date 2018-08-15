<?php
	include 'control/router.class.php';
?>
    <!doctype html>
    <html lang="pt-br">

    <!doctype html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="dist/css/bootstrap.css">
        <link rel="stylesheet" href="dist/css/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.min.css">

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
        <div id="topo">
            <div class="container">
                <div class="col-md-12">
                    <nav class="menuTopo navbar navbar-expand-lg navbar-light  ">
                        <a class="navbar-brand logo" href="index.php"><img class="logo img-fluid" src="dist/img/logoBranco.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
                         <span class="navbar-toggler-icon" ></span>
                    </button>
                        <div class="collapse navbar-collapse float-right" id="menu">
                            <ul class="navbar-nav ">
                                <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
                                <li class="nav-item"><a class="nav-link" href="index.php?page=regulamento">REGULAMENTO</a></li>
                                <li class="nav-item caixaLogin"><a class="nav-link" href="" data-toggle="modal" data-target="#loginMoldal">AREA DO ALUNO</a>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="modal fade " id="loginMoldal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                    <div class="modal-dialog modal-sm ">
                        <div class="modal-content px-3 py-3 laranja">
                            <div class="modalTitulo">
                                <button type="button" class="text-branco close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="login" class=" text-branco"><u>Login do aluno</u></h4>
                            </div>
                            <div class="modal-body">
                                <form class="formLogCli">
                                    <div class="form-group"> <input type="text" class="form-control emailLog" name="emailLog" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control senha" name="senha" placeholder="Senha">
                                    </div>
                                    <p class="text-center">
                                        <input type="hidden" name="logaCli" value="Entrar">
                                        <button type="button" class="btn btn-primary logaCli" name="logaCli">
                                    <i class="fa fa-sign-in"></i>Entrar
                                    </button>
                                        <label class="returnFormLogCli"></label>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <?php 
	if(@$_GET['page'] == 'cadastro_etec'){
		new routers('cadastro_etec');
	}
	else{
		new routers('login');
	}

	?>


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

        <footer>
            <div class="row tirar_margin_row pt-4 pb-1 cinza">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-8  text-branco ">
                            <img class="logoFooter float-left" src="dist/img/logoBranco.png" alt="">
                            <p class="float-left">© Copyright 2018 - AML Reputacional, todos os direitos reservados.</p>
                        </div>
                        <div class="col-sm-6 col-md-4 text-branco  ">
                            <ul class="footerMenu  float-right">
                                <li><a href="index.php?page=privacidade">Privacidade</a></li>
                                <li><a href="index.php?page=contato">Contato</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


    </body>

    </html>