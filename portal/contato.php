<?php
require_once "superior.php" ;
?>



    <div class="titulo text-center">
        <h1>Contato</h1>
    </div>
    <div class="container">
        <form method="post" action="">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="primeiroNome">Nome</label>
                        <input type="text" class="form-control" name="nomeContato">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="emailContato">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="assunto">Assunto</label>
                        <input type="text" class="form-control" name="assuntoContato">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea name="mensagemContato" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 text-center mb-4">
                <button type="submit" class="btn btn-primary" name="enviarMensagemContato"><i class="fa fa-envelope-o"></i>Enviar mensagem</button>

            </div>







        </form>


    </div>


    <?php
require_once "inferior.php" ;
?>
