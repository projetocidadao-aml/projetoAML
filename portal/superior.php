<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.min.css">

    <link rel="stylesheet" href="./css/style.css">

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

        #login {
            color: black;
            text-align: center;
        }

        .caixaLogin {
            background: green;
            padding: 6px;

        }

        .menu {
            padding-top: 20px;
        }

        .menu li {
            margin-left: 20px;

        }

        .logo {
            top: 30px;
            left: 30px;
            position: absolute;
            z-index: 10;
        }

    </style>

</head>

<body>
    <div id="teste"></div>

    <div id="topo">

        <div class="container">
            <div class="row">
                <div class="col-md-6 ">
                </div>

                <div class="col-md-6 ">
                    <ul class="menu">
                        <li><a href="index.php">HOME</a></li>
                        <li>
                            <a href="regulamento.php">REGULAMENTO</a></li>
                        <li class="caixaLogin"><a href="#" data-toggle="modal" data-target="#loginMoldal">LOGIN</a></li>

                    </ul>
                </div>
            </div>


            <div class="modal fade" id="loginMoldal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content px-3 py-3">
                        <div class="modalTitulo">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="login">Login</h4>
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
                            <p class="text-center text-muted">
                                <a href="registrar.php" class="text-center text-muted">Inscreva sua ETEC</a>
                            </p>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="logo">
        <a href="index.php"><img src="img/logo.png" alt=""></a>


    </div>
