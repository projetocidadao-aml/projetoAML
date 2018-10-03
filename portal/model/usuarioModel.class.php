<?php
include("config.class.php");
	/**
	 * Captura informações do usuario
	 */
	 class usuarioModel
	{
		private $conn;
		public $valorCampo;
		function __construct($id, $campo)
		{
			$conexao = new conexao();
			$this->conn = $conexao->conect();
            $sql = "SELECT * FROM PESSOA 
            INNER JOIN PESSOA_GRUPO ON PESSOA_GRUPO_ID = PESSOA.PESSOA_ID
            INNER JOIN GRUPO ON GRUPO.GRUPO_ID = PESSOA_GRUPO.GRUPO_ID
            INNER JOIN PESSOA_CURSO ON PESSOA_CURSO.ID_PESSOA = PESSOA.PESSOA_ID
            INNER JOIN CURSOS ON CURSOS.CURSO_ID = PESSOA_CURSO.PESSOA_CURSO_ID
            INNER JOIN ETEC_CURSOS ON ETEC_CURSOS.ETEC_CURSO_ID = CURSOS.CURSO_ID
            INNER JOIN ETEC ON ETEC.ETEC_ID = ETEC_CURSOS.ID_ETEC WHERE ID_PESSOA = $id";
			$db = $this->conn->prepare($sql);
			$db->execute();
			$result = $db->fetch();
			$resultfinal = $db->rowCount();
			$_SESSION['loged'] = "Logado";
			$this->valorCampo = $result[$campo];
		}
		function listaPosts(){
            $sql = "SELECT  POSTAGEM.*, PESSOA.*, POST_MIDIA.*, COMENTARIO.*, count(LIKES.LIKES_ID) as likes FROM POSTAGEM
			INNER JOIN PESSOA ON PESSOA.PESSOA_ID = POSTAGEM.ID_PESSOA
			LEFT JOIN POST_MIDIA ON POST_MIDIA.ID_POSTAGEM = POSTAGEM.ID_POSTAGEM
			LEFT JOIN COMENTARIO ON COMENTARIO.ID_POSTAGEM = POSTAGEM.ID_POSTAGEM
			LEFT JOIN LIKES ON LIKES.POSTAGEM_ID = POSTAGEM.ID_POSTAGEM";
            $db = $this->conn->prepare($sql);
            $linha = $db->execute();
            $linha = $db->fetchAll();
			foreach ($linha as $value) {
				if($value['MIDIA_ID']){
					$postmidia = '<div class="fotoVideoPost">
									<img src="'.$value['MIDIA_URL_TEXT'].'" alt="">
								</div>';
				}else{
					$postmidia = '';
				}
				echo '<div class="col-sm-12 col-md-8 primary mb-4">
                <div class="card testePTColorgray">
                    <div class="mensagem">
                        <div class="avatarMensagem">
                            <a href="index.php?page=coordenador"> <img src="dist/img/avatar.png" class="rounded-circle" alt=""></a>
                        </div>
                        <div class="nomeAvatarMensagem">
                            <a href="index.php?page=coordenador">
                                <p class="text-preto">'.$value['PESSOA_NOME'].' <br>compartilhado em '.$value['DATA_POSTAGEM'].'</p>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-text img">
                            <p>
							'.$value['CONTEUDO'].'
                            </p>
                        </div>
					</div>
					'.$postmidia.'
                    <div class="botaoMensagem cinza-claro2 py-2">
                        <button class="btn btn-primary"><i class="fas fa-thumbs-up"></i></button>
						<!--<button class="btn btn-primary"><i class="fas fa-share"></i></button>-->
                        <p class="ml-4 mt-1">'.$value['likes'].' curtidas </p>
                        <p class=" mt-1"> 10 Comentarios</p>
                    </div>
                    <div class="mensagemPost">
                        <div class="avatarMensagem">
                            <a href="index.php?page=aluno"><img src="dist/img/avatar.png" class="rounded-circle" alt=""></a>
                        </div>
                        <div class="nomeAvatarMensagem">
                            <a href="index.php?page=aluno">
                                <p class="text-preto">Nome do aluno <br> Compartilhado em 00/00/0000</p>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-text clear">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad provident quia tempore minus maiores, modi nihil laudantium? Quidem officia adipisci eligendi, nihil, natus, reprehenderit placeat earum iusto blanditiis eius voluptatem.</p>
                                <p class="responder"> RESPONDER</p>
                                <div class="responderMsg respondaMensagem">
                                    <div class="avatarResponda">
                                        <a href="index.php?page=aluno">
                                        <img src="dist/img/avatar.png" class="rounded-circle" alt="">
                                         </a>
                                    </div>
                                    <div class="respondaMensagemInput">
                                        <input type="text">
                                    </div>
                                    <div class="respondaMensagemBotao">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mensagemPost">
                        <div class="avatarMensagem">
                            <a href="index.php?page=coordenador"><img src="dist/img/avatar.png" class="rounded-circle" alt=""></a>
                        </div>
                        <div class="nomeAvatarMensagem">
                            <a href="index.php?page=coordenador">
                                <p class="text-preto">
                                Nome do coordenador <br> Compartilhado em 00/00/0000
                                </p>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-text clear">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad provident quia tempore minus maiores, modi nihil laudantium? Quidem officia adipisci eligendi, nihil, natus, reprehenderit placeat earum iusto blanditiis eius voluptatem.</p>
                               <p class="responder"> RESPONDER</p>
                                <div class="responderMsg respondaMensagem">
                                    <div class="avatarResponda">
                                        <a href="index.php?page=aluno">
                                        <img src="dist/img/avatar.png" class="rounded-circle" alt="">
                                         </a>
                                    </div>
                                    <div class="respondaMensagemInput">
                                        <input type="text">
                                    </div>
                                    <div class="respondaMensagemBotao">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="mensagemPostResposta">
                        <div class="avatarMensagem">
                            <a href="index.php?page=aluno"><img src="dist/img/avatar.png" class="rounded-circle" alt=""></a>
                        </div>
                        <div class="nomeAvatarMensagemResposta">
                            <a href="index.php?page=aluno">
                                <p class="text-preto">Nome do aluno <br> Compartilhado em 00/00/0000

                                </p>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-text clear">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad provident quia tempore minus maiores, modi nihil laudantium? Quidem officia adipisci eligendi, nihil, natus, reprehenderit placeat earum iusto blanditiis eius voluptatem.</p>
                                <p class="responder"> RESPONDER</p>
                                <div class="responderMsg respondaMensagem">
                                    <div class="avatarResponda">
                                        <a href="index.php?page=aluno">
                                        <img src="dist/img/avatar.png" class="rounded-circle" alt="">
                                         </a>
                                    </div>
                                    <div class="respondaMensagemInput">
                                        <input type="text">
                                    </div>
                                    <div class="respondaMensagemBotao">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="respondaMensagem">
                        <div class="avatarResponda">
                            <a href="index.php?page=aluno">
                            <img src="dist/img/avatar.png" class="rounded-circle" alt="">
                            </a>
                        </div>
                        <div class="respondaMensagemInput">
                            <input type="text">
                        </div>
                        <div class="respondaMensagemBotao">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>';
			}
        }
	}
?>
