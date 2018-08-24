<?php
	include 'control/router.class.php';
?>
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
                        <a class="navbar-brand logo" href="index.php"><img class=" img-fluid" src="dist/img/logo.png" alt=""></a>
                        <a class="navbar-brand logo1" href="index.php"><img class=" img-fluid" src="dist/img/logoBranco.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
                         <span class="navbar-toggler-icon" ></span>
                    </button>
                        <div class="collapse navbar-collapse float-right" id="menu">
                            <ul class="navbar-nav ">
                                <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
                                <li class="nav-item"><a class="nav-link" href="index.php?page=regulamento">REGULAMENTO</a></li>
                                <li class="nav-item caixaSair"><a class="nav-link" href="control/deslogar.php">SAIR</a>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="modal fade " id="loginMoldal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                    <div class="modal-dialog modal-sm ">
                        <div class="modal-content px-3 py-3 roxo inputLilas">
                            <div class="modalTitulo">
                                <button type="button" class="text-branco close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="login" class=" text-branco">LOGIN DO ALUNO</h4>
                            </div>
                            <div class="modal-body">
                                <form class="formLogCli" action="#">
                                    <div class="form-group"> <input type="text" class="form-control emailLog" name="emailLog" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control senha" name="senha" placeholder="Senha">
                                    </div>
                                    <p class="text-center">
                                        <input type="hidden" name="logaCli" value="Entrar">
                                        <button class="btn btn-primary logaCli" name="logaCli">
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
		new routers('aluno');
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

<!--
        <footer>
            <div class="row tirar_margin_row pt-4 pb-1 cinza">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-lg-8 col-sm-12 col-xl-8  text-branco" style="background:red">
                            <img class="logoFooter float-left" src="dist/img/logoBranco.png" alt="" style="background:green">
                            <p class="float-left copy" style="background:pink">© Copyright 2018 - AML Reputacional, todos os direitos reservados.</p>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xl-4  text-branco  " style="background:blue">
                            <ul class="footerMenu  float-right">
                                <li><a href="index.php?page=privacidade">PRIVACIDADE</a></li>
                                <li><a href="index.php?page=contato">CONTATO</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
-->
 
        
        
        
         <footer>
            <div class="tirar_margin_row pt-4 pb-1 cinza">
                <div class="container">
                    <div class="row">
                        <div class="copyry copyry1 text-branco " style="background:">
                            <img class="logoFooter" src="dist/img/logoBranco.png" alt="" style="background:">
                            <p class="" style="background:">© Copyright 2018 - AML Reputacional, todos os direitos reservados.</p>
                        </div>
                        
                        
                        <div class="footerMenu1 " style="background:">
                            <ul class="">
                                <li><a href="index.php?page=privacidade">PRIVACIDADE</a></li>
                                <li><a href="index.php?page=contato">CONTATO</a></li>
                            </ul>
                        </div>
                        
                        <div class="copyry copyry2 text-branco" style="background:">
                            <img class="logoFooter" src="dist/img/logoBranco.png" alt="" style="background:">
                            <p class="" style="background:">© Copyright 2018 - AML Reputacional, todos os direitos reservados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        
        
        
        
        
        
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="dist/js/jquery.blockUI.js"></script>
        <script src="dist/js/ajaxLoading.js"></script>
        <script src="control/script/verificaLogin.js"></script>
    </body>

    </html>
