<?php
 session_start();
 include("../config.class.php");
    class postagem{
        private $conn;
        private $SendCadImg;
        private $Grupo;
        function __construct()
		{
            $conexao = new conexao();
            $this->conn = $conexao->conect();
            $grupo = $_SESSION['idUser_portal'];
            $postagem = $_POST['postDesafio'];
            $linkVideo = $_POST['videoLink'];
            echo ($linkVideo);

            $perfil_usu = $_SESSION['ID_PERFIL'];
            $SendCadImg = filter_input(INPUT_POST, 'SendCadImg', FILTER_SANITIZE_STRING);

            $arquivo = $_FILES['inserirFoto'];
            
            $sql = "INSERT INTO `POSTAGEM` (`CONTEUDO`) VALUES ('$postagem')";
            $db = $this->conn->prepare($sql);
            $db->execute();

            $sqlIdP ="SELECT MAX(ID_POSTAGEM) AS ID FROM POSTAGEM;";
            $db2 = $this->conn->prepare($sqlIdP);
            $db2->execute();
            $linha = $db2->fetchAll();
            foreach ($linha as $value){
                $IDP_PARA_ENVIO = $value['ID'];
            }

            if($linkVideo){
                $sql = "INSERT INTO `HISTORICO_DESAFIO` (`PESSOA_ID`, `DESAFIO_ID`, `GRUPO_ID`, `POSTAGEM_ID`) VALUES ('$perfil_usu','1', '$grupo', '$IDP_PARA_ENVIO')";
                $db = $this->conn->prepare($sql);
                $db->execute();
                $sql2 ="SELECT MAX(HISTORICO_ID) AS ID FROM HISTORICO_DESAFIO WHERE PESSOA_ID = ".$perfil_usu;
                $db2 = $this->conn->prepare($sql2);
                $db2->execute();
                $linha = $db2->fetchAll();
                foreach ($linha as $value){
                    $ID_PARA_ENVIO = $value['ID'];
                }
                $sql3 = "INSERT INTO `POST_MIDIA` (`MIDIA_TIPO_ARQUIVO`, `MIDIA_URL_TEXT`, `HISTORICO_ID`) VALUES ('VIDEO','$linkVideo', '$ID_PARA_ENVIO')";
                $db3 = $this->conn->prepare($sql3);
                $db3->execute();
                header('Location: ../index.php?page=grupo');
            }
            if(empty($arquivo['name'][0]) && empty($linkVideo) ){               
                //METODO PARA O HISTORICO DESAFIO
                $sql = "INSERT INTO `HISTORICO_DESAFIO` (`PESSOA_ID`, `DESAFIO_ID`, `GRUPO_ID`, `POSTAGEM_ID`) VALUES ('$perfil_usu','1', '$grupo', '$IDP_PARA_ENVIO')";
                $db = $this->conn->prepare($sql);
                $db->execute();
            }
            else{
                    if ($SendCadImg) {
                        //METODO PARA A POSTAGEM COM FOTO
                        $sql = "INSERT INTO `HISTORICO_DESAFIO` (`PESSOA_ID`, `DESAFIO_ID`, `GRUPO_ID`, `POSTAGEM_ID`) VALUES ('$perfil_usu','1', '$grupo', '$IDP_PARA_ENVIO')";
                        $db = $this->conn->prepare($sql);
                        $db->execute();
                        $sql2 ="SELECT MAX(HISTORICO_ID) AS ID FROM HISTORICO_DESAFIO WHERE PESSOA_ID = ".$perfil_usu;
                        $db2 = $this->conn->prepare($sql2);
                        $db2->execute();
                        $linha = $db2->fetchAll();
                        foreach ($linha as $value){
                            $ID_PARA_ENVIO = $value['ID'];
                        }

                        for ($cont = 0; $cont < count($arquivo['name']); $cont++) 
                            {
                                $nome = $_FILES['inserirFoto']['name'];
                                // Pega a extensao
                                $extensao= strrchr($nome[$cont], '.');
                                // Converte a extensao para mimusculo
                                $extensao = strtolower($extensao);
                                if(strstr('.jpg;.jpeg;.gif;.png', $extensao))
                                    {
                                    $resultado_final = "img_".md5($nome[$cont].time());
                                    $destino = "../imagens_post/" . $resultado_final.$extensao;
                                    if (move_uploaded_file($arquivo['tmp_name'][$cont], $destino)) {

                             
                                        $sql3 = "INSERT INTO `POST_MIDIA` (`MIDIA_TIPO_ARQUIVO`, `MIDIA_URL_TEXT`, `HISTORICO_ID`) VALUES ('IMAGEM','$destino', '$ID_PARA_ENVIO')";
                                        $db3 = $this->conn->prepare($sql3);
                                        $db3->execute();
                                         header('Location: ../index.php?page=grupo');
                                        
                                    } else {
                                            echo "Erro ao realizar upload";
                                        }
                                }else{  
                                    echo "Você poderá enviar apenas arquivos \"*.jpg;*.jpeg;*.gif;*.png\"<br />";
                                    }
                                }
                    } else {
                            echo "Erro ao realizar upload";
                    }
                }
            }
}

$postagem = new postagem();
        