<?php
require_once "superior.php" ;
?>


    <div class="container">
        <div class="row">
            <div class="titulo">
                <h1>Registra-se</h1>
            </div>
            <div class="col-sm-12 col-md-12 primary mb-4">
                <div class="card cinza-claro">

                    <div class="card-body">
                        <div class="caixaRegistrar">
                            <label for="">Nome do grupo</label>
                            <input type="text">
                        </div>

                        <div class="caixaRegistrar">
                            <label for="">Proposta de trabalho</label>
                            <input type="text">
                        </div>

                        <div class="caixaRegistrar">
                            <label for="">Nome da ETEC</label>
                            <input type="text">
                        </div>

                        <div class="caixaRegistrar">
                            <label for="">Coordenador</label>
                            <input type="text">
                        </div>


                        <div class="caixaRegistrar">
                            <label for="">Integrantes</label>
                            <input type="text">
                            <span><i class="fas fa-plus-circle"></i></span>
                        </div>

                        <div class="caixaRegistrar">
                            <p data-toggle="modal" data-target="#regulamentoModal" style="cursor: pointer;">Ler Regulanto</p>
                        </div>

                        <div class="caixaRegistrarCkb">
                            <p><input type="checkbox"> Li e aceito o Regulamento</p>
                        </div>



                        <div class="modal fade" id="regulamentoModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content px-3 py-3">
                                    <div class="modalTitulo">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="login">Regulamento</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-center text-muted" style="overflow:auto; height: 300px;">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, sapiente incidunt odio. Non nihil tenetur recusandae eaque, ducimus veniam assumenda, quaerat qui atque, itaque aspernatur, ipsam corporis distinctio laborum quasi! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, sapiente incidunt odio. Non nihil tenetur recusandae eaque, ducimus veniam assumenda, quaerat qui atque, itaque aspernatur, ipsam corporis distinctio laborum quasi! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, sapiente incidunt odio. Non nihil tenetur recusandae eaque, ducimus veniam assumenda, quaerat qui atque, itaque aspernatur, ipsam corporis distinctio laborum quasi! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, sapiente incidunt odio. Non nihil tenetur recusandae eaque, ducimus veniam assumenda, quaerat qui atque, itaque aspernatur, ipsam corporis distinctio laborum quasi! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, sapiente incidunt odio. Non nihil tenetur recusandae eaque, ducimus veniam assumenda, quaerat qui atque, itaque aspernatur, ipsam corporis distinctio laborum quasi!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, sapiente incidunt odio. Non nihil tenetur recusandae eaque, ducimus veniam assumenda, quaerat qui atque, itaque aspernatur, ipsam corporis distinctio laborum quasi!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, sapiente incidunt odio. Non nihil tenetur recusandae eaque, ducimus veniam assumenda, quaerat qui atque, itaque aspernatur, ipsam corporis distinctio laborum quasi!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, sapiente incidunt odio. Non nihil tenetur recusandae eaque, ducimus veniam assumenda, quaerat qui atque, itaque aspernatur, ipsam corporis distinctio laborum quasi! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, sapiente incidunt odio. Non nihil tenetur recusandae eaque, ducimus veniam assumenda, quaerat qui atque, itaque aspernatur, ipsam corporis distinctio laborum quasi!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, sapiente incidunt odio. Non nihil tenetur recusandae eaque, ducimus veniam assumenda, quaerat qui atque, itaque aspernatur, ipsam corporis distinctio laborum quasi!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, sapiente incidunt odio. Non nihil tenetur recusandae eaque, ducimus veniam assumenda, quaerat qui atque, itaque aspernatur, ipsam corporis distinctio laborum quasi!
                                        </p>

                                        <p class="text-center text-muted">
                                            <a href="">Concordo</a>
                                        </p>

                                        <p class="text-center text-muted">
                                            <a href="">Não concordo</a>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="caixaRegistrarBotao clear">
                            <button type="submit" class="btn btn-primary  float-right" data-toggle="modal" data-target="#registroMoldal">Cadatrar</button>

                        </div>

                        <div class="modal fade" id="registroMoldal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content px-3 py-3">
                                    <div class="modalTitulo">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="login">Registrado com sucesso</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-center text-muted">
                                            enviamos uma confirmação para seu email
                                        </p>

                                        <p class="text-center text-muted">
                                            user@email.com
                                        </p>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>



        </div>

    </div>



    <?php
require_once "inferior.php" ;
?>
